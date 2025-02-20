<?php

namespace App\Http\Controllers;

use App\Mail\ResetPasswordMail;
use App\Models\Province;
use App\Models\State;
use App\Models\User;
use App\Models\UserPackage;
use App\Notifications\SystemNotification;
use App\SMS\sms;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Support\Facades\DB;
use Orchid\Platform\Models\Role;
use Orchid\Attachment\File;
use Illuminate\Support\Str;


class UserController extends Controller
{
    public function test()
    {
        return "test";
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $phone = $request->phone;
        $countryCode = $request->country_phone_code;
        $password = $request->password;

        if ($phone && $countryCode) {
            $user = User::where('phone', $phone)->where('country_phone_code', $countryCode)->first();
        } elseif ($email) {
            $user = User::where('email', $email)->first();
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Email veya telefon numarası giriniz',
            ])->setStatusCode(400);
        }

        if (!$user) {
            return response()->json([
                'status' => false,
                'message' => 'Kullanıcı bulunamadı',
            ])->setStatusCode(404);
        }

        if (!Hash::check($password, $user->password)) {
            return response()->json([
                'status' => false,
                'message' => 'Bilgileri kontrol edip tekrar deneyiniz',
            ])->setStatusCode(400);
        }
        if ($user->inRole('danisan')) {
            if (!$user->specialist_id) {
                return response()->json([
                    'status' => false,
                    'message' => 'Uzmanınızın kaydınızı onaylaması bekleniyor.',
                ])->setStatusCode(400);
            }
        }
        if ($user->inRole('uzman') || $user->inRole('kurum-uzmani')) {
            if ($user->email_verified_at == null) {
                return response()->json([
                    'status' => false,
                    'message' => 'Yöneticinin kaydınızı onaylaması bekleniyor.',
                ])->setStatusCode(400);
            }
        }
        $user->role = $user->getRoles()[0]['slug'];
        $user->roleName = $user->getRoles()[0]['name'];
        $user->role_permissions = $user->getRoles()[0]['permissions'];
        $user->specialist = $user->specialist;
        $user->load('attachment');

        $user->avatarUrl = 0;
        if (!is_null($user->avatar)) {
            $user->avatarUrl = $user->attachmentS->url();
        }

        $return = [
            'status' => true,
            'message' => 'Giriş başarılı',
            'data' => $user->toArray(),
        ];

        $return['data']['jwt'] = $this->jwtCreate(['id' => $user->user_id, 'email' => $user->email]);

        return response()->json($return)->setStatusCode(200);
    }

    public function loginAs(Request $request)
    {
        $authorizationHeader = explode(' ', $request->header('Authorization'));
        $jwt = isset($authorizationHeader[1]) ? $authorizationHeader[1] : false;

        $user = User::where('user_id', $request->user_id)->first();

        $user->role = $user->getRoles()[0]['slug'];
        $user->roleName = $user->getRoles()[0]['name'];
        $user->role_permissions = $user->getRoles()[0]['permissions'];
        $user->specialist = $user->specialist;
        $user->load('attachment');

        $user->avatarUrl = 0;
        if (!is_null($user->avatar)) {
            $user->avatarUrl = $user->attachmentS->url();
        }

        $return = [
            'status' => true,
            'message' => 'Taklit başarılı',
            'data' => $user->toArray(),
        ];

        $return['data']['jwt'] = $this->jwtCreate(['id' => $user->user_id, 'email' => $user->email]);
        $return['data']['old_jwt'] = $jwt;

        return response($return, 200);
    }

    public function cancelImpersonation(Request $request)
    {
        $jwt = $request->token;
        $secretKey = config('app.jwt.secret');
        $decoded = JWT::decode($jwt, new Key($secretKey, 'HS256'));
        // Kafa karıştırmaması için jwt keyini siliyoruz
        if (isset($decoded->jwt)) {
            unset($decoded->jwt);
        }
        $user = User::where('user_id', $decoded->id)->first();
        if (!$user) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Kayıt bulunamadı'
            ], 404);
        }
        $user->role = $user->getRoles()[0]['slug'];
        $user->roleName = $user->getRoles()[0]['name'];
        $user->role_permissions = $user->getRoles()[0]['permissions'];
        $user->specialist = $user->specialist;
        $user->load('attachment');

        $user->avatarUrl = 0;
        if (!is_null($user->avatar)) {
            $user->avatarUrl = $user->attachmentS->url();
        }
        $return = [
            'status' => true,
            'message' => 'Oturum başarılı',
            'data' => $user->toArray()
        ];

        $return['data']['jwt'] = $this->jwtCreate(['id' => $user->user_id, 'email' => $user->email]);
        return response($return, 200);
    }

    public function me(Request $request)
    {
        $authorizationHeader = explode(' ', $request->header('Authorization'));
        $jwt = isset($authorizationHeader[1]) ? $authorizationHeader[1] : false;

        $secretKey = config('app.jwt.secret');
        $decoded = JWT::decode($jwt, new Key($secretKey, 'HS256'));

        // Kafa karıştırmaması için jwt keyini siliyoruz
        if (isset($decoded->jwt)) {
            unset($decoded->jwt);
        }
        $user = User::where('user_id', $decoded->id)->first();
        if (!$user) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Kayıt bulunamadı'
            ], 404);
        }
        $user->role = $user->getRoles()[0]['slug'];
        $user->roleName = $user->getRoles()[0]['name'];
        $user->role_permissions = $user->getRoles()[0]['permissions'];
        $user->specialist = $user->specialist;
        $user->load('attachment');

        $user->avatarUrl = 0;
        if (!is_null($user->avatar)) {
            $user->avatarUrl = $user->attachmentS->url();
        }

        return response()->json([
            'status' => true,
            'message' => 'Oturum başarılı',
            'data' => $user
        ]);
    }

    public function jwtCreate($user)
    {
        $jwt = JWT::encode([
            ...(is_array($user) ? $user : $user->toArray()),
            'exp' => time() + (60 * 60 * 24 * 30),
            'iat' => time()
        ], config('app.jwt.secret'), 'HS256');

        return $jwt;
    }

    public function all()
    {
        $users = User::all();

        if ($users->isEmpty()) {
            return response([
                'status' => false,
                'data' => []
            ], 200);
        }

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => $users,
        ], 200);
    }

    public function create(Request $request)
    {
        $rules =
            [
                'email' => [
                    Rule::unique(User::class, 'email'),
                    'nullable', // email alanı boş geçilebilir
                    'email', // email formatı kontrolü
                    'required_without:phone' // phone dolu değilse email zorunlu
                ],
                'phone' => [
                    Rule::unique(User::class, 'phone'),
                    'nullable', // phone alanı boş geçilebilir
                    'required_without:email' // email dolu değilse phone zorunlu
                ],
                'identity_no' => [Rule::unique(User::class, 'identity_no'), 'required'],
            ];
        $messages = [
            'email.required_without' => 'Email veya telefon numarası zorunlu',
            'identity_no.unique' => 'Bu kimlik numarası kullanılmaktadır',
            'phone.required_without' => 'Email veya telefon numarası zorunlu',
            'email.unique' => 'Bu email adresi kullanılmaktadır',
        ];
        $request->validate(
            $rules,
            $messages
        );

        try {
            $data = $request->except(['_token']);
            $data['password'] = bcrypt($data['password']);
            $user = User::create($data);

            $role = Role::where('id', $request->role)->first();
            $newUser = User::where('email', $user->email)->first();
            if ($role) {
                $newUser->roles()->attach($role);
            }

            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $newUser,
            ], 200);
        } catch (\Exception $err) {
            return response([
                'status' => "error",
                'error' => $err->getMessage(),
            ], 500);
        }
    }

    public function update(Request $request)
    {
        $user = User::where('user_id', $request->user_id)->first();

        if (is_null($user)) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'kullanıcı bulunamadı'
            ], 404);
        }

        $request->validate([
            'email' => [
                'required',
                Rule::unique(User::class, 'email')->ignore($user),
            ],
        ]);

        //TODO permissions feature can develop
        // $permissions = collect($request->get('permissions'))
        //     ->map(fn ($value, $key) => [base64_decode($key) => $value])
        //     ->collapse()
        //     ->toArray();
        try {
            if (strlen($request->password) != 0) {
                $user->password = Hash::make($request->password);
                $user->save();
            }
            $user->replaceRoles(array($request->role));

            $data = $request->except(['password', 'role']);

            if ($request->identity_no) {
                $data['identity_no'] = kg_encrypt($request->identity_no);
            }
            if ($request->child_identity_no) {
                $data['child_identity_no'] = kg_encrypt($request->child_identity_no);
            }

            $user->update($data);

            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $user,
            ], 200);
        } catch (\Exception $error) {
            return response([
                'status' => "error",
                'error' => $error->getMessage(),
            ], 500);
        }

        // if (!is_null($request->avatar)) {
        //     $imageFile = $request->file("avatar");
        //     $originalName = $imageFile->getClientOriginalName();
        //     $originalExtension = $imageFile->getClientOriginalExtension();
        //     $explodeName = explode(".", $originalName)[0];
        //     $fileName = Str::slug($explodeName) . "." . $originalExtension;

        //     $folder = "users";
        //     $publicPath = "storage/" . $folder;

        //     $data["avatar"] = $publicPath . "/" . $fileName;
        // }

        // $oldUser = $user;

        // try {
        //     $user->update($data);

        //     if (!is_null($request->avatar)) {
        //         if (file_exists(public_path($oldUser->avatar))) {
        //             File::delete(public_path($oldUser->avatar));
        //         }
        //         $imageFile->storeAs($folder,  $fileName);
        //     }

        //     $role = Role::where('role_id', $request->role)->first();
        //     if ($role) {
        //         $user->syncRoles($role);

        //         $permissions = $role->getAllPermissions();
        //         $user->syncPermissions($permissions);
        //     }

        //     return response([
        //         'status' => 'success',
        //         'message' => 'Başarılı',
        //         'data' => $user,
        //     ], 200);
        // } catch (\Exception $err) {
        //     return response([
        //         'status' => "error",
        //         'error' => $err->getMessage(),
        //     ], 500);
        // }
    }

    public function delete(Request $request)
    {
        $user = User::where('user_id', $request->user_id)->first();

        if (is_null($user)) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'kullanıcı bulunamadı'
            ], 404);
        }

        try {
            $user->delete();
            return response([
                'status' => 'success',
                'message' => 'Kullanıcı silindi',
            ], 200);
        } catch (\Exception $err) {
            return response([
                'status' => "error",
                'error' => $err->getMessage(),
            ], 500);
        }


        $user->delete();

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => 'Kullanıcı silindi'
        ], 200);
    }

    public function detail(Request $request)
    {
        $user = User::where('user_id', $request->user_id)->first();
        if (is_null($user)) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'kullanıcı bulunamadı'
            ], 404);
        }

        $province = Province::where('province_id', $user->province_id)->first();
        $state = State::where('state_id', $user->state_id)->first();


        $user->role = $user->getRoles()[0]['name'];
        $userRole = Role::where('name', $user->role)->first();
        $user->role_id = $userRole->id;

        if ($province) {
            $user->province = ["label" => $province->name, "value" => $province->province_id, 'plate' => $province->plate_number];
        }
        if ($state) {
            $user->state = ["label" => $state->name, "value" => $state->state_id];
        }

        $user->avatarUrl = 0;
        if (!is_null($user->avatar)) {
            $user->avatarUrl = $user->attachmentS->url();
        }

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => $user,
        ], 200);
    }

    public function patients(Request $request)
    {
        if ($request->user()->inRole('super-yonetici')) {
            $patients = User::whereNotNull('specialist_id')->orderBy('created_at', 'desc')->get(['user_id', 'name']);
        } else {
            $patients = User::where('specialist_id', $request->user()->user_id)->orderBy('created_at', 'desc')->get(['user_id', 'name']);
        }

        if (!$patients) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Danışan bulunamadı'
            ], 404);
        }

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => $patients,
        ], 200);
    }

    public function profileUpdate(Request $request)
    {
        $user = User::where('user_id', $request->user_id)->first();

        if (is_null($user)) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'kullanıcı bulunamadı'
            ], 404);
        }

        $request->validate([
            'email' => [
                'required',
                Rule::unique(User::class, 'email')->ignore($user),
            ],
        ]);

        $data = $request->except(['avatar']);
        if ($request->identity_no) {
            $data['identity_no'] = kg_encrypt($request->identity_no);
        }
        if ($request->child_identity_no) {
            $data['child_identity_no'] = kg_encrypt($request->child_identity_no);
        }

        try {

            $user->update($data);

            if ($_FILES && $_FILES['avatar']) {
                if ($user->avatar) {
                    $user->attachmentS()->delete();
                }

                $file = new File($request->file('avatar'), 's3');
                $attachment = $file->path('user-avatars')->load();

                $user->avatar = $attachment->id;
                $user->save();
            }

            $user->roleName = $user->getRoles()[0]['name'];
            $user->avatarUrl = 0;
            if (!is_null($user->avatar)) {
                $user->avatarUrl = $user->attachmentS->url();
            }

            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $user,
            ], 200);
        } catch (\Exception $error) {
            return response([
                'status' => "error",
                'error' => $error->getMessage(),
            ], 500);
        }
    }

    public function isPasswordCorrect(Request $request)
    {
        $user = User::where('user_id', $request->user_id)->first();

        if (is_null($user)) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'kullanıcı bulunamadı'
            ], 404);
        }
        $currentPassword = $request->oldPassword;

        if (!Hash::check($currentPassword, $user->password)) {
            return response()->json([
                'status' => false,
                'message' => 'Mevcut şifreniz yalnış',
            ])->setStatusCode(400);
        }
    }

    public function changePassword(Request $request)
    {
        $user = User::where('user_id', $request->user_id)->first();

        if (is_null($user)) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'kullanıcı bulunamadı'
            ], 404);
        }

        $request->validate([
            'password' => 'required',
        ], ['Şifre alanı zorunlu']);

        $password = $request->password;

        $user->password = Hash::make($password);
        $user->save();

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => $user,
        ], 200);
    }

    public function getCounts()
    {
        if (hasUserPermission('platform.canSeeAllPatients')) {
            $patients = User::patient()->withTrashed()->get()->count();
            $specialists = User::specialists()->withTrashed()->get()->count();
            $patientPackages = UserPackage::withTrashed()->count();
        } else {
            $specialists = "";
            $patients = User::where('specialist_id', auth()->user()->user_id)->withTrashed()->get()->count();
            $patientPackages = UserPackage::with(["user", 'user.specialist'])
                ->whereHas('user.specialist', function ($q) {
                    $q->where('user_id', auth()->user()->user_id);
                })->get()->count();
        }

        if (!$patients) {
            return response([
                'status' => 'warning',
                'data' => ['patients' => 0, 'patientPackages' => 0, 'specialists' => 0]
            ], 200);
        }

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => ['patients' => $patients, 'patientPackages' => $patientPackages, 'specialists' => $specialists]
        ], 200);
    }

    public function forgotPassword(Request $request)
    {
        if (isset($request->email)) {
            $user = User::where('email', $request->email)->first();
            $findToken = DB::table('password_reset_tokens')->where('email', $request->email)->first();
        } else if (isset($request->phone)) {
            if (!isset($request->code)) {
                return response([
                    'status' => false,
                    'error' => 'Bad Request',
                    'data' => 'Kod giriniz'
                ], 404);
            }
            $user = User::where('phone', $request->phone)->first();
            $findToken = DB::table('password_reset_tokens')->where('phone', $request->phone)->first();
        } else {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Email veya telefon numarası giriniz'
            ], 404);
        }

        if (!$user) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'kullanıcı bulunamadı'
            ], 404);
        }

        if ($findToken) {
            $token = $findToken->token;
        } else {
            $token = Str::random(60);

            if (isset($request->email)) {
                DB::table('password_reset_tokens')->insert([
                    'email' => $request->email,
                    'token' => $token,
                    'created_at' => now()
                ]);
            }
            if (isset($request->phone)) {
                DB::table('password_reset_tokens')->insert([
                    'phone' => $request->phone,
                    'token' => $token,
                    'created_at' => now()
                ]);
            }
        }

        // Mail::to($user->email)->send(new ResetPasswordMail($user, $token));
        if (isset($request->email)) {
            $user->notify(new SystemNotification('Parola Sıfırlama Maili', 'Aşağıdaki linkten parolanızı sıfırlayabilirsiniz!', false, false, $token));
        }
        if (isset($request->phone)) {
            $sms = new sms();
            $sms->send([
                'message' => 'Parola sıfırlama için onay kodunuz: ' . $request->code,
                'no' => $user->phone,
            ]);
        }

        return response([
            'status' => true,
            'message' => isset($request->email) ? 'Reset password link has been sent as an email.' : 'Reset password code has been sent as an sms.',
            'token' => isset($request->email) ? null : $token,
            'user_id' => isset($request->email) ? null : $user->user_id
        ], 200);
    }

    public function checkToken(Request $request)
    {
        $tokenExist = DB::table('password_reset_tokens')->where('token', $request->token)->first();

        if (!$tokenExist) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Token bulunamadı'
            ], 404);
        }

        $user = User::query()->where('user_id', $request->userId)->first();
        if (!$user) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Kullanıcı bulunamadı'
            ], 404);
        }

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => ['message' => 'Bilgiler eşleşiyor. Şifrenizi Değiştirebilirsiniz']
        ], 200);
    }

    public function resetPassword(Request $request)
    {
        $tokenQuery = DB::table('password_reset_tokens')->where('token', $request->token);
        $user = User::query()->where('user_id', $request->userId)->first();

        $user->update(['password' => Hash::make($request->password)]);
        $tokenQuery->delete();

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => ['message' => 'Şifreniz sıfırlandı']
        ], 200);
    }

    public function updateBirthdays(Request $request)
    {
        $user = User::where('user_id', $request->user_id)->first();
        if (!$user) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Kullanıcı bulunamadı'
            ], 404);
        }
        $data = [];
        if ($request->birthday) {
            $data['birthday'] = $request->birthday;
        }
        if ($request->child_birthyear) {
            $data['child_birthyear'] = $request->child_birthyear;
        }
        $user->update($data);

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => 'Kullanıcılara doğum tarihi eklendi'
        ], 200);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\User;
use App\Models\UserTest;
use App\Notifications\SystemNotification;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Orchid\Platform\Models\Role;

class PatientController extends Controller
{
    public function all()
    {
        try {
            if (hasUserPermission('platform.canSeeAllPatients')) {
                $users = User::with(['packages' => function ($q) {
                    return $q->where('status', 1);
                }])->whereNotNull('specialist_id')->with('specialist')->orderBy('created_at', 'desc')
                    ->get();
            } else {
                $users = User::with(['packages' => function ($q) {
                    return $q->where('status', 1);
                }])->where('specialist_id', auth()->user()->user_id)->with('specialist')->orderBy('created_at', 'desc')->get();
            }

            if ($users->isEmpty()) {
                return response([
                    'status' => false,
                    'data' => []
                ], 200);
            }

            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $users
            ], 200);
        } catch (\Exception $err) {
            return response([
                'status' => false,
                'message' => 'Something went wrong',
                'data' => $err->getMessage() . ' ' . $err->getLine()
            ], 500);
        }
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
                'name' => 'required',
                'password' => 'required',
                'specialist_id' => 'required',
            ];
        $messages = [
            'email.required_without' => 'Email veya telefon numarası zorunlu',
            'phone.required_without' => 'Email veya telefon numarası zorunlu',
            'email.unique' => 'Bu email adresi kullanılmaktadır',
            'phone.unique' => 'Bu telefon numarası kullanılmaktadır',
            'email.email' => 'Geçerli bir email adresi giriniz',
            'identity_no.required' => 'Kimlik numarası zorunlu',
        ];

        if ($request->forChild) {
            $rules['child_name'] = 'required';
            $rules['child_birthyear'] = 'required';
            $rules['child_identity_no'] = [Rule::unique(User::class, 'identity_no'), 'required'];
            $messages['child_name.required'] = 'Çocuk adı zorunlu';
            $messages['child_birthyear.required'] = 'Çocuk doğum tarihi zorunlu';
            $messages['child_identity_no.required'] = 'Çocuk kimlik numarası zorunlu';
        }


        $request->validate(
            $rules,
            $messages
        );
        try {
            $data = $request->except(['_token']);

            if (!$request->specialist_id) {
                $data['specialist_id'] = auth()->user()->user_id;
            }

            $data['password'] = bcrypt($data['password']);
            $data['identity_no'] = kg_encrypt($data['identity_no']);
            if ($request->forChild) {
                $data['child_identity_no'] = kg_encrypt($data['child_identity_no']);
            }
            $user = User::create($data);

            $role = Role::where('slug', 'danisan')->first();
            if (isset($request->email)) {
                $newUser = User::where('email', $request->email)->first();
            } elseif (isset($request->phone)) {
                $newUser = User::where('phone', $request->phone)->where('country_phone_code', $request->country_phone_code)->first();
            } else {
                return response([
                    'status' => "error",
                    'message' => 'Email or phone is required',
                ], 500);
            }
            if ($role) {
                $newUser->roles()->attach($role);
            }

            $specialist = User::where('user_id', $newUser->specialist_id)->first();

            $newUser->notify(new SystemNotification('Uzman Atanma', 'Tarafınıza uzman ve test atandı.
            Uzman ismi: ' . $specialist->name, true, true));

            $specialist->notify(new SystemNotification('Danışan Atandı', 'Tarafınıza danışan atamanız yapıldı.
            Danışan ismi: ' . $newUser->name, true, true));

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

    public function unapproved()
    {
        try {
            $users = User::join('role_users', 'users.user_id', '=', 'role_users.user_id')
                ->join('roles', 'role_users.role_id', '=', 'roles.id')
                ->where('roles.slug', 'danisan')->select('users.*')->whereNull('specialist_id')->orderBy('created_at', 'desc')->get();

            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $users
            ], 200);
        } catch (\Exception $err) {
            response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => $err->getMessage()
            ], 500);
        }
    }


    // Assign Test To User_Test table depends on age of user child birthday or user birthday
    public function assignTest(Request $request)
    {
        try {
            $user = User::where('user_id', $request->patient_user_id)->first();

            if (!$user) {
                return response([
                    'status' => false,
                    'error' => 'Bad Request',
                    'data' => 'Kullanıcı bulunamadı'
                ], 404);
            }

            $age = 0;
            if ($user->child_birthyear) {
                $age = intval(date('Y')) - intval(explode('.', $user->child_birthyear)[2]);
            } else if ($user->birthday) {
                $age = intval(date('Y')) - intval(explode('.', $user->birthday)[2]);
            } else {
                return response([
                    'status' => false,
                    'data' => 'Kullanıcıya ait doğum tarihi bulunamadı'
                ], 200);
            }

            $tests = Test::where('min_age', '<=', $age)->where(function ($query) use ($age) {
                $query->where('max_age', '>=', $age)
                    ->orWhereNull('max_age');
            })->where('slug', '<>', 'conners-teacher')->get();

            if ($tests->isEmpty()) {
                return response([
                    'status' => false,
                    'data' => 'Yaş aralığına uygun test bulunamadı'
                ], 200);
            }

            foreach ($tests as $key => $test) {
                $newUserTest = new UserTest();
                $newUserTest->user_id = $user->user_id;
                $newUserTest->test_id = $test->test_id;
                $newUserTest->status = 'BEKLENİYOR';
                $newUserTest->save();
            }

            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $user
            ], 200);
        } catch (\Exception $err) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => $err->getMessage()
            ], 500);
        }
    }

    public function assignSpecialist(Request $request)
    {
        try {
            $user = User::find($request->patient_user_id);
            if (!$user) {
                return response([
                    'status' => false,
                    'error' => 'Bad Request',
                    'data' => 'Kullanıcı bulunamadı'
                ], 404);
            }
            $user->specialist_id = $request->specialist_id;
            $user->save();

            $specialist = User::where('user_id', $user->specialist_id)->first();

            $user->notify(new SystemNotification('Uzman Atanma', 'Tarafınıza uzman ve test atandı.
            Uzman: ' . $specialist->name, true, true));

            $specialist->notify(new SystemNotification('Danışan Atandı', 'Tarafınıza danışan atamanız yapıldı. Danışan ismi: ' . $user->name, true, true));

            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $user
            ], 200);
        } catch (\Exception $err) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => $err->getMessage()
            ], 500);
        }
    }
}

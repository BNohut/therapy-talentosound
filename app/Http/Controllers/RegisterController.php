<?php

namespace App\Http\Controllers;

use App\Models\Organisation;
use App\Models\User;
use App\Notifications\SystemNotification;
use App\Services\TwilioSMSService;
use Illuminate\Http\Request;
use Orchid\Platform\Models\Role;
use App\SMS\sms;

class RegisterController extends Controller
{
    public function restoreAndGetUser($user)
    {
        $user->restore();
        $user = User::where('email', $user->email)->orWhere(function ($query) use ($user) {
            $query->where('phone', $user->phone)
                ->where('country_phone_code', $user->phone_code);
        })->first();
        $user->roles()->detach();
        $user->email_verified_at = null;
        return $user;
    }

    public function register(Request $request)
    {
        $request->validate(
            [
                'identity_no' => ['unique:users,identity_no'],
                'organisation_title' => 'unique:organisations,name',
            ],
            [
                'identity_no.unique' => __('This TC number is already registered'),
                'organisation_title.unique' => __('This organisation name is already registered')
            ]
        );

        $admins = User::query()->admins()->get();
        $role = Role::where('slug', $request->role)->first();
        if (isset($request->email)) {
            $user = User::where('email', $request->email)->withTrashed()->first();
        } elseif (isset($request->phone)) {
            $user = User::where('phone', $request->phone)->where('country_phone_code', $request->country_phone_code)->withTrashed()->first();
        } else {
            return response([
                'status' => "error",
                'message' => 'Email or phone is required',
            ], 500);
        }

        if ($user && !$user->trashed()) {
            return response([
                'status' => "warning",
                'message' => 'This email/phone is already registered.',
            ], 500);
        } else if ($user) {
            $newUser = $this->restoreAndGetUser($user);
            $data = $request->except(['role']);
            $data['password'] = bcrypt($request->role == 'uzman' ? 'specialist' : $data['password']);

            if ($request->identity_no) {
                $data['identity_no'] = kg_encrypt($request->identity_no);
            }
            if ($request->child_identity_no) {
                $data['child_identity_no'] = kg_encrypt($request->child_identity_no);
            }
            $newUser->update($data);
            $newUser->roles()->attach($role);

            if ($role['slug'] == 'uzman') {
                foreach ($admins as $admin) {
                    // $admin->notify(new SystemNotification('Uzman Başvurusu', 'Uzman başvurusu alındı', true, true));
                }
            }

            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $newUser,
            ], 200);
        } else {
            $data = $request->except(['role']);
            $data['province_id'] = $request->organisation_province;
            $data['state_id'] = $request->organisation_state;
            $data['password'] = bcrypt($request->role == 'uzman' ? 'specialist' : $data['password']);

            if ($request->identity_no) {
                $data['identity_no'] = kg_encrypt($request->identity_no);
            }
            if ($request->child_identity_no) {
                $data['child_identity_no'] = kg_encrypt($request->child_identity_no);
            }

            try {

                $user = User::create($data);

                if ($role['slug'] == 'uzman') {
                    foreach ($admins as $admin) {
                        // $admin->notify(new SystemNotification('Uzman Başvurusu', 'Uzman başvurusu alındı', true, true));
                    }
                }

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
                $newUser->roles()->attach($role);

                if (
                    $request->organisation_title &&
                    $request->organisation_province &&
                    $request->organisation_state
                ) {
                    // Organisation name must be unique
                    Organisation::create([
                        'name' => $request->organisation_title,
                        'user_id' => $newUser->user_id,
                        'province_id' => $request->organisation_province,
                        'state_id' => $request->organisation_state,
                    ]);
                    // New Organisation Id should be saved to user's organisation_id field
                    $newOrganisation = Organisation::where('user_id', $newUser->user_id)->first();
                    $newUser->organisation_id = $newOrganisation->organisation_id;
                    $newUser->save();
                }


                return response([
                    'status' => 'success',
                    'message' => 'Başarılı',
                    'data' => $newUser,
                ], 200);
            } catch (\Exception $err) {
                return response([
                    'status' => "error",
                    'error' => $err->getMessage() . ' ' . $err->getLine() . ' ' . $err->getFile(),
                ], 500);
            }
        }
    }

    public function sendPhoneVerificationCode(Request $request)
    {
        try {
            $request->validate([
                'phone' => 'required',
                'country_phone_code' => 'required',
                'code' => 'required|numeric|digits:6',
            ], [
                'phone.required' => 'Telefon numarası zorunludur',
                'phone.numeric' => 'Telefon numarası sadece rakamlardan oluşmalıdır',
                'country_phone_code.required' => 'Ülke kodu zorunludur',
                'code.required' => 'Kod zorunludur',
                'code.numeric' => 'Kod sadece rakamlardan oluşmalıdır',
                'code.digits' => 'Kod 6 haneli olmalıdır',
            ]);

            $phone = $request->phone;
            $country_phone_code = $request->country_phone_code;
            $code = $request->code;

            if ($country_phone_code == '+90') {
                $result = $this->sendSMSByNetGSM($phone, $code);
            } else {
                $phoneNumber = $country_phone_code . ' ' . $phone;
                $result = $this->sendSMSByTwilio($phoneNumber, $code);
            }

            if ($result['status'] == 'true' || $result['status'] == 'queued') {
                return response([
                    'status' => 'success',
                    'message' => 'Başarılı',
                    'data' => $result,
                ], 200);
            } else {
                return response([
                    'status' => 'error',
                    'error' => $result['code'],
                    'message' => $result['message'],
                ], 500);
            }
        } catch (\Exception $err) {
            return response([
                'status' => "error",
                'error' => $err->getMessage() . ' ' . $err->getLine() . ' ' . $err->getFile(),
            ], 500);
        }
    }

    public function sendSMSByNetGSM($phone, $code)
    {
        $message = "Lütfen bu mesajı kimseyle paylaşmayın. Onay Kodunuz: " . $code;
        $sms = new sms();
        $result = $sms->send([
            'message' => $message,
            'no' => $phone,
        ]);
        return $result;
    }

    public function sendSMSByTwilio($phone, $code)
    {
        $twilio = new TwilioSMSService();
        $result = $twilio->sendSMS($phone, "Lütfen bu mesajı kimseyle paylaşmayın. Onay Kodunuz: " . $code);
        return $result;
    }
}

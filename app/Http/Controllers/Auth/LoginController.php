<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function showPasswordReset()
    {
        return view('auth.reset-password');
    }

    public function showPasswordResetConfirm(Request $request, $token)
    {
        $tokenExist = DB::table('password_reset_tokens')->where('token', $token)->first();

        if (!$tokenExist) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'message' => "Token bulunamadı"
            ], 404);
        }
        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => $token,
        ], 200);
    }

    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'message' => "Verdiğiniz bilgilerle eşleşen bir kullanıcı bulunamadı"
            ], 404);
        }
        $user = User::where('email', $request->email)->firstOrFail();
        Auth::login($user);
        $token = $user->createToken('api')->plainTextToken;
        $authUser = auth()->user();
        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => [
                'name' => $authUser->name,
                'surname' => $authUser->surname,
                'email' => $authUser->email,
                'phone' => $authUser->phone,
                'birthday' => $authUser->birthday,
                'avatar' => $authUser->avatar,
                'specialist_id' => $authUser->specialist_id,
                'organisation_id' => $authUser->organisation_id,
                'organisation_approved_at' => $authUser->organisation_approved_at,
                'created_at' => $authUser->created_at,
                'updated_at' => $authUser->updated_at,
                'deleted_at' => $authUser->delete_at,
            ],
            'role' => $authUser->getRoleNames()->first(),
            'permissions' => $authUser->getAllPermissions()->pluck('name', 'code'),
            'token' => $token,
        ], 200);
    }

    public function logout(Request $request)
    {
        if (Auth::check()) {
            Auth::logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return response([
                'status' => 'success',
                'message' => 'Başarılı',
            ], 200);
        }
    }

    public function sendPasswordReset(Request $request)
    {
        $findUser = User::query()->where('email', $request->email)->firstOrFail();

        $findToken = DB::table('password_reset_tokens')->where('email', $request->email)->first();

        if ($findToken) {
            $token = $findToken->token;
        } else {
            $token = Str::random(60);

            DB::table('password_reset_tokens')->insert([
                'email' => $request->email,
                'token' => $token,
                'created_at' => now()
            ]);
        }
        if ($findToken && now()->diffInHours($findToken->created_at) < 5) {
            return response([
                'status' => 'warning',
                'message' => 'Daha önce parola sıfırlama maili gönderilmiştir!',
            ], 200);
        }

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
        ], 200);
    }

    public function passwordReset(Request $request, $token)
    {
        $tokenQuery = DB::table('password_reset_tokens')->where('token', $token);
        $tokenExist = $tokenQuery->first();
        if (!$tokenExist) {
            return response([
                'status' => 'warning',
                'message' => 'Token bulunamadı!',
            ], 404);
        }

        $userExist = User::query()->where('email', $tokenExist->email)->first();
        if (!$userExist) {
            return response([
                'status' => 'warning',
                'message' => 'Kayıtlı değilsiniz!',
            ], 404);
        }

        $userExist->update(['password' => Hash::make($request->password)]);
        $tokenQuery->delete();

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => $userExist,
        ], 200);
    }
}

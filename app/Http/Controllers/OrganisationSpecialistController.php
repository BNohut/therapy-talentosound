<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Orchid\Platform\Models\Role;

class OrganisationSpecialistController extends Controller
{
    public function all()
    {
        $users = User::where('organisation_id', auth()->user()->organisation_id)
            ->whereNotNull('organisation_id')->specialist()->get();

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
    }

    public function approve(Request $request)
    {
        $user = User::where('user_id', $request->user_id)->firstOrFail();

        if (!$user) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Kayıt bulunamadı'
            ], 404);
        }
        $user->organisation_approved_at = now();
        $user->save();

        // Change User Role as 'Organisation Specialist'
        $role = Role::where('slug', 'kurum-uzmani')->first();
        if (!$role) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Kayıt bulunamadı'
            ], 404);
        }
        $user->replaceRoles(array($role->id));



        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => 'kuruma kabul ettiniz'
        ], 200);
    }

    public function reject(Request $request)
    {
        $user = User::where('user_id', $request->user_id)->firstOrFail();

        if (!$user) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Kayıt bulunamadı'
            ], 404);
        }
        $user->organisation_id = null;
        $user->save();

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => 'reddetiniz'
        ], 200);
    }

    public function dismissOrganisation(Request $request)
    {
        $user = User::where('user_id', $request->user_id)->firstOrFail();

        if (!$user) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Kayıt bulunamadı'
            ], 404);
        }

        $user->organisation_id = null;
        $user->organisation_approved_at = null;
        $user->save();


        // Change User Role as 'Organisation Specialist'
        $role = Role::where('slug', 'uzman')->first();
        if (!$role) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Kayıt bulunamadı'
            ], 404);
        }
        $user->replaceRoles(array($role->id));



        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => 'kurumdan çıkarttınız'
        ], 200);
    }
}

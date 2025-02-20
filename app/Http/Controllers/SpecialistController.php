<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\SystemNotification;
use Illuminate\Http\Request;

class SpecialistController extends Controller
{
    public function all()
    {
        $specialists = User::onlySpecialist()->withTrashed()->get();

        if ($specialists->isEmpty()) {
            return response([
                'status' => false,
                'data' => []
            ], 200);
        }

        $specialists->each(function ($specialist) {
            $specialist->organisation_name = $specialist->getOrganisationNameAttribute();
            $specialist->province = $specialist->getOrganisationNameAttribute();
        });
        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => $specialists
        ], 200);
    }

    public function approve(Request $request)
    {
        $user = User::where('user_id', $request->user_id)->first();

        if (!$user) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Kayıt bulunamadı'
            ], 404);
        }
        $user->email_verified_at = now();
        $user->save();

        $user->notify(new SystemNotification('Başvuru Onayı', 'Başvurunuz onaylandı. Giriş için şifreniz: specialist', true, true));

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => 'uzmanı kabul ettiniz'
        ], 200);
    }
    public function reject(Request $request)
    {
        $user = User::where('user_id', $request->user_id)->first();

        if (!$user) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Kayıt bulunamadı'
            ], 404);
        }
        $user->delete();

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
        ], 200);
    }

    public function listed(Request $request)
    {
        try {
            $user = User::where('user_id', $request->user_id)->first();

            if (!$user) {
                return response([
                    'status' => false,
                    'message' => 'Uzman bulunamadı'
                ], 404);
            }

            $user->is_listed = !$user->is_listed;
            $user->save();
            return response([
                'status' => 'success',
                'message' => 'Başarılı',
            ], 200);
        } catch (\Exception $err) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => $err->getMessage() . ' ' . $err->getLine()
            ], 400);
        }
    }

    public function getListedSpecialists(Request $request)
    {
        try {
            $specialists = User::onlySpecialist()->where('is_listed', true)->get();

            if ($specialists->isEmpty()) {
                return response([
                    'status' => false,
                    'data' => []
                ], 200);
            }

            $specialists->each(function ($specialist) {
                $specialist->organisation_name = $specialist->getOrganisationNameAttribute();
                $specialist->province = $specialist->getOrganisationNameAttribute();
                $specialist->avatarURL = $specialist->attachmentS->url;
            });
            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $specialists
            ], 200);
        } catch (\Exception $err) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => $err->getMessage() . ' ' . $err->getLine()
            ], 400);
        }
    }

    public function detail(Request $request)
    {
        try {
            $specialist = User::where('user_id', $request->id)->first();

            if (!$specialist) {
                return response([
                    'status' => false,
                    'message' => 'Uzman bulunamadı'
                ], 404);
            }

            $specialist->organisation_name = $specialist->getOrganisationNameAttribute();
            $specialist->province = $specialist->getOrganisationNameAttribute();
            $specialist->avatarURL = $specialist->attachmentS->url;
            $specialist->patientCount = $specialist->patients->count();
            $specialist->patientPackageCount = $specialist->getPatientPackagesAttribute()->count();

            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $specialist
            ], 200);
        } catch (\Exception $err) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => $err->getMessage() . ' ' . $err->getLine()
            ], 400);
        }
    }
}

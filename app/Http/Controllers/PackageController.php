<?php

namespace App\Http\Controllers;

use App\Models\Audio;
use App\Models\Package;
use App\Models\User;
use App\Notifications\SystemNotification;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class PackageController extends Controller
{
    public function all(Request $request)
    {
        // $user = $request->user();
        // $packages = Package::query();

        // if ($user->inRole('super-yonetici')) {
        //     $packages = $packages->get();
        // } else {
        //     $packages = $packages->where('user_id', auth()->user()->user_id)->get();
        // }

        $packages = Package::orderBy('created_at', 'desc')->get();

        if ($packages->isEmpty()) {
            return response([
                'status' => false,
                'data' => []
            ], 200);
        }

        $packages->each(function ($package) {
            $package->user_name = $package->getUserNameAttribute();
            $package->count = $package->getCountAttribute();
        });
        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => $packages
        ], 200);
    }

    public function create(Request $request)
    {
        $request->validate(
            [
                'name' => [
                    'required',
                    Rule::unique('packages', 'name')
                ],
                'slug' => [
                    'required',
                    Rule::unique('packages', 'slug')
                ],
            ],
            [
                'name.required' => 'Paket adı alanı zorunludur',
                'name.unique' => 'Bu paket adı zaten var',
                'slug.required' => 'Slug alanı zorunludur',
                'slug.unique' => 'Bu slug zaten var',
            ]
        );

        $data = $request->except("audioJson");
        $data['user_id'] = auth()->user()->user_id;
        $data['audios'] = json_encode($request->audioJson);

        try {
            $package = Package::create($data);

            $users = User::join('role_users', 'users.user_id', '=', 'role_users.user_id')
                ->join('roles', 'role_users.role_id', '=', 'roles.id')
                ->whereIn('roles.slug', ['admin', 'super-yonetici', 'yonetici']);

            foreach ($users as $user) {
                $user->notify(new SystemNotification('Paket Oluşturuldu', 'Yeni paket oluşturuldu'));
            }

            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $package
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
        // Find Package
        $package = Package::where('package_id', $request->package_id)->first();

        // If null return 404
        if (!$package) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Paket bulunamadı'
            ], 404);
        }

        $request->validate(
            [
                'name' => [
                    'required',
                    Rule::unique('packages', 'name')->ignore($package->package_id, 'package_id'),
                ],
                'slug' => [
                    'required',
                    Rule::unique('packages', 'slug')->ignore($package->package_id, 'package_id'),
                ],
            ],
            [
                'name.required' => 'Paket adı alanı zorunludur',
                'name.unique' => 'Bu paket adı zaten var',
                'slug.required' => 'Slug alanı zorunludur',
                'slug.unique' => 'Bu slug zaten var',
            ]
        );

        $data = $request->except("audioJson");
        $data['user_id'] = auth()->user()->user_id;
        $data['audios'] = json_encode($request->audioJson);

        try {
            $package->update($data);

            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $package
            ], 200);
        } catch (\Exception $err) {
            return response([
                'status' => "error",
                'error' => $err->getMessage(),
            ], 500);
        }
    }

    public function delete(Request $request)
    {
        $package = Package::where('package_id', $request->package_id)->first();

        if (is_null($package)) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Paket bulunamadı'
            ], 404);
        }

        $package->delete();

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => 'Paket silindi'
        ], 200);
    }

    public function detail(Request $request)
    {
        // Get Package ordered by ID
        $package = Package::where('package_id', $request->package_id)->first();

        // If no package
        if (!$package) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Paket bulunamadı'
            ], 404);
        }
        //TODO Attachments verisi küçültülecek
        $audiosJson = json_decode($package->audios);
        $selectedAudioIds = [];
        $selectedAudios = [];
        $unselectedAudios = [];
        foreach ($audiosJson as $audio) {
            $selectedAudios[] = Audio::where('audio_id', $audio->audio_id)->with('attachmentS')->first();
            $selectedAudioIds[] = $audio->audio_id;
        }

        $unselectedAudios = Audio::whereNotIn('audio_id', $selectedAudioIds)->with('attachmentS')->get();

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => ['package' => $package, 'selectedAudios' => $selectedAudios, 'unselectedAudios' => $unselectedAudios],
        ], 200);
    }

    public function getClients(Request $request)
    {
        $users = User::where('specialist_id', auth()->user()->specialist_id)->get();

        if (!$users) {
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

    public function changeStatus(Request $request)
    {
        try {
            $package = Package::where('package_id', $request->package_id)->first();

            if (!$package) {
                return response([
                    'status' => false,
                    'error' => 'Bad Request',
                    'data' => 'Paket bulunamadı'
                ], 404);
            }
            $package->status = !$package->status;
            $package->save();

            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $package
            ], 200);
        } catch (\Exception $err) {
            return response([
                'status' => "error",
                'error' => $err->getMessage(),
            ], 500);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Organisation;
use App\Models\Province;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Orchid\Attachment\File;
use Orchid\Attachment\Models\Attachment;
use Orchid\Platform\Models\Role;

class OrganisationController extends Controller
{
    public function all()
    {
        $organisations = Organisation::all();

        foreach ($organisations as $organisation) {
            $organisation->specialist_count = User::specialist()->where('organisation_id', $organisation->organisation_id)->count();
            $organisation->manager = User::where('organisation_id', $organisation->organisation_id)->value('name');
        }

        if ($organisations->isEmpty()) {
            return response([
                'status' => false,
                'data' => []
            ], 200);
        }
        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => $organisations
        ], 200);
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => "required",
            'user_id' => 'required',
            'email' => [
                'email',
                Rule::unique('organisations', 'email')->whereNull('deleted_at'),
            ],
            'province_id' => 'required',
            'state_id' => 'required',
            'neighborhood' => 'required'
        ], [
            'name.required' => __('Organisation name field is required'),
            'user_id.required' => __('User section is required'),
            'province.required' => __('Province name field is required'),
            'state.required' => __('State name field is required'),
            'neighborhood.required' => __('Neighborhood field is required'),
            'email' => __('Email is already taken')
        ]);

        $data = $request->except("logo");
        $data['status'] = $data['status'] == 'true' ? 1 : 0;

        try {
            if ($request->has('social_media_accounts')) {
                $socialMediaAccounts = json_encode($request->social_media_accounts);
            } else {
                $socialMediaAccounts = null;
            }
            $data['social_media_accounts'] = $socialMediaAccounts;

            $organisation = Organisation::create($data);
            $organisation->status = $data['status'];
            $organisation->save();

            $user = User::where('user_id', $request->user_id)->firstOrFail();
            $user->organisation_id = $organisation->organisation_id;
            $user->save();

            $newOrganisation = Organisation::where('email', $request->email)->first();

            if ($_FILES && $_FILES['logo']) {
                $file = new File($request->file('logo'), 's3');
                $attachment = $file->path('organisations')->load();

                $newOrganisation->logo = $attachment->id;
                $newOrganisation->save();
                $newOrganisation['url'] = $newOrganisation->attachmentS->url();
            }
            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $newOrganisation
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
        $organisation = Organisation::where('organisation_id', $request->organisation_id)->first();

        if (is_null($organisation)) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Kurum bulunamadı'
            ], 404);
        }

        $data = $request->except("logo");
        $data['status'] = $data['status'] == 'true' ? 1 : 0;
        try {
            if ($request->has('social_media_accounts')) {
                $socialMediaAccounts = json_encode($request->social_media_accounts);
            } else {
                $socialMediaAccounts = null;
            }
            $data['social_media_accounts'] = $socialMediaAccounts;

            $organisation->update($data);
            $organisation->status = $data['status'];
            $organisation->save();

            if ($_FILES && $_FILES['logo']) {
                if ($organisation->logo) {
                    $organisation->attachmentS()->delete();
                }
                $file = new File($request->file('logo'), 's3');
                $attachment = $file->path('organisations')->load();

                $organisation->logo = $attachment->id;
                $organisation->save();
                $organisation['url'] = $organisation->attachmentS->url();
            }


            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $organisation
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
        $organisation = Organisation::where('organisation_id', $request->organisation_id)->first();

        if (!$organisation) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Kurum bulunamadı'
            ], 404);
        }

        $user = User::where('organisation_id', $organisation->organisation_id)->firstOrFail();
        $user->organisation_id = null;
        $user->save();

        if ($organisation->logo) {
            $organisation->attachmentS->delete();
        }

        $organisation->delete();

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => 'Kurum silindi'
        ], 200);
    }

    public function detail(Request $request)
    {
        $organisation = Organisation::query()->with('attachmentS')->where('organisation_id', $request->organisation_id)->first();

        if (!$organisation) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Kurum bulunamadı'
            ], 404);
        }

        $user = User::where('user_id', $organisation->user_id)->firstOrFail();
        $province = Province::where('plate_number', $organisation->province_id)->firstOrFail();
        $state = State::where('state_id', $organisation->state_id)->firstOrFail();

        $organisation->user = ["value" => $user->user_id, "label" => $user->name];
        $organisation->province = ["label" => $province->name, "value" => $province->plate_number];
        $organisation->state = ["label" => $state->name, "value" => $state->state_id];
        $organisation->logoURL = 0;

        if (!is_null($organisation->logo)) {
            $organisation->logoURL = $organisation->attachmentS->url();
        }

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => $organisation,
        ], 200);
    }

    public function changeStatus(Request $request)
    {
        $organisation = Organisation::where('organisation_id', $request->organisation_id)->first();
        if (!$organisation) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Kurum bulunamadı'
            ], 404);
        }

        $organisation->status = !$organisation->status;
        $organisation->save();

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => $organisation->status,
        ], 200);
    }

    public function join(Request $request)
    {
        $user = User::where('user_id', auth()->user()->user_id)->first();
        if (!$user) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Kayıt bulunamadı'
            ], 404);
        }
        $user->organisation_id = $request->organisation_id;
        $user->save();

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => 'katılma istegi gönderildi',
        ], 200);
    }

    public function cancelRequest(Request $request)
    {
        $user = User::where('user_id', auth()->user()->user_id)->first();
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
            'data' => 'Katılma istegi geri alındı',
        ], 200);
    }

    public function leave(Request $request)
    {
        $user = User::where('user_id', auth()->user()->user_id)->first();
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

        // Change User Role as 'Specialist'
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
            'data' => 'kurumdan ayrıldınız',
        ], 200);
    }

    public function getManagersForOrganisations()
    {
        $users = User::join('role_users', 'role_users.user_id', '=', 'users.user_id')
            ->join('roles', 'role_users.role_id', '=', 'roles.id')
            ->where('roles.slug', 'yonetici')
            ->select('users.*')
            ->get();

        if (!$users) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Kayıt bulunamadı'
            ], 404);
        }
        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => $users
        ], 200);
    }

    public function getmedia(Request $request)
    {
        $mediaId = $request->media_id;

        $media = Attachment::where('id', $mediaId)->first();

        // S3'den dosyayı indir
        $fileContents = Storage::disk('s3')->get($media->path . $media->name . '.' . $media->extension);

        // İndirilen dosyayı kullanıcıya gönder
        return response($fileContents, 200)
            ->header('Content-Type', Storage::disk('s3')->mimeType($media->path . $media->name . '.' . $media->extension))
            ->header('Content-Disposition', 'inline; filename="' . $media->original_name . '"');
    }

    public function approve(Request $request)
    {
        $organisation = Organisation::where('organisation_id', $request->organisation_id)->first();
        if (!$organisation) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Kurum bulunamadı'
            ], 200);
        }
        $organisation->approved_at = now();

        $organisation->save();

        return response([
            'status' => true,
            'message' => 'Başarılı',
            'data' => 'Kurum onaylandı',
        ], 200);
    }

    public function reject(Request $request)
    {
        $organisation = Organisation::where('organisation_id', $request->organisation_id)->first();
        if (!$organisation) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Kurum bulunamadı'
            ], 200);
        }
        $organisation->delete();

        $specialist = User::where('user_id', $request->specialist_id)->first();
        if (!$specialist) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Kullanıcı bulunamadı'
            ], 200);
        }
        $specialist->organisation_id = null;
        return response([
            'status' => true,
            'message' => 'Başarılı',
            'data' => 'Kurum reddedildi',
        ], 200);
    }
}

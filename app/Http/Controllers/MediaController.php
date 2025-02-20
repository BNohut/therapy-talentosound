<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Orchid\Attachment\File;
use Illuminate\Support\Facades\Notification;
use App\Notifications\SystemNotification;

class MediaController extends Controller
{
    public function all()
    {
        $medias = Media::query();

        if (!is_null(request()->filter)) {
            $medias = $medias->where('title', 'LIKE', '%' . request()->filter . '%');
        }

        $medias = $medias->orderBy('created_at', 'desc')->get();

        foreach ($medias as $media) {
            if ($media->attachment) {
                $media->awsUrl = $media->attachmentS->url();
                $media->extansion = $media->attachmentS->extension;
            }
            $media->date = Carbon::parse($media->create_at)->format('d.m.Y');
        }

        if ($medias->isEmpty()) {
            return response([
                'status' => false,
                'data' => []
            ], 200);
        }
        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => $medias
        ], 200);
    }

    public function create(Request $request)
    {
        $request->validate(
            [
                'title' => [
                    'required',
                    Rule::unique('medias', 'title')
                ],
            ],
            [
                'title.required' => 'Medya adı zorunludur',
                'title.unique' => 'Bu medya adı zaten var',
            ]
        );

        $data = $request->except("attachment");
        $data['user_id'] = auth()->user()->user_id;

        try {
            $media = Media::create($data);

            if ($_FILES && $_FILES['attachment']) {
                $file = new File($request->file('attachment'), 's3');
                $attachment = $file->path('medias')->load();

                $media->attachment = $attachment->id;
                $media->save();
                $media['url'] = $media->attachmentS->url();
            }
            $users = User::all();
            foreach ($users as $key => $user) {
                $user->notify(new SystemNotification('Medya Yüklendi', 'Yeni bir medya yüklendi'));
            }
            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $media
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
        $media = Media::where('media_id', $request->media_id)->first();

        if (!$media) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Kayıt bulunamadı'
            ], 404);
        }

        $request->validate(
            [
                'title' => [
                    'required',
                    Rule::unique('medias', 'title')->ignore($media->media_id, 'media_id'),
                ],
            ],
            [
                'title.required' => 'Medya adı zorunludur',
                'title.unique' => 'Bu medya adı zaten var',
            ]
        );

        $data = $request->except("attachment");
        $data['user_id'] = auth()->user()->user_id;

        try {

            $media->update($data);

            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $media
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
        $media = Media::where('media_id', $request->media_id)->first();

        if (!$media) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Kayıt bulunamadı'
            ], 404);
        }

        if ($media->attachment) {
            $media->attachmentS->delete();
        }

        $media->delete();

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => 'Medya silindi'
        ], 200);
    }

    public function detail(Request $request)
    {
        $media = Media::where('media_id', $request->media_id)->first();

        if (!$media) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Kayıt bulunamadı'
            ], 404);
        }
        $media->url = 0;
        $media->extension = $media->attachmentS->extension;


        if (!is_null($media->attachment)) {
            $media->url = $media->attachmentS->url();
        }

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => $media,
        ], 200);
    }
}

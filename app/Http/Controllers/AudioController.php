<?php

namespace App\Http\Controllers;

use App\Models\Audio;
use Illuminate\Http\Request;
use Orchid\Attachment\File;

class AudioController extends Controller
{
    public function all()
    {
        $audios = Audio::query();
        if (count(request()->filter) > 0) {
            $audios = $audios->whereNotIn("audio_id", request()->filter);
        }
        if (request()->has('categoryId')) {
            $audios = $audios->where('category_id', request()->categoryId);
        }

        $audios = $audios->orderBy('created_at', 'desc')->get();
        foreach ($audios as $key => $audio) {
            $audio['url'] = $audio->attachmentS->url();
            $audio['category'] = $audio->categoryS->name;
        }
        if ($audios->isEmpty()) {
            return response([
                'status' => false,
                'data' => []
            ], 200);
        }

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => $audios
        ], 200);
    }

    public function create(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'name' => 'required',
            'audio' => 'required'
        ], [
            'category_id.required' => __('Category section is required'),
            'name.required' => __('Audio name field is required'),
            'audio.required' => __('Audio field is required'),
        ]);

        $data = $request->except('audio');

        try {

            $audio = Audio::create($data);

            if ($_FILES && $_FILES['audio']) {
                $file = new File($request->file('audio'));
                $attachment = $file->path('audios')->load();
                $audio->audio = $attachment->id;
                $audio->save();

                $audio['url'] = $audio->attachmentS->url();
            }
            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $audio,
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
        $audio = Audio::where('audio_id', $request->audio_id)->first();

        if (is_null($audio)) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Dinleti bulunamadı'
            ], 404);
        }

        $request->validate([
            'category_id' => 'required',
            'name' => 'required',
        ], [
            'category_id.required' => __('Category section is required'),
            'name.required' => __('Audio name field is required'),
        ]);

        try {
            $audio->update($request->all());

            return response()->json([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $audio,
            ])->setStatusCode(200);
        } catch (\Exception $err) {
            return response([
                'status' => "error",
                'error' => $err->getMessage(),
            ], 500);
        }
    }

    public function delete(Request $request)
    {
        $audio = Audio::where('audio_id', $request->audio_id)->first();

        if (is_null($audio)) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Dinleti bulunamadı'
            ], 404);
        }
        $audio->attachmentS->delete();
        $audio->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => 'Dinleti silindi',
        ])->setStatusCode(200);
    }

    public function detail(Request $request)
    {
        $audio = Audio::where('audio_id', $request->audio_id)->first();

        if (!$audio) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Dinleti bulunamadı'
            ], 404);
        }
        $categoryName = $audio->categoryS->name;
        $audio['category_name'] = $categoryName;
        $audio['url'] = $audio->attachmentS->url();
        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => $audio,
        ], 200);
    }
}

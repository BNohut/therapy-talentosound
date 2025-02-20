<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Orchid\Attachment\File;

class PageController extends Controller
{
    public function all()
    {
        $pages = Page::orderBy('created_at', 'desc')->get();

        if ($pages->isEmpty()) {
            return response([
                'status' => false,
                'message' => 'Kayıt bulunamadı'
            ], 200);
        }

        foreach ($pages as $page) {
            $page->date = Carbon::parse($page->create_at)->format('d.m.Y');
            $page->userName = User::where('user_id', $page->user_id)->value('name');
            if ($page->attachmentS && $page->attachmentS->url()) {
                $page->imageURL = $page->attachmentS->url();
            } else {
                $page->imageURL = 0;
            }
        }

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => $pages
        ], 200);
    }

    public function create(Request $request)
    {
        $request->validate(
            [
                'slug' => [
                    'required',
                    Rule::unique('pages', 'slug')
                ],
            ],
            [
                'slug.required' => 'Slug alanı zorunludur',
                'slug.unique' => 'Bu slug zaten var',
            ]
        );

        $data = $request->except("image");
        $data['user_id'] = auth()->user()->user_id;

        try {

            $page = Page::create($data);

            if ($_FILES && $_FILES['image']) {
                $file = new File($request->file('image'));
                $attachment = $file->load();

                $page->image = $attachment->id;
                $page->save();
                $page['url'] = $page->attachmentS->url();
            }

            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $page
            ], 200);
        } catch (\Exception $err) {
            return response([
                'status' => false,
                'error' => $err->getMessage(),
            ], 500);
        }
    }

    public function update(Request $request)
    {
        $page = Page::where('page_id', $request->page_id)->first();

        if (!$page) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Kayıt bulunamadı'
            ], 404);
        }

        $request->validate(
            [
                'slug' => [
                    'required',
                    Rule::unique('pages', 'slug')->ignore($page->page_id, 'page_id'),
                ],
            ],
            [
                'slug.required' => 'Slug alanı zorunludur',
                'slug.unique' => 'Bu slug adı zaten var',
            ]
        );

        $data = $request->except("image");
        $data['user_id'] = auth()->user()->user_id;

        try {

            $page->update($data);

            if ($_FILES && $_FILES['image']) {
                if ($page->image) {
                    $page->attachmentS()->delete();
                }

                $file = new File($request->file('image'));
                $attachment = $file->load();

                $page->image = $attachment->id;
                $page->save();
            }

            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $page
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
        $page = Page::where('page_id', $request->page_id)->first();

        if (!$page) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Kayıt bulunamadı'
            ], 404);
        }

        if ($page->image) {
            $page->attachmentS->delete();
        }

        $page->delete();

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => 'Sayfa silindi'
        ], 200);
    }

    public function detail(Request $request)
    {
        $page = Page::where('slug', $request->slug)->first();

        if (!$page) {
            return response([
                'status' => false,
                'data' => []
            ], 200);
        }

        $page->imageURL = 0;
        if (!is_null($page->image)) {
            $page->imageURL = $page->attachmentS->url();
        }

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => $page,
        ], 200);
    }

    public function getAgreement(Request $request)
    {
        $page = Page::where('slug', $request->slug)->first();

        if (!$page) {
            return response([
                'status' => false,
                'data' => []
            ], 200);
        }

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => $page->content,
        ], 200);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function all()
    {
        $categories = Category::orderBy('created_at', 'desc')->get();

        if ($categories->isEmpty()) {
            return response([
                'status' => false,
                'data' => []
            ], 200);
        }

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => $categories
        ], 200);
    }

    public function create(Request $request)
    {

        $request->validate(
            [
                'name' => [
                    'required',
                    Rule::unique('audio_categories', 'name')
                ],
            ],
            [
                'name.required' => __('Category name field is required'),
                'name.unique' => __('Category name already taken'),
            ]
        );

        try {
            $category = Category::create($request->all());

            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $category
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
        $category = Category::where('audio_category_id', $request->category_id)->first();

        if (is_null($category)) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Kategori bulunamadı'
            ], 404);
        }

        $request->validate(
            [
                'name' => [
                    'required',
                    Rule::unique('audio_categories', 'name')->ignore($category->audio_category_id, 'audio_category_id'),
                ],
            ],
            [
                'name.required' => __('Category name field is required'),
                'name.unique' => __('Category name already taken'),
            ]
        );

        try {
            $category->update($request->all());

            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $category
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
        $category = Category::where('audio_category_id', $request->category_id)->first();

        if (is_null($category)) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Kategori bulunamadı'
            ], 404);
        }

        $category->delete();

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => 'Kategori silindi'
        ], 200);
    }
}

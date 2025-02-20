<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Test;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TestController extends Controller
{
    public function all(Request $request)
    {
        $tests = Test::all();

        if ($tests->isEmpty()) {
            return response([
                'status' => false,
                'data' => []
            ], 200);
        }

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => $tests
        ], 200);
    }

    public function create(Request $request)
    {

        $request->validate(
            [
                'name' => [
                    'required',
                    Rule::unique('tests', 'name')
                ],
            ],
            [
                'name.required' => __('Test name field is required'),
                'name.unique' => __('Test name already taken'),
            ]
        );

        try {
            $test = Test::create($request->all());

            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $test
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
        $test = Test::where('test_id', $request->test_id)->first();

        if (is_null($test)) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Test bulunamadı'
            ], 404);
        }

        $request->validate(
            [
                'name' => [
                    'required',
                    Rule::unique('tests', 'name')->ignore($test->test_id, 'test_id'),
                ],
            ],
            [
                'name.required' => __('Test name field is required'),
                'name.unique' => __('Test name already taken'),
            ]
        );

        try {
            $test->update($request->all());

            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $test
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
        $test = Test::where('test_id', $request->test_id)->first();

        if (is_null($test)) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Test bulunamadı'
            ], 404);
        }

        if ($test->attachment) {
            $test->attachmentS->delete();
        }
        $test->delete();

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => 'Test silindi'
        ], 200);
    }

    public function detail(Request $request)
    {
        $test = Test::where('test_id', $request->test_id)->first();

        if (is_null($test)) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Test bulunamadı'
            ], 404);
        }

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => $test,
        ], 200);
    }

    public function questions(Request $request)
    {
        $questions = Question::where('test_id', $request->test_id)->orderBy('sorting_number')->get();
        $testSlug = Test::where('test_id', $request->test_id)->first()->slug;
        if ($questions->isEmpty()) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Soru bulunamadı'
            ], 404);
        }
        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => $questions,
            'test_slug' => $testSlug
        ], 200);
    }
}

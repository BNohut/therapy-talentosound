<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;
use App\Models\State;


class ProvinceController extends Controller
{
    public function all()
    {
        $provinces = Province::all();

        if ($provinces->isEmpty()) {
            return response([
                'status' => false,
                'data' => []
            ], 200);
        }

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => $provinces
        ], 200);
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => "required",
            'plate_number' => 'required',
            'phone_code' => 'required',
        ], [
            'name.required' => __('Province name field is required'),
            'plate_number.required' => __('Province plate number field is required'),
            'phone_code.required' => __('Province phone code field is required'),
        ]);

        $data = $request->except("_token");

        try {
            $province = Province::create($data);

            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $province
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
        $province = Province::where('province_id', $request->province_id)->first();

        if (is_null($province)) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'il bulunamadı'
            ], 404);
        }
        $request->validate([
            'name' => "required",
            'plate_number' => 'required',
            'phone_code' => 'required',
        ], [
            'name.required' => __('Province name field is required'),
            'plate_number.required' => __('Province plate number field is required'),
            'phone_code.required' => __('Province phone code field is required'),
        ]);

        $data = $request->except("_token");

        try {
            $province->update($data);

            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $province
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
        $province = Province::query()->where('province_id', $request->province_id)->first();

        if (is_null($province)) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'il bulunamadı'
            ], 404);
        }

        $province->delete();

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => 'il silindi'
        ], 200);
    }

    public function detail(Request $request)
    {
        $province = Province::query()->where('province_id', $request->province_id)->first();

        if (is_null($province)) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'il bulunamadı'
            ], 404);
        }

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => $province,
        ], 200);
    }

    public function getStatesDependentProvince(Request $request)
    {
        $states = State::where('province_id', $request->plate_number)->get();
        if (!$states) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Kayıt bulunamadı'
            ], 404);
        }
        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => $states,
        ], 200);
    }

    //Defined for Web Route
    public function getStates(Request $request)
    {
        $states = State::where('province_id', $request->province)->get();
        if (!$states) {
            return response([
                'status' => false,
                'data' => []
            ], 200);
        }
        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => $states,
        ], 200);
    }
}

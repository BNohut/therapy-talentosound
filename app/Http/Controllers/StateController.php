<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function all()
    {
        $states = State::all();
        if ($states->isEmpty()) {
            return response([
                'status' => false,
                'data' => []
            ], 200);
        }
        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => $states
        ], 200);
    }

    public function create(Request $request)
    {
        $data = $request->except("_token");
        try {
            $state = State::create($data);
            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $state
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
        $state = State::where('state_id', $request->state_id)->first();
        if (is_null($state)) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'ilçe bulunamadı'
            ], 404);
        }

        try {
            $state->update($request->all());
            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $state
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
        $state = State::query()->where('state_id', $request->state_id)->first();
        if (is_null($state)) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'ilçe bulunamadı'
            ], 404);
        }

        $state->delete();

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => 'ilçe silindi'
        ], 200);
    }

    public function detail(Request $request)
    {
        $state = State::query()->where('state_id', $request->state_id)->first();
        if (is_null($state)) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'ilçe bulunamadı'
            ], 404);
        }
        $state->province = Province::where('plate_number', $state->province_id)->pluck('name')->first();

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => $state,
        ], 200);
    }

    public function getNeighborhoodsDependentState(Request $request)
    {
        $neighborhood = State::where('state_id', $request->state_id)->value('neighborhoods');
        if (!$neighborhood) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Kayıt bulunamadı'
            ], 404);
        }
        $neighborhoods = explode(', ', $neighborhood);
        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => $neighborhoods,
        ], 200);
    }
}

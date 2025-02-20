<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Orchid\Platform\Models\Role;

class RoleController extends Controller
{
    public function all()
    {
        $roles = Role::all();

        if ($roles->isEmpty()) {
            return response([
                'status' => false,
                'data' => []
            ], 200);
        }
        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => $roles
        ], 200);
    }

    public function create(Request $request)
    {
        $request->validate(
            [
                'name' => [
                    'required',
                    Rule::unique('roles', 'name')
                ],
            ],
            [
                'name.required' => 'Ad alanı zorunludur',
                'name.unique' => 'Bu role zaten var',
            ]
        );
        try {

            $role = Role::create([
                'name' => $request->name,
            ]);

            return response([
                'status' => 'success',
                'message' => 'Başarılı',
                'data' => $role
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
        $role = Role::where('id', $request->role_id)->first();

        if (!$role) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'Rol bulunamadı'
            ], 404);
        }

        $request->validate(
            [
                'name' => [
                    'required',
                    Rule::unique('roles', 'name')->ignore($role->id, 'id'),
                ],
            ],
            [
                'name.required' => 'Ad alanı zorunludur',
                'name.unique' => 'Bu role zaten var',
            ]
        );

        try {
            $role->update([
                "name" => $request->name
            ]);

            return response([
                'status' => 'burada',
                'message' => 'Başarılı',
                'data' => $role
            ], 200);
        } catch (\Exception $err) {
            return response([
                'status' => "hatada",
                'error' => $err->getMessage(),
            ], 500);
        }
    }

    public function delete(Request $request)
    {
        $role = Role::where('id', $request->id)->first();
        if (is_null($role)) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'rol bulunamadı'
            ], 404);
        }

        $role->delete();

        return response([
            'status' => 'success',
            'message' => 'Rol silindi',
        ], 200);
    }

    public function detail(Request $request)
    {
        $role = Role::where('id', $request->id)->first();
        if (is_null($role)) {
            return response([
                'status' => false,
                'error' => 'Bad Request',
                'data' => 'rol bulunamadı'
            ], 404);
        }

        return response([
            'status' => 'success',
            'message' => 'Başarılı',
            'data' => $role
        ], 200);
    }
}

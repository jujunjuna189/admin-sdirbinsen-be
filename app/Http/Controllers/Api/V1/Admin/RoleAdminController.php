<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\Roles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoleAdminController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = Roles::query();

            // Apply search
            $search = $request->input('search');
            if (!empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', "%$search%")
                        ->orWhere('name_lower', 'like', "%$search%");
                });
            }
            // Apply filtering
            $created_at = $request->input('created_at');
            if (!empty($created_at)) {
                $query->where('created_at', $created_at);
            }

            // Paginate the results
            $perPage = $request->input('per_page', 100);
            $roles = $query->paginate($perPage);

            $data = [
                'roles' => $roles
            ];

            return responseJson('All roles', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function show($id)
    {
        try {
            $role = Roles::find($id);
            if (is_null($role)) {
                return responseJson('Role not found', 404, 'Error');
            }

            $data = [
                'role' => $role
            ];

            return responseJson('detail roles', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'name_lower' => 'required',
            ], [
                'name.required' => 'Name wajib diisi!',
                'name_lower.required' => 'Name lower wajib diisi!',
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $role = new Roles();
            $role->name = $request->input('name');
            $role->name_lower = $request->input('name_lower');

            $role->save();


            $data = [
                'role' => $role
            ];

            return responseJson('Add role', 201, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'name_lower' => 'required',
            ], [
                'name.required' => 'Name wajib diisi!',
                'name_lower.required' => 'Name lower wajib diisi!',
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $role = Roles::find($id);
            if (is_null($role)) {
                return responseJson('Role not found', 404, 'Error');
            }


            $role->name = $request->input('name');
            $role->name_lower = $request->input('name_lower');

            $role->save();


            $data = [
                'role' => $role
            ];

            return responseJson('update role', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function destroy($id)
    {
        try {

            $role = Roles::find($id);
            if (is_null($role)) {
                return responseJson('Role not found', 404, 'Error');
            }

            $role->delete();


            $data = [
                'role' => $role
            ];

            return responseJson('delete role', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}

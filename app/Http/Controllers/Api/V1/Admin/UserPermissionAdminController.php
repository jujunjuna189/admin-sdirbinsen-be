<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\UserPermission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserPermissionAdminController extends Controller
{
    public function show($id)
    {
        try {
            $userPermission = UserPermission::where('user_id',$id)->with('permission')->get();
            if ($userPermission->count() == 0) {
                return responseJson('permission not found', 404, 'Error');
            }

            $permission = [];
            foreach ($userPermission as $permit) {
                $permission[$permit->permission->key] = true;
            }

            $permissions = Permission::whereHas('users', function($query) use($id){
                $query->where('user_id', $id);
            })->get();

            $data = [
                'user_id' => $id,
                'permission' => $permission,
                'permissions' => $permissions,
            ];

            return responseJson('show user permission', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'user_id' => 'required',
                'permission_id' => 'required|array',
            ], [
                'user_id.required' => 'User id wajib diisi!',
                'permission_id.required' => 'Permission id wajib diisi!',
                'permission_id.array' => 'Format permission tidak sesuai!'
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            foreach ($request->permission_id as $permit) {
                $userPermission = new UserPermission();
                $userPermission->user_id = $request->user_id;
                $userPermission->permission_id = $permit;

                $userPermission->save();
            }

            return responseJson('Add user permission', 201, 'Success');
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $validator = Validator::make($request->all(), [
                'user_id' => 'required',
                'permission_id' => 'required|array',
            ], [
                'user_id.required' => 'User id wajib diisi!',
                'permission_id.required' => 'Permission id wajib diisi!',
                'permission_id.array' => 'Format permission tidak sesuai!'
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $userPermission = UserPermission::where('user_id', $id)->delete();
            if (is_null($userPermission)) {
                return responseJson('user permission not found', 404, 'Error');
            }


            foreach ($request->permission_id as $permit) {
                $userPermission = new UserPermission();
                $userPermission->user_id = $id;
                $userPermission->permission_id = $permit;

                $userPermission->save();
            }


            return responseJson('update user permission', 201, 'Success');
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function destroy($id)
    {
        try {
            $satuan = UserPermission::find($id);
            if (!$satuan) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'satuan'=>$satuan
            ];
            $satuan->delete();
            return responseJson('Delete user permission', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}

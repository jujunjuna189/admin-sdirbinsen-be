<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserPersonil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserPersonilAdminController extends Controller
{
    public function show($id)
    {
        try {
            $userPersonil = UserPersonil::where('user_id', $id)
                                        ->first();

            if (!$userPersonil) {
                return responseJson('user personil not found', 404, 'Error');
            }


            $data = [
                'user_id' => $id,
                'personil_id' => $userPersonil->personil_id,
                'status' => $userPersonil->status,
                'personil' => $userPersonil->personil,
                'user' => $userPersonil->user,
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
                'user_id' => 'required|numeric',
                'personil_id' => 'required|numeric',
                'status' => 'required|max:255'

            ], [
                'user_id.required' => 'User id wajib diisi!',
                'user_id.numeric' => 'User id harus berupa angka!',
                'personil_id.required' => 'Personil id wajib diisi!',
                'personil_id.numeric' => 'Personil id harus berupa angka!',
                'status.required' => 'Status wajib diisi!',
                'status.max' => 'Maksimal panjang status adalah 255 karakter!'
            ]);

            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }
            $checkUser = UserPersonil::where('user_id', $request->user_id)->get();
            if($checkUser->count() > 0){
                return responseJson("User sudah terdaftar pada user personil",  403, "Error");
            }

            $userPersonil = new UserPersonil();
            $userPersonil->user_id = $request->user_id;
            $userPersonil->personil_id = $request->personil_id;
            $userPersonil->status = $request->status;

            $userPersonil->save();

            return responseJson('Add user personil', 201, 'Success');
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $validator = Validator::make($request->all(), [
                'user_id' => 'required|numeric',
                'personil_id' => 'required|numeric',
                'status' => 'required|max:255'

            ], [
                'user_id.required' => 'User id wajib diisi!',
                'user_id.numeric' => 'User id harus berupa angka!',
                'personil_id.required' => 'Personil id wajib diisi!',
                'personil_id.numeric' => 'Personil id harus berupa angka!',
                'status.required' => 'Status wajib diisi!',
                'status.max' => 'Maksimal panjang status adalah 255 karakter!'
            ]);

            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $userPersonil = UserPersonil::where('user_id', $id)
                                        ->where('personil_id', $request->personil_id)
                                        ->first();

            if (!$userPersonil) {
                return responseJson('user personil not found', 404, 'Error');
            }

            $userPersonil->status = $request->status;
            $userPersonil->save();

            return responseJson('update user personil', 200, 'Success');
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}

<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\KemampuanBahasa;
use App\Models\Personil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RiwayatKemampuanBahasaController extends Controller
{
    public function index($id_personil, Request $request)
    {
        try {
            $query = KemampuanBahasa::query()->where('personil_id', $id_personil)->with('personil');

            // Apply search
            $search = $request->input('search');
            if (!empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->where('nama', 'like', "%$search%")
                    ->orWhere('category', 'like', "%$search%"); // Assuming 'category' is a column in the Material table
                });
            }

            // Apply filtering by created_at
            $created_at = $request->input('created_at');
            if (!empty($created_at)) {
                $query->whereDate('created_at', $created_at);
            }

            // Paginate the results
            $perPage = $request->input('per_page', 100);
            $kemampuan_bahasa = $query->paginate($perPage);

            $data = [
                'kemampuan_bahasa' => $kemampuan_bahasa,
            ];

            return responseJson('All Kemampuan Bahasa', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function show($id_personil, $id_bahasa)
    {
        try {
            $kemampuan_bahasa = KemampuanBahasa::where('id',$id_bahasa)->first();
            if (!$kemampuan_bahasa) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'kemampuan_bahasa' => $kemampuan_bahasa
            ];
            return responseJson('Show Kemampuan Bahasa', 200, 'Success',$data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'personil_id' => 'required|numeric',
                'nama' => 'required',
                'jenis_bahasa' => 'required',
                'status' => 'required',
            ],[
                'personil_id.required'=>"Personil ID wajib diisi!",
                'personil_id.numeric'=>"Format Personil ID salah!",
                'nama.required'=>"Nama kemampuan bahasa wajib diisi!",
                'jenis_bahasa.required'=>"Jenis bahasa wajib diisi!",
                'status.required'=>"Status wajib diisi!",
            ]);

            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            // CHECK PERSONNEL
            $checkPersonil = Personil::find($request->personil_id);
            if(!$checkPersonil){
                return responseJson("Personil not found", 404, "Error");
            }

            $kemampuan_bahasa = new KemampuanBahasa();
            $kemampuan_bahasa->personil_id = $request->input('personil_id');
            $kemampuan_bahasa->nama = $request->input('nama');
            $kemampuan_bahasa->jenis_bahasa = $request->input('jenis_bahasa');
            $kemampuan_bahasa->status = $request->input('status');

            $kemampuan_bahasa->save();

            $data = [
                'kemampuan_bahasa'=> $kemampuan_bahasa
            ];

            return responseJson('Add kemampuan bahasa', 201, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function update(Request $request, $id_personil, $id)
    {
        try {
            $kemampuan_bahasa = KemampuanBahasa::find($id);
            if (!$kemampuan_bahasa) {
                return responseJson('Data not found', 404, 'Error');
            }

            // Validate the updated data
            $validator = Validator::make($request->all(), [
                'personil_id' => 'required|numeric',
                'nama' => 'required',
                'jenis_bahasa' => 'required',
                'status' => 'required',
            ],[
                'personil_id.required'=>"Personil ID wajib diisi!",
                'personil_id.numeric'=>"Format Personil ID salah!",
                'nama.required'=>"Nama kemampuan bahasa wajib diisi!",
                'jenis_bahasa.required'=>"Jenis bahasa wajib diisi!",
                'status.required'=>"Status wajib diisi!",
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            // CHECK PERSONNEL
            $checkPersonil = Personil::find($request->personil_id);
            if(!$checkPersonil){
                return responseJson("Personil not found", 404, "Error");
            }

            // Update data
            $kemampuan_bahasa->personil_id = $request->input('personil_id');
            $kemampuan_bahasa->nama = $request->input('nama');
            $kemampuan_bahasa->jenis_bahasa = $request->input('jenis_bahasa');
            $kemampuan_bahasa->status = $request->input('status');

            $kemampuan_bahasa->save();

            $data = [
                'kemampuan_bahasa'=>$kemampuan_bahasa
            ];

            return responseJson('Update kemampuan_bahasa', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function destroy($id_personil, $id_bahasa)
    {
        try {
            $kemampuan_bahasa = KemampuanBahasa::find($id_bahasa);
            if (!$kemampuan_bahasa) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'kemampuan_bahasa'=>$kemampuan_bahasa
            ];
            $kemampuan_bahasa->delete();
            return responseJson('Delete kemampuan bahasa', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}

<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\PendidikanUmum;
use App\Models\Personil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RiwayatPendidikanUmumController extends Controller
{
    public function index($id_personil, Request $request)
    {
        try {
            $query = PendidikanUmum::query()->where('personil_id', $id_personil)->with('personil');

            // Apply search
            $search = $request->input('search');
            if (!empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->where('nama_pendidikan', 'like', "%$search%")
                    ->orWhere('jenis_pendidikan', 'like', "%$search%"); // Assuming 'category' is a column in the Material table
                });
            }

            // Apply filtering by created_at
            $created_at = $request->input('created_at');
            if (!empty($created_at)) {
                $query->whereDate('created_at', $created_at);
            }

            // Paginate the results
            $perPage = $request->input('per_page', 100);
            $pendidikan_umum = $query->paginate($perPage);

            $data = [
                'pendidikan_umum' => $pendidikan_umum,
            ];

            return responseJson('All Pendidikan Umum', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function show($id_personil, $id_pendidikan_umum)
    {
        try {
            $pendidikan_umum = PendidikanUmum::where('id',$id_pendidikan_umum)->first();
            if (!$pendidikan_umum) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'pendidikan_umum' => $pendidikan_umum
            ];
            return responseJson('Show Pendidikan Umum', 200, 'Success',$data);
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
                'jenis_pendidikan' => 'required',
                'tahun' => 'required|integer|digits:4',
                'nama_pendidikan' => 'required',
            ],[
                'personil_id.required'=>"Personil ID wajib diisi!",
                'personil_id.numeric'=>"Format Personil ID salah!",
                'jenis_pendidikan.required'=>"Jenis pendidikan wajib diisi!",
                'tahun.required'=>"Tahun wajib diisi!",
                'tahun.integer'=>"Format Tahun salah!",
                'tahun.digits'=>"Panjang tahun harus 4 digit!",
                'nama_pendidikan.required'=>"Nama pendidikan wajib diisi!",
            ]);

            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            // CHECK PERSONNEL
            $checkPersonil = Personil::find($request->personil_id);
            if(!$checkPersonil){
                return responseJson("Personil not found", 404, "Error");
            }

            $pendidikan_umum = new PendidikanUmum();

            $pendidikan_umum->personil_id = $request->input('personil_id');
            $pendidikan_umum->jenis_pendidikan = $request->input('jenis_pendidikan');
            $pendidikan_umum->tahun = $request->input('tahun');
            $pendidikan_umum->nama_pendidikan = $request->input('nama_pendidikan');
            $pendidikan_umum->prestasi = $request->input('prestasi');

            $pendidikan_umum->save();

            $data = [
                'pendidikan_umum'=> $pendidikan_umum
            ];

            return responseJson('Add riwayat pendidikan umum', 201, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function update(Request $request, $id_personil, $id)
    {
        try {
            $pendidikan_umum = PendidikanUmum::find($id);
            if (!$pendidikan_umum) {
                return responseJson('Data not found', 404, 'Error');
            }

            // Validate the updated data
            $validator = Validator::make($request->all(), [
                'personil_id' => 'required|numeric',
                'jenis_pendidikan' => 'required',
                'tahun' => 'required|integer|digits:4',
                'nama_pendidikan' => 'required',
            ], [
                'personil_id.required'=>"Personil ID wajib diisi!",
                'personil_id.numeric'=>"Format Personil ID salah!",
                'jenis_pendidikan.required'=>"Jenis pendidikan wajib diisi!",
                'tahun.required'=>"Tahun wajib diisi!",
                'tahun.integer'=>"Format Tahun salah!",
                'tahun.digits'=>"Panjang tahun harus 4 digit!",
                'nama_pendidikan.required'=>"Nama pendidikan wajib diisi!",
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
            $pendidikan_umum->personil_id = $request->input('personil_id');
            $pendidikan_umum->jenis_pendidikan = $request->input('jenis_pendidikan');
            $pendidikan_umum->tahun = $request->input('tahun');
            $pendidikan_umum->nama_pendidikan = $request->input('nama_pendidikan');
            $pendidikan_umum->prestasi = $request->input('prestasi');

            $pendidikan_umum->save();

            $data = [
                'pendidikan_umum'=>$pendidikan_umum
            ];

            return responseJson('Update riwayat pendidikan umum', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function destroy($id_personil, $id)
    {
        try {
            $pendidikan_umum = PendidikanUmum::find($id);
            if (!$pendidikan_umum) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'pendidikan_umum'=>$pendidikan_umum
            ];
            $pendidikan_umum->delete();
            return responseJson('Delete riwayat pendidikan umum', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}

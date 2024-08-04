<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\Personil;
use App\Models\RiwayatJabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class RiwayatJabatanController extends Controller
{
    public function index($id_personil, Request $request)
    {
        try {
            $query = RiwayatJabatan::query()->where('personil_id', $id_personil)->with('personil');

            // Apply search
            $search = $request->input('search');
            if (!empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->where('nama', 'like', "%$search%")
                    ->orWhere('category', 'like', "%$search%"); // Assuming 'category' is a column in the riwayat_jabatan table
                });
            }

            // Apply filtering by created_at
            $created_at = $request->input('created_at');
            if (!empty($created_at)) {
                $query->whereDate('created_at', $created_at);
            }

            // Paginate the results
            $perPage = $request->input('per_page', 100);
            $riwayat_jabatan = $query->paginate($perPage);

            $data = [
                'riwayat_jabatan' => $riwayat_jabatan,
            ];

            return responseJson('All Riwayat Jabatan', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function show($id_personil, $id_jabatan)
    {
        try {
            $riwayat_jabatan = RiwayatJabatan::where('id',$id_jabatan)->first();
            if (!$riwayat_jabatan) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'riwayat_jabatan' => $riwayat_jabatan
            ];
            return responseJson('Show Riwayat Jabatan', 200, 'Success',$data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'personil_id' => 'required|integer',
                'jabatan' => 'required',
                'tmt' => 'required|date',
            ], [
                'personil_id.required' => 'Personil ID wajib diisi!',
                'personil_id.integer' => 'Format Personil ID salah!',
                'jabatan.required' => 'Nama jabatan wajib diisi!',
                'tmt.required' => 'TMT (Tanggal Mulai Menjabat) wajib diisi!',
                'tmt.date' => 'Format Tanggal Mulai Menjabat Salah!',
            ]);

            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            // CHECK PERSONNEL
            $checkPersonil = Personil::find($request->personil_id);
            if(!$checkPersonil){
                return responseJson("Personil not found", 404, "Error");
            }



            $riwayat_jabatan = new RiwayatJabatan();
            $riwayat_jabatan->personil_id = $request->input('personil_id');
            $riwayat_jabatan->jabatan = $request->input('jabatan');
            $riwayat_jabatan->tmt = $request->input('tmt');

            if ($request->hasFile('file')) {
                $picture = $request->file('file');

                $filename = Storage::disk('public')->put('jabatan/file', $picture);
                $riwayat_jabatan->file = $filename;
            }

            $riwayat_jabatan->save();

            $data = [
                'riwayat_jabatan'=> [
                    'id' => $riwayat_jabatan->id,
                    'jabatan' => $riwayat_jabatan->jabatan,
                    'tmt' => $riwayat_jabatan->tmt,
                ]
            ];

            return responseJson('Add riwayat jabatan', 201, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function update(Request $request, $id_personil, $id_jabatan)
    {
        try {
            $riwayat_jabatan = RiwayatJabatan::find($id_jabatan);
            if (!$riwayat_jabatan) {
                return responseJson('Data not found', 404, 'Error');
            }

            // Validate the updated data
            $validator = Validator::make($request->all(), [
                'personil_id' => 'required|integer',
                'jabatan' => 'required',
                'tmt' => 'required|date',
            ],[
                'personil_id.required' => 'Personil ID wajib diisi!',
                'personil_id.integer' => 'Format Personil ID salah!',
                'jabatan.required' => 'Nama jabatan wajib diisi!',
                'tmt.required' => 'TMT (Tanggal Mulai Menjabat) wajib diisi!',
                'tmt.date' => 'Format Tanggal Mulai Menjabat Salah!',
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            // CHECK PERSONNEL
            $checkPersonil = Personil::find($request->personil_id);
            if(!$checkPersonil){
                return responseJson("Personil not found", 404, "Error");
            }

            // Update the riwayat_jabatan data
            $riwayat_jabatan->jabatan = $request->input('jabatan');
            $riwayat_jabatan->tmt = $request->input('tmt');

            $riwayat_jabatan->save();

            $data = [
                'riwayat_jabatan'=>$riwayat_jabatan
            ];

            return responseJson('Update riwayat jabatan', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function destroy($id_personil, $id_jabatan)
    {
        try {
            $riwayat_jabatan = RiwayatJabatan::where('id', $id_jabatan)->first();
            if (!$riwayat_jabatan) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'riwayat_jabatan'=>$riwayat_jabatan
            ];
            $riwayat_jabatan->delete();
            return responseJson('Delete riwayat jabatan', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

}

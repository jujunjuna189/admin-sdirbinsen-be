<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\Personil;
use App\Models\RiwayatKepangkatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RiwayatKepangkatanController extends Controller
{
    public function index($id_personil, Request $request)
    {
        try {
            $query = RiwayatKepangkatan::query()->where('personil_id', $id_personil)->with('personil');

            // Apply search
            $search = $request->input('search');
            if (!empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->where('pangkat', 'like', "%$search%")
                    ->orWhere('nomor_kep_skep', 'like', "%$search%"); // Assuming 'category' is a column in the Material table
                });
            }

            // Apply filtering by created_at
            $created_at = $request->input('created_at');
            if (!empty($created_at)) {
                $query->whereDate('created_at', $created_at);
            }

            // Paginate the results
            $perPage = $request->input('per_page', 100);
            $riwayat_kepangkatan = $query->paginate($perPage);

            $data = [
                'riwayat_kepangkatan' => $riwayat_kepangkatan,
            ];

            return responseJson('All Riwayat Kepangkatan', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function show($id_personil, $id_pangkat)
    {
        try {
            $riwayat_kepangkatan = RiwayatKepangkatan::where('id',$id_pangkat)->first();
            if (!$riwayat_kepangkatan) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'riwayat_kepangkatan' => $riwayat_kepangkatan
            ];
            return responseJson('Show Riwayat Kepangkatan', 200, 'Success',$data);
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
                'pangkat' => 'required',
                'tmt' => 'required:date',
                'nomor_kep_skep' => 'required',
            ],[
                'personil_id.required'=>"Personil ID wajib diisi!",
                'personil_id.numeric'=>"Format Personil ID salah!",
                'pangkat.required'=>"Pangkat wajib diisi!",
                'tmt.required'=>"TMT wajib diisi!",
                'tmt.date'=>"Format TMT salah!",
                'nomor_kep_skep.required'=>"Nomor Keputusan wajib diisi!",
            ]);

            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            // CHECK PERSONNEL
            $checkPersonil = Personil::find($request->personil_id);
            if(!$checkPersonil){
                return responseJson("Personil not found", 404, "Error");
            }

            $pangkat = new RiwayatKepangkatan();

            $pangkat->personil_id = $request->input('personil_id');
            $pangkat->pangkat = $request->input('pangkat');
            $pangkat->tmt = $request->input('tmt');
            $pangkat->nomor_kep_skep = $request->input('nomor_kep_skep');

            $pangkat->save();

            $data = [
                'pangkat'=> $pangkat
            ];

            return responseJson('Add riwayat kepangkatan', 201, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $pangkat = RiwayatKepangkatan::find($id);
            if (!$pangkat) {
                return responseJson('Data not found', 404, 'Error');
            }

            // Validate the updated data
            $validator = Validator::make($request->all(), [
                'personil_id' => 'required|numeric',
                'pangkat' => 'required',
                'tmt' => 'required:date',
                'nomor_kep_skep' => 'required',
            ],[
                'personil_id.required'=>"Personil ID wajib diisi!",
                'personil_id.numeric'=>"Format Personil ID salah!",
                'pangkat.required'=>"Pangkat wajib diisi!",
                'tmt.required'=>"TMT wajib diisi!",
                'tmt.date'=>"Format TMT salah!",
                'nomor_kep_skep.required'=>"Nomor Keputusan wajib diisi!",
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
            $pangkat->personil_id = $request->input('personil_id');
            $pangkat->pangkat = $request->input('pangkat');
            $pangkat->tmt = $request->input('tmt');
            $pangkat->nomor_kep_skep = $request->input('nomor_kep_skep');

            $pangkat->save();

            $data = [
                'pangkat'=>$pangkat
            ];

            return responseJson('Update riwayat kepangkatan', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function destroy($id_personil, $id_pangkat)
    {
        try {
            $pangkat = RiwayatKepangkatan::find($id_pangkat);
            if (!$pangkat){
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'pangkat'=>$pangkat
            ];
            $pangkat->delete();
            return responseJson('Delete riwayat kepangkatan', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}

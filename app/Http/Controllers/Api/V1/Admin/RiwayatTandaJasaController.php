<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\Personil;
use App\Models\RiwayatTandaJasa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RiwayatTandaJasaController extends Controller
{
    public function index($id_personil, Request $request)
    {
        try {
            $query = RiwayatTandaJasa::query()->where('personil_id', $id_personil)->with('personil');

            // Apply search
            $search = $request->input('search');
            if (!empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->where('tanda_kehormatan', 'like', "%$search%");
                });
            }

            // Apply filtering by created_at
            $created_at = $request->input('created_at');
            if (!empty($created_at)) {
                $query->whereDate('created_at', $created_at);
            }

            // Paginate the results
            $perPage = $request->input('per_page', 100);
            $tanda_jasa = $query->paginate($perPage);

            $data = [
                'tanda_jasa' => $tanda_jasa,
            ];

            return responseJson('All Riwayat Tanda Jasa', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function show($id_personil, $id_tanda_jasa)
    {
        try {
            $tanda_jasa = RiwayatTandaJasa::where('id',$id_tanda_jasa)->first();
            if (!$tanda_jasa) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'tanda_jasa' => $tanda_jasa
            ];
            return responseJson('Show RiwayatTandaJasa', 200, 'Success',$data);
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
                'tanda_kehormatan' => 'required',
            ], [
                'personil_id.required' => 'Personil ID wajib diisi!',
                'personil_id.numeric' => 'Format Personil ID salah!',
                'tanda_kehormatan.required' => 'Tanda Kehormatan wajib diisi!',
            ]);

            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            // CHECK PERSONNEL
            $checkPersonil = Personil::find($request->personil_id);
            if(!$checkPersonil){
                return responseJson("Personil not found", 404, "Error");
            }

            $tanda_jasa = new RiwayatTandaJasa();

            $tanda_jasa->personil_id = $request->input('personil_id');
            $tanda_jasa->tanda_kehormatan = $request->input('tanda_kehormatan');

            $tanda_jasa->save();

            $data = [
                'tanda_jasa'=> $tanda_jasa
            ];

            return responseJson('Add riwayat tanda jasa', 201, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function update(Request $request, $id_personil,$id)
    {
        try {
            $tanda_jasa = RiwayatTandaJasa::find($id);
            if (!$tanda_jasa) {
                return responseJson('Data not found', 404, 'Error');
            }

            // Validate the updated data
            $validator = Validator::make($request->all(), [
                'personil_id' => 'required|numeric',
                'tanda_kehormatan' => 'required',
            ],[
                'personil_id.required' => 'Personil ID wajib diisi!',
                'personil_id.numeric' => 'Format Personil ID salah!',
                'tanda_kehormatan.required' => 'Tanda Kehormatan wajib diisi!',
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
            $tanda_jasa->personil_id = $request->input('personil_id');
            $tanda_jasa->tanda_kehormatan = $request->input('tanda_kehormatan');

            $tanda_jasa->save();

            $data = [
                'tanda_jasa'=>$tanda_jasa
            ];

            return responseJson('Update riwayat tanda jasa', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function destroy($id_personil, $id)
    {
        try {
            $tanda_jasa = RiwayatTandaJasa::find($id);
            if (!$tanda_jasa) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'tanda_jasa'=>$tanda_jasa
            ];
            $tanda_jasa->delete();
            return responseJson('Delete riwayat tanda jasa', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}

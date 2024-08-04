<?php

namespace App\Http\Controllers\Api\V1\Searcher;

use App\Http\Controllers\Controller;
use App\Models\RiwayatJabatan;
use Illuminate\Http\Request;

class RiwayatJabatanSearcherController extends Controller
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
}

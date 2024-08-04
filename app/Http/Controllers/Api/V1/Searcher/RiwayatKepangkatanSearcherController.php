<?php

namespace App\Http\Controllers\Api\V1\Searcher;

use App\Http\Controllers\Controller;
use App\Models\RiwayatKepangkatan;
use Illuminate\Http\Request;

class RiwayatKepangkatanSearcherController extends Controller
{
    public function index($id_personil, Request $request)
    {
        try {
            $query = RiwayatKepangkatan::query()->where('personil_id', $id_personil)->with('personil');

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
}

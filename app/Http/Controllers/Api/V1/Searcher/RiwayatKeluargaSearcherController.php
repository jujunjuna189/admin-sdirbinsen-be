<?php

namespace App\Http\Controllers\Api\V1\Searcher;

use App\Http\Controllers\Controller;
use App\Models\RiwayatKeluarga;
use Illuminate\Http\Request;

class RiwayatKeluargaSearcherController extends Controller
{
    public function index($id_personil, Request $request)
    {
        try {
            $query = RiwayatKeluarga::query()->where('personil_id', $id_personil)->with('personil');

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
            $riwayat_keluarga = $query->paginate($perPage);

            $data = [
                'riwayat_keluarga' => $riwayat_keluarga,
            ];

            return responseJson('All Riwayat Keluarga', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function show($id_personil, $id_keluarga)
    {
        try {
            $riwayat_keluarga = RiwayatKeluarga::where('id',$id_keluarga)->first();
            if (!$riwayat_keluarga) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'riwayat_keluarga' => $riwayat_keluarga
            ];
            return responseJson('Show Riwayat Keluarga', 200, 'Success',$data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}

<?php

namespace App\Http\Controllers\Api\V1\Searcher;

use App\Http\Controllers\Controller;
use App\Models\RiwayatPenugasanOperasi;
use Illuminate\Http\Request;

class RiwayatPenugasanOperasiSearcherController extends Controller
{
    public function index($id_personil, Request $request)
    {
        try {
            $query = RiwayatPenugasanOperasi::query()->where('personil_id', $id_personil)->with('personil');

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
            $tugas_operasi = $query->paginate($perPage);

            $data = [
                'tugas_operasi' => $tugas_operasi,
            ];

            return responseJson('All Riwayat Penugasan Operasi', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function show($id_personil, $id_tugas_operasi)
    {
        try {
            $tugas_operasi = RiwayatPenugasanOperasi::where('id', $id_tugas_operasi)->first();
            if (!$tugas_operasi) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'tugas_operasi' => $tugas_operasi
            ];
            return responseJson('Show Riwayat Penugasan Operasi', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}

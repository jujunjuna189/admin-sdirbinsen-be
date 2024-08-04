<?php

namespace App\Http\Controllers\Api\V1\Searcher;

use App\Http\Controllers\Controller;
use App\Models\RiwayatPenugasanLuarNegeri;
use Illuminate\Http\Request;

class RiwayatPenugasanLuarNegeriSearcherController extends Controller
{
    public function index($id_personil, Request $request)
    {
        try {
            $query = RiwayatPenugasanLuarNegeri::query()->where('personil_id', $id_personil)->with('personil');

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
            $tugas_luar_negeri = $query->paginate($perPage);

            $data = [
                'tugas_luar_negeri' => $tugas_luar_negeri,
            ];

            return responseJson('All Riwayat Penugasan Luar Negeri', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function show($id_personil, $id_tugas_luar_negeri)
    {
        try {
            $tugas_luar_negeri = RiwayatPenugasanLuarNegeri::where('id',$id_tugas_luar_negeri)->first();
            if (!$tugas_luar_negeri) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'tugas_luar_negeri' => $tugas_luar_negeri
            ];
            return responseJson('Show Riwayat Penugasan Luar Negeri', 200, 'Success',$data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}

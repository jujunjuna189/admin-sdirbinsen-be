<?php

namespace App\Http\Controllers\Api\V1\Searcher;

use App\Http\Controllers\Controller;
use App\Models\PetaJabatan;
use Illuminate\Http\Request;

class PetaJabatanSearcherController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = PetaJabatan::query();
            $query->with('personil');

            // Apply search
            $search = $request->input('search');
            if (!empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->where('perosnil_id', 'like', "%$search%");
                });
            }

            $id = $request->input('id');
            if (!empty($id)) {
                $query->where('id', $id);
            }

            // Apply filtering by created_at
            $created_at = $request->input('created_at');
            if (!empty($created_at)) {
                $query->whereDate('created_at', $created_at);
            }

            // Paginate the results
            $perPage = $request->input('per_page', 100);
            $peta_jabatan = $query->paginate($perPage);

            $resultPermit = collect($peta_jabatan->items())->groupBy('golongan');

            $data = [
                'current_page' => $peta_jabatan->currentPage(),
                'data' => $resultPermit,
                'first_page_url' => $peta_jabatan->url(1),
                'from' => $peta_jabatan->firstItem(),
                'last_page' => $peta_jabatan->lastPage(),
                'last_page_url' => $peta_jabatan->url($peta_jabatan->lastPage()),
                'links' => null,
                'next_page_url' => $peta_jabatan->nextPageUrl(),
                'path' => $peta_jabatan->path(),
                'per_page' => $peta_jabatan->perPage(),
                'prev_page_url' => $peta_jabatan->previousPageUrl(),
                'to' => $peta_jabatan->lastItem(),
                'total' => $peta_jabatan->total(),
            ];

            $data = [
                "peta_jabatan" => $data,
            ];

            return responseJson('All peta_jabatan', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}

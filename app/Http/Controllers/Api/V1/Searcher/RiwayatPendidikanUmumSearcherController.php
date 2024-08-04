<?php

namespace App\Http\Controllers\Api\V1\Searcher;

use App\Http\Controllers\Controller;
use App\Models\PendidikanUmum;
use Illuminate\Http\Request;

class RiwayatPendidikanUmumSearcherController extends Controller
{
    public function index($id_personil, Request $request)
    {
        try {
            $query = PendidikanUmum::query()->where('personil_id', $id_personil)->with('personil');

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
}

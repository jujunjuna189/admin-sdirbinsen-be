<?php

namespace App\Http\Controllers\Api\V1\Searcher;

use App\Http\Controllers\Controller;
use App\Models\KemampuanBahasa;
use Illuminate\Http\Request;

class RiwayatKemampuanBahasaSearcherController extends Controller
{
    public function index($id_personil, Request $request)
    {
        try {
            $query = KemampuanBahasa::query()->where('personil_id', $id_personil)->with('personil');

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
            $kemampuan_bahasa = $query->paginate($perPage);

            $data = [
                'kemampuan_bahasa' => $kemampuan_bahasa,
            ];

            return responseJson('All Kemampuan Bahasa', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function show($id_personil, $id_bahasa)
    {
        try {
            $kemampuan_bahasa = KemampuanBahasa::where('id',$id_bahasa)->first();
            if (!$kemampuan_bahasa) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'kemampuan_bahasa' => $kemampuan_bahasa
            ];
            return responseJson('Show Kemampuan Bahasa', 200, 'Success',$data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}

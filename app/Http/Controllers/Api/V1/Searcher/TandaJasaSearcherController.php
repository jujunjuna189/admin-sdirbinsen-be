<?php

namespace App\Http\Controllers\Api\V1\Searcher;

use App\Http\Controllers\Controller;
use App\Models\RiwayatTandaJasa;
use Illuminate\Http\Request;

class TandaJasaSearcherController extends Controller
{
    public function index($id_personil, Request $request)
    {
        try {
            $query = RiwayatTandaJasa::query()->where('personil_id', $id_personil)->with('personil');

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
}

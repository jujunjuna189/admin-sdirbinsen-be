<?php

namespace App\Http\Controllers\Api\V1\Searcher;

use App\Http\Controllers\Controller;
use App\Models\PendidikanMiliter;
use Illuminate\Http\Request;

class RiwayatPendidikanMiliterSearcherController extends Controller
{
    public function index($id_personil, Request $request)
    {
        try {
            $query = PendidikanMiliter::query()->where('personil_id', $id_personil)->with('personil');

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
            $pendidikan_militer = $query->paginate($perPage);

            $data = [
                'pendidikan_militer' => $pendidikan_militer,
            ];

            return responseJson('All Pendidikan Militer', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function show($id_personil, $id_pendidikan_militer)
    {
        try {
            $pendidikan_militer = PendidikanMiliter::where('id',$id_pendidikan_militer)->first();
            if (!$pendidikan_militer) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'pendidikan_militer' => $pendidikan_militer
            ];
            return responseJson('Show Pendidikan Militer', 200, 'Success',$data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}

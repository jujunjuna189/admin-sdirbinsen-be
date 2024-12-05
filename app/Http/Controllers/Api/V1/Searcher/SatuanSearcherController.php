<?php

namespace App\Http\Controllers\Api\V1\Searcher;

use App\Http\Controllers\Controller;
use App\Models\Satuan;
use Illuminate\Http\Request;

class SatuanSearcherController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = Satuan::query();

            // Apply search
            $search = $request->input('search');
            if (!empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->where('nama', 'like', "%$search%");
                });
            }

            // Apply filtering by status
            $status = $request->input('status');
            if (!empty($status)) {
                $query->where('status', $status);
            }

            // Apply filtering by created_at
            $created_at = $request->input('created_at');
            if (!empty($created_at)) {
                $query->whereDate('created_at', $created_at);
            }

            $query->orderBy("order_number", "asc");

            // Paginate the results
            $perPage = $request->input('per_page', 100);
            $satuan = $query->paginate($perPage);

            $data = [
                'satuan' => $satuan
            ];

            return responseJson('All satuan', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function show($id)
    {
        try {
            $satuan = Satuan::where('id', $id)->first();
            if (!$satuan) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'satuan' => $satuan
            ];
            return responseJson('Show Satuan', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}

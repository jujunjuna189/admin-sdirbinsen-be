<?php

namespace App\Http\Controllers\Api\V1\Searcher;

use App\Http\Controllers\Controller;
use App\Models\BinsiapsatLapsatLampiran;
use Illuminate\Http\Request;

class BinsiapsatLapsatLampiranSearcherController extends Controller
{
    public function index(Request $request)
    {
        try {
            // $query = Binsat::search($request->Input('search'));
            $query = BinsiapsatLapsatLampiran::query();
            $query->with('satuan');
            // Apply search
            $search = $request->input('search');
            if (!empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->orWhere('nama', 'like', "%$search%");
                });
            }

            // Paginate the results
            $perPage = $request->input('per_page', 50);
            $lapsat_lampiran = $query->paginate($perPage);

            $data = [
                'lapsat_lampiran' => $lapsat_lampiran
            ];

            return responseJson('All lapsat_lampiran', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}

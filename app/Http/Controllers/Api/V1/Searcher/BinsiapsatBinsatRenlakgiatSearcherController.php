<?php

namespace App\Http\Controllers\Api\V1\Searcher;

use App\Http\Controllers\Controller;
use App\Models\BinsiapsatBinsatRenlakgiat;
use Illuminate\Http\Request;

class BinsiapsatBinsatRenlakgiatSearcherController extends Controller
{
    public function index(Request $request)
    {
        try {
            // $query = Binsat::search($request->Input('search'));
            $query = BinsiapsatBinsatRenlakgiat::query();
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
            $binsat_renlakgiat = $query->paginate($perPage);

            $data = [
                'binsat_renlakgiat' => $binsat_renlakgiat
            ];

            return responseJson('All binsat_renlakgiat', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}

<?php

namespace App\Http\Controllers\Api\V1\Searcher;

use App\Http\Controllers\Controller;
use App\Models\BinsiapsatBinsatLaplakgiat;
use Illuminate\Http\Request;

class BinsiapsatBinsatLaplakgiatSearcherController extends Controller
{
    public function index(Request $request)
    {
        try {
            // $query = Binsat::search($request->Input('search'));
            $query = BinsiapsatBinsatLaplakgiat::query();
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
            $binsat_laplakgiat = $query->paginate($perPage);

            $data = [
                'binsat_laplakgiat' => $binsat_laplakgiat
            ];

            return responseJson('All binsat_laplakgiat', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}

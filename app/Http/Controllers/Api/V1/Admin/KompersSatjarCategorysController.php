<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\KompersSatjarCategorys;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KompersSatjarCategorysController extends Controller
{

    public function index(Request $request)
    {
        try {
            $query = KompersSatjarCategorys::query();

            $id = $request->input('id');
            if (!empty($id)) {
                $query->where('id', $id);
            }

            $category = $request->input('category');
            if (!empty($category)) {
                $query->where('category', $category);
            }

            $sub_category = $request->input('sub_category');
            if (!empty($sub_category)) {
                $query->where('sub_category', $sub_category);
            }

            // Apply filtering by created_at
            $created_at = $request->input('created_at');
            if (!empty($created_at)) {
                $query->whereDate('created_at', $created_at);
            }

            // Paginate the results
            $perPage = $request->input('per_page', 100);
            $kompers_satjar_category = $query->paginate($perPage);

            $data = [
                'kompers_satjar_category' => $kompers_satjar_category
            ];

            return responseJson('All kompers satjar kategori', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'category' => 'required',
                'sub_category' => 'required',
                'form' => 'required',
            ], [
                'required' => ":attribute wajib diisi!",
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $kompers_satjar_category = new KompersSatjarCategorys;
            $kompers_satjar_category->category = $request->input('category');
            $kompers_satjar_category->sub_category = $request->input('sub_category');
            $kompers_satjar_category->form = is_array($request->input('form')) ? json_encode($request->input('form') ?? []) : json_encode([]);

            $kompers_satjar_category->save();

            $data = [
                'kompers_satjar_category' => $kompers_satjar_category
            ];

            return responseJson('Add kompers satjar kategori', 201, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}

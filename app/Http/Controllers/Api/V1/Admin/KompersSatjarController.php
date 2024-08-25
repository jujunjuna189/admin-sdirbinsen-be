<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\KompersSatjar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KompersSatjarController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = KompersSatjar::query();

            // Apply search
            $search = $request->input('search');
            if (!empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->where('title', 'like', "%$search%");
                });
            }

            $id = $request->input('id');
            if (!empty($id)) {
                $query->where('id', $id);
            }

            $kompers_satjar_categorys_id = $request->input('kompers_satjar_categorys_id');
            if (!empty($kompers_satjar_categorys_id)) {
                $query->where('kompers_satjar_categorys_id', $kompers_satjar_categorys_id);
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
            $kompers_satjar = $query->paginate($perPage);

            $data = [
                'kompers_satjar' => $kompers_satjar
            ];

            return responseJson('All kompers satjar', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'kompers_satjar_categorys_id' => 'required',
                'category' => 'required',
                'sub_category' => 'required',
                'title' => 'required',
                'form' => 'required',
            ], [
                'required' => ":attribute wajib diisi!",
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $kompers_satjar = new KompersSatjar;
            $kompers_satjar->kompers_satjar_categorys_id = $request->input('kompers_satjar_categorys_id');
            $kompers_satjar->category = $request->input('category');
            $kompers_satjar->sub_category = $request->input('sub_category');
            $kompers_satjar->title = $request->input('title');
            $kompers_satjar->form = is_array($request->input('form')) ? json_encode($request->input('form') ?? []) : json_encode([]);

            $kompers_satjar->save();

            $data = [
                'kompers_satjar' => $kompers_satjar
            ];

            return responseJson('Add kompers satjar', 201, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $validator = Validator::make($request->all(), [
                'kompers_satjar_categorys_id' => 'required',
                'category' => 'required',
                'sub_category' => 'required',
                'title' => 'required',
                'form' => 'required',
            ], [
                'required' => ":attribute wajib diisi!",
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $kompers_satjar = KompersSatjar::find($id);
            $kompers_satjar->kompers_satjar_categorys_id = $request->input('kompers_satjar_categorys_id');
            $kompers_satjar->category = $request->input('category');
            $kompers_satjar->sub_category = $request->input('sub_category');
            $kompers_satjar->title = $request->input('title');
            $kompers_satjar->form = is_array($request->input('form')) ? json_encode($request->input('form') ?? []) : json_encode([]);

            $kompers_satjar->save();

            $data = [
                'kompers_satjar' => $kompers_satjar
            ];

            return responseJson('Update kompers satjar', 201, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}

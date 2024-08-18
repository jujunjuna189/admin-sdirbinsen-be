<?php

namespace App\Http\Controllers\Api\V1\Searcher;

use App\Http\Controllers\Controller;
use App\Models\Material;
use Illuminate\Http\Request;

class MaterialSearcherController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = Material::query();

            // Apply search
            $search = $request->input('search');
            if (!empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->where('nama', 'like', "%$search%")
                        ->orWhere('kategori', 'like', "%$search%");
                });
            }

            // Apply filtering by created_at
            $created_at = $request->input('created_at');
            if (!empty($created_at)) {
                $query->whereDate('created_at', $created_at);
            }

            // Apply filtering by created_at
            $kategori = $request->input('kategori');
            if (!empty($kategori)) {
                $query->whereDate('kategori', $kategori);
            }

            // Paginate the results
            $perPage = $request->input('per_page', 100);
            $material = $query->paginate($perPage);

            $data = [
                'material' => $material
            ];

            return responseJson('All material', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function show($id)
    {
        try {
            $material = Material::where('id', $id)->first();
            if (!$material) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'material' => $material
            ];
            return responseJson('Show material', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function material_recommended(Request $request)
    {
        try {
            $id = $request->query('id');
            $limit = $request->query('limit');
            $material = Material::where('id', $id)->first();
            if (!$material) {
                return responseJson('Data not found', 404, 'Error');
            }

            $selectedTitle = $material->title;
            $selectedCategory = $material->category;
            $selectedDescription = $material->description;
            $selectedCreatedAt = $material->created_at;
            $selectedUpdatedAt = $material->updated_at;

            $materialRecommended = Material::where('id', '!=', $id)
                ->orderByRaw("(
                    (title = '$selectedTitle') +
                    (category = '$selectedCategory') +
                    (description = '$selectedDescription') +
                    (created_at = '$selectedCreatedAt') +
                    (updated_at = '$selectedUpdatedAt')
                ) DESC")
                ->limit($limit)
                ->get();

            $data = [
                'material_recommended' => $materialRecommended
            ];
            return responseJson('Show material', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function getCategoryList()
    {
        // Mengambil daftar posisi (distinct) dari data personil
        $category = Material::distinct('category')->pluck('category');

        $data = [
            'category' => $category
        ];

        // Mengembalikan daftar posisi dalam response JSON
        return responseJson('Show list category', 200, 'Success', $data);
    }
}

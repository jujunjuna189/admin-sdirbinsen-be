<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\Siapsat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class SiapsatController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = Siapsat::query();

            // Apply search
            $search = $request->input('search');
            if (!empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->where('title', 'like', "%$search%");
                });
            }

            // Apply filtering
            $category = $request->input('category');
            if (!empty($category)) {
                $query->where('category', $category);
            }

            // Apply filtering
            $satuan_id = $request->input('satuan_id');
            if (!empty($satuan_id)) {
                $query->where('satuan_id', $satuan_id);
            }

            // Apply filtering
            $title = $request->input('title');
            if (!empty($title)) {
                $query->where('title', $title);
            }

            // Apply filtering
            $created_at = $request->input('created_at');
            if (!empty($created_at)) {
                $query->where('created_at', $created_at);
            }

            // Paginate the results
            $perPage = $request->input('per_page', 100);
            $siapsat = $query->paginate($perPage);

            $data = [
                'siapsat' => $siapsat
            ];

            return responseJson('All siapsat', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function show($id)
    {
        try {
            $siapsat = Siapsat::find($id);
            if (is_null($siapsat)) {
                return responseJson('siapsat not found', 404, 'Error');
            }

            $data = [
                'siapsat' => $siapsat
            ];

            return responseJson('detail siapsat', 200, 'Success', $data);
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
                'satuan_id' => 'required',
                'title' => 'required',
            ], [
                'category.required' => 'Kategori wajib diisi!',
                'satuan_id.required' => 'Satuan wajib diisi!',
                'title.required' => 'Judul wajib diisi!',
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $siapsat = new Siapsat();
            $siapsat->category = $request->input('category');
            $siapsat->satuan_id = $request->input('satuan_id');
            $siapsat->title = $request->input('title');
            $siapsat->description = $request->input('description');
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $newFilename = "siapsat_" . date('Ymdhis') . rand(10000000, 99999999) . "." . $file->getClientOriginalExtension();
                $path = 'siapsat';
                Storage::disk('public')->putFileAs($path, $file, $newFilename);
                $siapsat->image = Storage::disk('public')->url($path . '/' . $newFilename);;
            }

            $siapsat->save();


            $data = [
                'siapsat' => $siapsat
            ];

            return responseJson('Add siapsat', 201, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $validator = Validator::make($request->all(), [
                'category' => 'required',
                'satuan_id' => 'required',
                'title' => 'required',
            ], [
                'category.required' => 'Kategori wajib diisi!',
                'satuan_id.required' => 'Satuan wajib diisi!',
                'title.required' => 'Judul wajib diisi!',
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $siapsat = Siapsat::find($id);
            if (is_null($siapsat)) {
                return responseJson('siapsat not found', 404, 'Error');
            }


            $siapsat->category = $request->input('category');
            $siapsat->satuan_id = $request->input('satuan_id');
            $siapsat->title = $request->input('title');
            $siapsat->description = $request->input('description');
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $newFilename = "siapsat_" . date('Ymdhis') . rand(10000000, 99999999) . "." . $file->getClientOriginalExtension();
                $path = 'siapsat';
                Storage::disk('public')->putFileAs($path, $file, $newFilename);
                $siapsat->image = Storage::disk('public')->url($path . '/' . $newFilename);;
            }

            $siapsat->save();


            $data = [
                'siapsat' => $siapsat
            ];

            return responseJson('update siapsat', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function destroy($id)
    {
        try {

            $siapsat = Siapsat::find($id);
            if (is_null($siapsat)) {
                return responseJson('siapsat not found', 404, 'Error');
            }

            $siapsat->delete();


            $data = [
                'siapsat' => $siapsat
            ];

            return responseJson('delete siapsat', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}

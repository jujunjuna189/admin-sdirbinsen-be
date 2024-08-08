<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\SatuanLambang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SatuanLambangController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = SatuanLambang::query();

            $id = $request->input('id');
            if (!empty($id)) {
                $query->where('id', $id);
            }

            $satuan_id = $request->input('satuan_id');
            if (!empty($satuan_id)) {
                $query->where('satuan_id', $satuan_id);
            }

            // Apply filtering by created_at
            $created_at = $request->input('created_at');
            if (!empty($created_at)) {
                $query->whereDate('created_at', $created_at);
            }

            // Paginate the results
            $perPage = $request->input('per_page', 100);
            $satuan_lambang = $query->paginate($perPage);

            $data = [
                'satuan_lambang' => $satuan_lambang
            ];

            return responseJson('All satuan lambang', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'satuan_id' => 'required',
                'picture' => 'required',
            ], [
                'satuan_id.required' => "Satuan wajib diisi!",
                'picture.required' => "Lambang wajib diisi!",
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $satuan_lambang = SatuanLambang::firstOrNew(['satuan_id' => $request->satuan_id]);
            $satuan_lambang->satuan_id = $request->input('satuan_id');
            $satuan_lambang->deskripsi = $request->input('deskripsi');

            if ($request->hasFile('picture')) {
                $file = $request->file('picture');
                $newFilename = "picture" . date('Ymdhis') . rand(10000000, 99999999) . "." . $file->getClientOriginalExtension();
                $path = 'satuan/satuan_lambang';
                Storage::disk('public')->putFileAs($path, $file, $newFilename);
                $satuan_lambang->picture = Storage::disk('public')->url($path . '/' . $newFilename);;
            }

            $satuan_lambang->save();

            $data = [
                'satuan_lambang' => $satuan_lambang
            ];

            return responseJson('Add satuan lambang', 201, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $satuan_lambang = SatuanLambang::find($id);
            if (!$satuan_lambang) {
                return responseJson('Data not found', 404, 'Error');
            }
            // Validate the updated data
            $validator = Validator::make($request->all(), [
                'satuan_id' => 'required',
            ], [
                'satuan_id.required' => "Satuan wajib diisi!",
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $satuan_lambang->satuan_id = $request->input('satuan_id');
            $satuan_lambang->deskripsi = $request->input('deskripsi');

            if ($request->hasFile('picture')) {
                $file = $request->file('picture');
                $newFilename = "picture" . date('Ymdhis') . rand(10000000, 99999999) . "." . $file->getClientOriginalExtension();
                $path = 'satuan/satuan_lambang';
                Storage::disk('public')->putFileAs($path, $file, $newFilename);
                $satuan_lambang->picture = Storage::disk('public')->url($path . '/' . $newFilename);;
            }

            $satuan_lambang->save();

            $data = [
                'satuan_lambang' => $satuan_lambang
            ];

            return responseJson('Update satuan lambang', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function destroy($id)
    {
        try {
            $satuan_lambang = SatuanLambang::find($id);
            if (!$satuan_lambang) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'satuan_lambang' => $satuan_lambang
            ];
            $satuan_lambang->delete();
            return responseJson('Delete satuan lambang', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}

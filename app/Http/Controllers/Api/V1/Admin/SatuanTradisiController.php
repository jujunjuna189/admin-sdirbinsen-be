<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\SatuanTradisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SatuanTradisiController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = SatuanTradisi::query();

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
            $satuan_tradisi = $query->paginate($perPage);

            $data = [
                'satuan_tradisi' => $satuan_tradisi
            ];

            return responseJson('All satuan tradisi', 200, 'Success', $data);
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
                'video' => 'required',
            ], [
                'satuan_id.required' => "Satuan wajib diisi!",
                'video.required' => "Tradisi wajib diisi!",
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $satuan_tradisi = new SatuanTradisi;
            $satuan_tradisi->satuan_id = $request->input('satuan_id');
            $satuan_tradisi->deskripsi = $request->input('deskripsi');

            if ($request->hasFile('video')) {
                $file = $request->file('video');
                $newFilename = "video" . date('Ymdhis') . rand(10000000, 99999999) . "." . $file->getClientOriginalExtension();
                $path = 'satuan/satuan_tradisi';
                Storage::disk('public')->putFileAs($path, $file, $newFilename);
                $satuan_tradisi->video = Storage::disk('public')->url($path . '/' . $newFilename);;
            }

            $satuan_tradisi->save();

            $data = [
                'satuan_tradisi' => $satuan_tradisi
            ];

            return responseJson('Add satuan tradisi', 201, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $satuan_tradisi = SatuanTradisi::find($id);
            if (!$satuan_tradisi) {
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

            $satuan_tradisi->satuan_id = $request->input('satuan_id');
            $satuan_tradisi->deskripsi = $request->input('deskripsi');

            if ($request->hasFile('video')) {
                $file = $request->file('video');
                $newFilename = "video" . date('Ymdhis') . rand(10000000, 99999999) . "." . $file->getClientOriginalExtension();
                $path = 'satuan/satuan_tradisi';
                Storage::disk('public')->putFileAs($path, $file, $newFilename);
                $satuan_tradisi->video = Storage::disk('public')->url($path . '/' . $newFilename);;
            }

            $satuan_tradisi->save();

            $data = [
                'satuan_tradisi' => $satuan_tradisi
            ];

            return responseJson('Update satuan tradisi', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function destroy($id)
    {
        try {
            $satuan_tradisi = SatuanTradisi::find($id);
            if (!$satuan_tradisi) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'satuan_tradisi' => $satuan_tradisi
            ];
            $satuan_tradisi->delete();
            return responseJson('Delete satuan tradisi', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}

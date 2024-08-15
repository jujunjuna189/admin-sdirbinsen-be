<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\BinsiapsatLapsatInduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BinsiapsatLapsatIndukController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = BinsiapsatLapsatInduk::query();

            // Apply search
            $search = $request->input('search');
            if (!empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->where('nama', 'like', "%$search%");
                });
            }

            // Paginate the results
            $perPage = $request->input('per_page', 100);
            $binsiapsat_lapsat_induk = $query->paginate($perPage);

            $data = [
                'binsiapsat_lapsat_induk' => $binsiapsat_lapsat_induk
            ];

            return responseJson('All binsiapsat lapsat induk', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function show($id)
    {
        try {
            $binsiapsat_lapsat_induk = BinsiapsatLapsatInduk::with('satuan')->where('id', $id)->first();
            if (!$binsiapsat_lapsat_induk) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'binsiapsat_lapsat_induk' => $binsiapsat_lapsat_induk
            ];
            return responseJson('Show binsiapsat lapsat induk', 200, 'Success', $data);
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
                'nama' => 'required',
                'file' => 'required',
            ], [
                'satuan_id.required' => "Satuan wajib diisi!",
                'nama.required' => "Nama wajib diisi!",
                'file.required' => 'File wajib diisi',
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $binsiapsat_lapsat_induk = new BinsiapsatLapsatInduk();

            $binsiapsat_lapsat_induk->satuan_id = $request->satuan_id;
            $binsiapsat_lapsat_induk->nama = $request->nama;

            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $newFilename = "file_" . date('Ymdhis') . rand(10000000, 99999999) . "." . $file->getClientOriginalExtension();
                $path = 'binsiapsat/lapsat/induk';
                Storage::disk('public')->putFileAs($path, $file, $newFilename);
                $binsiapsat_lapsat_induk->file = Storage::disk('public')->url($path . '/' . $newFilename);
            }

            $binsiapsat_lapsat_induk->save();

            $data = [
                'binsiapsat_lapsat_induk' => $binsiapsat_lapsat_induk
            ];

            return responseJson('Add master binsiapsat lapsat induk', 201, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $binsiapsat_lapsat_induk = BinsiapsatLapsatInduk::find($id);
            if (!$binsiapsat_lapsat_induk) {
                return responseJson('Data not found', 404, 'Error');
            }
            $validator = Validator::make($request->all(), [
                'satuan_id' => 'required',
                'nama' => 'required',
                'file' => 'required',
            ], [
                'satuan_id.required' => "Satuan wajib diisi!",
                'nama.required' => "Nama wajib diisi!",
                'file.required' => 'File wajib diisi',
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $binsiapsat_lapsat_induk->satuan_id = $request->satuan_id;
            $binsiapsat_lapsat_induk->nama = $request->nama;

            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $newFilename = "file_" . date('Ymdhis') . rand(10000000, 99999999) . "." . $file->getClientOriginalExtension();
                $path = 'binsiapsat/lapsat/induk';
                Storage::disk('public')->putFileAs($path, $file, $newFilename);
                $binsiapsat_lapsat_induk->file = Storage::disk('public')->url($path . '/' . $newFilename);
            }

            $binsiapsat_lapsat_induk->save();

            $data = [
                'binsiapsat_lapsat_induk' => $binsiapsat_lapsat_induk
            ];

            return responseJson('Update master binsiapsat lapsat induk', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function destroy($id)
    {
        try {
            $binsiapsat_lapsat_induk = BinsiapsatLapsatInduk::find($id);
            if (!$binsiapsat_lapsat_induk) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'binsiapsat_lapsat_induk' => $binsiapsat_lapsat_induk
            ];
            $binsiapsat_lapsat_induk->delete();
            return responseJson('Delete master binsiapsat lapsat induk', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}

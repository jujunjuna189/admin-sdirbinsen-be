<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\BinsiapsatBinsatLaplakgiat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BinsiapsatBinsatLaplakgiatController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = BinsiapsatBinsatLaplakgiat::query();

            // Apply search
            $search = $request->input('search');
            if (!empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->where('nama', 'like', "%$search%");
                });
            }

            // Paginate the results
            $perPage = $request->input('per_page', 100);
            $binsiapsat_binsat_laplakgiat = $query->paginate($perPage);

            $data = [
                'binsiapsat_binsat_laplakgiat' => $binsiapsat_binsat_laplakgiat
            ];

            return responseJson('All binsiapsat binsat laplakgiat', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function show($id)
    {
        try {
            $binsiapsat_binsat_laplakgiat = BinsiapsatBinsatLaplakgiat::with('satuan')->where('id', $id)->first();
            if (!$binsiapsat_binsat_laplakgiat) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'binsiapsat_binsat_laplakgiat' => $binsiapsat_binsat_laplakgiat
            ];
            return responseJson('Show binsiapsat binsat laplakgiat', 200, 'Success', $data);
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

            $binsiapsat_binsat_laplakgiat = new BinsiapsatBinsatLaplakgiat();

            $binsiapsat_binsat_laplakgiat->satuan_id = $request->satuan_id;
            $binsiapsat_binsat_laplakgiat->nama = $request->nama;

            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $newFilename = "file_" . date('Ymdhis') . rand(10000000, 99999999) . "." . $file->getClientOriginalExtension();
                $path = 'binsiapsat/binsat/laplakgiat';
                Storage::disk('public')->putFileAs($path, $file, $newFilename);
                $binsiapsat_binsat_laplakgiat->file = Storage::disk('public')->url($path . '/' . $newFilename);
            }

            $binsiapsat_binsat_laplakgiat->save();

            $data = [
                'binsiapsat_binsat_laplakgiat' => $binsiapsat_binsat_laplakgiat
            ];

            return responseJson('Add master binsiapsat binsat laplakgiat', 201, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $binsiapsat_binsat_laplakgiat = BinsiapsatBinsatLaplakgiat::find($id);
            if (!$binsiapsat_binsat_laplakgiat) {
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

            $binsiapsat_binsat_laplakgiat->satuan_id = $request->satuan_id;
            $binsiapsat_binsat_laplakgiat->nama = $request->nama;

            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $newFilename = "file_" . date('Ymdhis') . rand(10000000, 99999999) . "." . $file->getClientOriginalExtension();
                $path = 'binsiapsat/binsat/laplakgiat';
                Storage::disk('public')->putFileAs($path, $file, $newFilename);
                $binsiapsat_binsat_laplakgiat->file = Storage::disk('public')->url($path . '/' . $newFilename);
            }

            $binsiapsat_binsat_laplakgiat->save();

            $data = [
                'binsiapsat_binsat_laplakgiat' => $binsiapsat_binsat_laplakgiat
            ];

            return responseJson('Update master binsiapsat binsat laplakgiat', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function destroy($id)
    {
        try {
            $binsiapsat_binsat_laplakgiat = BinsiapsatBinsatLaplakgiat::find($id);
            if (!$binsiapsat_binsat_laplakgiat) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'binsiapsat_binsat_laplakgiat' => $binsiapsat_binsat_laplakgiat
            ];
            $binsiapsat_binsat_laplakgiat->delete();
            return responseJson('Delete master binsiapsat binsat laplakgiat', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}

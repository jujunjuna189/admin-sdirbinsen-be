<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\SatuanPrestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SatuanPrestasiController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = SatuanPrestasi::query();

            // Apply search
            $search = $request->input('search');
            if (!empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->where('title', 'like', "%$search%");
                });
            }

            // Apply filtering by satuan_id
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
            $satuan = $query->paginate($perPage);

            $data = [
                'satuan' => $satuan
            ];

            return responseJson('All satuan', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function show($id)
    {
        try {
            $satuan = SatuanPrestasi::where('id', $id)->first();
            if (!$satuan) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'satuan' => $satuan
            ];
            return responseJson('Show Satuan prestasi', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'satuan_id' => 'required|exists:satuan,id',
                'title' => 'required',
                'gambar' => 'required|file:max:5120',
                'deskripsi' => 'nullable'
            ], [
                'satuan_id.required' => "Satuan id harus diisi",
                'title.required' => "title wajib diisi!",
                'gambar.required' => "Gambar wajib diupload!",
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $satuan = new SatuanPrestasi();
            $satuan->satuan_id = $request->input('satuan_id');
            $satuan->title = $request->input('title');
            $satuan->tahun = $request->input('tahun');
            $satuan->deskripsi = $request->input('deskripsi');
            $satuan->nama = $request->input('nama');
            $satuan->pangkat = $request->input('pangkat');

            if ($request->hasFile('gambar')) {
                $file = $request->file('gambar');
                $newFilename = "gambar_" . date('Ymdhis') . rand(10000000, 99999999) . "." . $file->getClientOriginalExtension();
                $path = 'satuan_prestasi/gambar';
                Storage::disk('public')->putFileAs($path, $file, $newFilename);
                $satuan->gambar = Storage::disk('public')->url($path . '/' . $newFilename);;
            }

            $satuan->save();

            $data = [
                'satuan' => $satuan
            ];

            return responseJson('Add satuan prestasi', 201, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $satuan = SatuanPrestasi::find($id);
            if (!$satuan) {
                return responseJson('Data not found', 404, 'Error');
            }
            // Validate the updated data
            $validator = Validator::make($request->all(), [
                'satuan_id' => 'required|exists:satuan,id',
                'title' => 'required',
                'gambar' => 'nullable|file:max:5120',
                'deskripsi' => 'nullable'
            ], [
                'satuan_id.required' => "Satuan id harus diisi",
                'title.required' => "title wajib diisi!",
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $satuan->satuan_id = $request->input('satuan_id');
            $satuan->title = $request->input('title');
            $satuan->tahun = $request->input('tahun');
            $satuan->deskripsi = $request->input('deskripsi');
            $satuan->nama = $request->input('nama');
            $satuan->pangkat = $request->input('pangkat');

            if ($request->hasFile('gambar')) {
                $file = $request->file('gambar');
                $newFilename = "gambar_" . date('Ymdhis') . rand(10000000, 99999999) . "." . $file->getClientOriginalExtension();
                $path = 'satuan_jabatan_dansat/gambar';
                Storage::disk('public')->putFileAs($path, $file, $newFilename);
                $satuan->gambar = Storage::disk('public')->url($path . '/' . $newFilename);;
            }

            $satuan->save();

            $data = [
                'satuan' => $satuan
            ];

            return responseJson('Update satuan prestasi', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function destroy($id)
    {
        try {
            $satuan = SatuanPrestasi::find($id);
            if (!$satuan) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'satuan' => $satuan
            ];
            $satuan->delete();
            return responseJson('Delete satuan prestasi', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}

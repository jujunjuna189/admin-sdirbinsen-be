<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Exports\MaterialExport;
use App\Http\Controllers\Controller;
use App\Imports\MaterialImport;
use App\Models\Material;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class MaterialController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = Material::query()->with('satuan');

            // Apply search
            $search = $request->input('search');
            if (!empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->where('nama', 'like', "%$search%")
                    ->orWhere('kondisi', 'like', "%$search%"); // Assuming 'category' is a column in the Material table
                });
            }

            // Apply filtering by created_at
            $created_at = $request->input('created_at');
            if (!empty($created_at)) {
                $query->whereDate('created_at', $created_at);
            }

            // Apply filtering
            $kondisi = $request->input('kondisi');
            if (!empty($kondisi)) {
                $query->where('kondisi', $kondisi);
            }

            // Apply filtering
            $kategori = $request->input('kategori');
            if (!empty($kategori)) {
                $query->where('kategori', $kategori);
            }

            $no_reg = $request->input('no_reg');
            if (!empty($no_reg)) {
                $query->where('no_reg', $no_reg);
            }

            // Apply filtering by satuan_id (assuming 'satuan_id' is a column in the Material table)
            $satuan_id = $request->input('satuan_id') ;
            if (!empty($satuan_id)) {
                $query->where('satuan_id', $satuan_id);
            }

            // Paginate the results
            $perPage = $request->input('per_page', 100);
            $materials = $query->paginate($perPage);

            $data = [
                'materials' => $materials,
            ];

            return responseJson('All materials', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'satuan_id' => 'required|numeric',
                // 'nama' => 'required',
                'kondisi' => 'required',
                'jenis' => 'required',
                'status' => 'required',
                'kategori' => 'required',
                'no_reg' => 'required',
                'keterangan' => 'required',
            ], [
                'satuan_id.required' => 'Satuan wajib diisi!',
                'satuan_id.numeric' => 'Format Satuan salah!',
                // 'nama.required' => 'Nama material wajib diisi!',
                'kondisi.required' => 'Kondisi wajib diisi!',
                'jenis.required' => 'Jenis wajib diisi!',
                'status.required' => 'Status wajib diisi!',
                'kategori.required' => 'Kategori wajib diisi!',
                'no_reg.required' => 'No reg wajib diisi!',
                'keterangan.required' => 'Keterangan wajib diisi!',
            ]);

            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $material = new Material();
            $material->satuan_id = $request->input('satuan_id');
            // $material->nama = $request->input('nama');
            $material->kondisi = $request->input('kondisi');
            $material->jenis = $request->input('jenis');
            $material->kategori = $request->input('kategori');
            $material->status = $request->input('status');
            $material->no_reg = $request->input('no_reg');
            $material->file = $request->input('file');
            $material->keterangan = $request->input('keterangan');

            $material->save();

            $data = [
                'material'=> [
                    'id' => $material->id,
                    // 'nama' => $material->nama,
                    'kondisi' => $material->kondisi,
                    'status' => $material->status,
                ]
            ];

            return responseJson('Add e material', 201, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function show($id)
    {
        try {
            $material = Material::with('satuan')->find($id);
            if (!$material) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'material' => $material
            ];
            return responseJson('Show material', 200, 'Success',$data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $material = Material::find($id);
            if (!$material) {
                return responseJson('Data not found', 404, 'Error');
            }

            // Validate the updated data
            $validator = Validator::make($request->all(), [
                'satuan_id' => 'required|numeric',
                // 'nama' => 'required',
                'kondisi' => 'required',
                'jenis' => 'required',
                'status' => 'required',
                'kategori' => 'required',
                'no_reg' => 'required',
                'keterangan' => 'required',
            ], [
                'satuan_id.required' => 'Satuan wajib diisi!',
                'satuan_id.numeric' => 'Format Satuan salah!',
                // 'nama.required' => 'Nama material wajib diisi!',
                'kondisi.required' => 'Kondisi wajib diisi!',
                'jenis.required' => 'Jenis wajib diisi!',
                'status.required' => 'Status wajib diisi!',
                'kategori.required' => 'Kategori wajib diisi!',
                'no_reg.required' => 'No reg wajib diisi!',
                'keterangan.required' => 'Keterangan wajib diisi!',
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            // Update the material data
            $material->satuan_id = $request->input('satuan_id');
            // $material->nama = $request->input('nama');
            $material->kondisi = $request->input('kondisi');
            $material->jenis = $request->input('jenis');
            $material->kategori = $request->input('kategori');
            $material->status = $request->input('status');
            $material->no_reg = $request->input('no_reg');
            $material->file = $request->input('file');
            $material->keterangan = $request->input('keterangan');

            $material->save();

            $data = [
                'material'=>$material
            ];

            return responseJson('Update material', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function destroy($id)
    {
        try {
            $material = Material::find($id);
            if (!$material) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'material'=>$material
            ];
            $material->delete();
            return responseJson('Delete material', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function importExcel(Request $request)
    {
        // Validate the updated data
        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:xls,xlsx',
        ]);
        if ($validator->fails()) {
            return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
        }

        $file = $request->file('file');

        try {
            Excel::import(new MaterialImport, $file);

            return response()->json([
                'message' => 'Data imported successfully',
                'status' => 'Success',
                'list_data' => []
            ], 200);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function exportExcel(Request $request)
    {
        // Mendapatkan data Personil
        $materials = Material::all();

        // Menambahkan kolom 'Jumlah Tahun' dan 'Jumlah Sisa Bulan'
        $materials = $materials->map(function ($materials) {
            $startAt = new DateTime($materials->startAt);
            $materials->newStartAt = $startAt->format('d-M-Y H:i:s');
            return $materials;
        });
        $materials = $materials->map(function ($material) {
            unset($material->created_at);
            unset($material->updated_at);
            return $material;
        });

        // Mengekspor data ke dalam format Excel
        return Excel::download(new MaterialExport($materials), 'material.xlsx');
    }

    public function getCategoryList()
    {
        // Mengambil daftar posisi (distinct) dari data personil
        $category = Material::distinct('kategori')->pluck('kategori');

        $data = [
            'category'=>$category
        ];

        // Mengembalikan daftar posisi dalam response JSON
        return responseJson('Show list category', 200, 'Success', $data);
    }
}

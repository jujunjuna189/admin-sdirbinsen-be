<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\PetaJabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PetaJabatanController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = PetaJabatan::query();
            $query->with('satuan', 'personil');

            // Apply search
            $search = $request->input('search');
            if (!empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->where('jabatan', 'like', "%$search%");
                });
            }

            $id = $request->input('id');
            if (!empty($id)) {
                $query->where('id', $id);
            }

            $satuan_id = $request->input('satuan_id');
            if (!empty($satuan_id)) {
                $query->where('satuan_id', $satuan_id);
            }

            $personil_id = $request->input('personil_id');
            if (!empty($personil_id)) {
                if (ctype_digit($personil_id)) {
                    $query->where('personil_id', $personil_id);
                } else if (ctype_alpha($personil_id)) {
                    if ($personil_id == 'empty') {
                        $query->whereNull('personil_id');
                    } else {
                        $query->whereNotNull('personil_id');
                    }
                }
            }

            // Apply filtering by created_at
            $created_at = $request->input('created_at');
            if (!empty($created_at)) {
                $query->whereDate('created_at', $created_at);
            }

            $query->orderBy('order_number', 'desc');

            // Paginate the results
            $perPage = $request->input('per_page', 100);
            $peta_jabatan = $query->paginate($perPage);

            $resultPermit = collect($peta_jabatan->items())->groupBy('golongan');

            $data = [
                'current_page' => $peta_jabatan->currentPage(),
                'data' => $resultPermit,
                'first_page_url' => $peta_jabatan->url(1),
                'from' => $peta_jabatan->firstItem(),
                'last_page' => $peta_jabatan->lastPage(),
                'last_page_url' => $peta_jabatan->url($peta_jabatan->lastPage()),
                'links' => null,
                'next_page_url' => $peta_jabatan->nextPageUrl(),
                'path' => $peta_jabatan->path(),
                'per_page' => $peta_jabatan->perPage(),
                'prev_page_url' => $peta_jabatan->previousPageUrl(),
                'to' => $peta_jabatan->lastItem(),
                'total' => $peta_jabatan->total(),
            ];

            $data = [
                "peta_jabatan" => $data,
            ];

            return responseJson('All peta_jabatan', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function show($id)
    {
        try {
            // $peta_jabatan = peta_jabatan::where('id', $id)->first();
            $peta_jabatan = PetaJabatan::notDeleted()
                ->with(
                    'satuan',
                    'personil',
                )
                ->where('id', $id)
                ->first();

            if (!$peta_jabatan) {
                return responseJson('Data not found', 404, 'Error');
            }

            $data = [
                'peta_jabatan' => $peta_jabatan,
            ];
            return responseJson('Show peta jabatan', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function summary(Request $request)
    {
        try {
            $query = PetaJabatan::query();
            $satuan_id = $request->input('satuan_id');
            if (!empty($satuan_id)) {
                $query->where('satuan_id', $satuan_id);
            }

            // Query untuk menghitung filled dan empty
            $data = $query->selectRaw("
                SUM(CASE WHEN personil_id IS NOT NULL THEN 1 ELSE 0 END) as filled,
                SUM(CASE WHEN personil_id IS NULL THEN 1 ELSE 0 END) as empty
            ")->first();

            // Konversi hasil ke array
            $result = [
                'filled' => $data->filled,
                'empty' => $data->empty,
            ];

            $data = [
                "peta_jabatan" => $result,
            ];

            return responseJson('All peta_jabatan', 200, 'Success', $data);
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
                'jabatan' => 'required',
            ], [
                'satuan_id.required' => "Satuan wajib diisi!",
                'jabatan.required' => "Nama jabatan wajib diisi!",
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $peta_jabatan = new PetaJabatan;
            $peta_jabatan->satuan_id = $request->input('satuan_id');
            $peta_jabatan->personil_id = $request->input('personil_id');
            $peta_jabatan->kategori = $request->input('kategori');
            $peta_jabatan->golongan = $request->input('golongan');
            $peta_jabatan->jabatan = $request->input('jabatan');
            $peta_jabatan->order_number = $request->input('order_number');
            $peta_jabatan->tmt = $request->input('tmt');

            $peta_jabatan->save();

            $data = [
                'peta_jabatan' => $peta_jabatan
            ];

            return responseJson('Add peta_jabatan', 201, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $peta_jabatan = PetaJabatan::find($id);
            if (!$peta_jabatan) {
                return responseJson('Data not found', 404, 'Error');
            }
            // Validate the updated data
            $validator = Validator::make($request->all(), [
                'satuan_id' => 'required',
                'jabatan' => 'required',
            ], [
                'satuan_id.required' => "Satuan wajib diisi!",
                'jabatan.required' => "Nama jabatan wajib diisi!",
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $peta_jabatan->satuan_id = $request->input('satuan_id');
            $peta_jabatan->personil_id = $request->input('personil_id');
            $peta_jabatan->kategori = $request->input('kategori');
            $peta_jabatan->golongan = $request->input('golongan');
            $peta_jabatan->jabatan = $request->input('jabatan');
            $peta_jabatan->order_number = $request->input('order_number');
            $peta_jabatan->tmt = $request->input('tmt');

            $peta_jabatan->save();

            $data = [
                'peta_jabatan' => $peta_jabatan
            ];

            return responseJson('Update peta_jabatan', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function destroy($id)
    {
        try {
            $peta_jabatan = PetaJabatan::find($id);
            if (!$peta_jabatan) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'peta_jabatan' => $peta_jabatan
            ];
            $peta_jabatan->delete();
            return responseJson('Delete Peta Jabatan', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}

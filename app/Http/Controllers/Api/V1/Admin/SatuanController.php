<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\Satuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SatuanController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = Satuan::query();

            // Apply search
            $search = $request->input('search');
            if (!empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->where('nama', 'like', "%$search%");
                });
            }

            // Apply filtering by status
            $status = $request->input('status');
            if (!empty($status)) {
                $query->where('status', $status);
            }

            $id = $request->input('id');
            if (!empty($id)) {
                $query->where('id', $id);
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
            $satuan = Satuan::where('id', $id)->first();
            if (!$satuan) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'satuan' => $satuan
            ];
            return responseJson('Show Satuan', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'nama' => 'required',
                'logo' => 'required|image|mimes:jpeg,png,jpg,webp|max:5120',
                'sejarah' => 'required',
                'hymne' => 'required',
                'mars' => 'required',
                'alamat' => 'required',
                'latitude' => 'required',
                'longitude' => 'required',
                'status' => 'required',
            ], [
                'nama.required' => "Nama wajib diisi!",
                'logo.required' => "Logo wajib diupload!",
                'logo.image' => "File yang anda upload bukan gambar!",
                'logo.mimes' => "Format file harus jpeg/png/jpg/webp!",
                'logo.max' => "Ukuran maksimum logo adalah 5MB!",
                'sejarah.required' => "Sejarah wajib diisi!",
                'hymne.required' => "Hymne wajib diisi!",
                'mars.required' => "Mars wajib diisi!",
                'alamat.required' => "Alamat wajib diisi!",
                'latitude.required' => "Latitude wajib diisi!",
                'longitude.required' => "Longitude wajib diisi!",
                'status.required' => "Status wajib diisi!"
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $satuan = new Satuan;
            $satuan->nama = $request->input('nama');

            $satuan->sejarah = $request->input('sejarah');
            $satuan->sejarah_url = $request->input('sejarah_url');
            $satuan->hymne = $request->input('hymne');
            $satuan->hymne_url = $request->input('hymne_url');
            $satuan->hymne_lagu = $request->input('hymne_lagu');
            $satuan->mars = $request->input('mars');
            $satuan->mars_url = $request->input('mars_url');
            $satuan->mars_lagu = $request->input('mars_lagu');
            $satuan->struktur_organisasi = $request->input('struktur_organisasi');
            $satuan->struktur_organisasi_url = $request->input('struktur_organisasi_url');
            $satuan->alamat = $request->input('alamat');
            $satuan->latitude = $request->input('latitude');
            $satuan->longitude = $request->input('longitude');
            $satuan->status = $request->input('status');

            if ($request->hasFile('logo')) {
                $file = $request->file('logo');
                $newFilename = "logo_" . date('Ymdhis') . rand(10000000, 99999999) . "." . $file->getClientOriginalExtension();
                $path = 'satuan/logo';
                Storage::disk('public')->putFileAs($path, $file, $newFilename);
                $satuan->logo = Storage::disk('public')->url($path . '/' . $newFilename);;
            }

            if ($request->hasFile('mars_lagu')) {
                $file = $request->file('mars_lagu');
                $newFilename = "mars_lagu_" . date('Ymdhis') . rand(10000000, 99999999) . "." . $file->getClientOriginalExtension();
                $path = 'satuan/mars_lagu';
                Storage::disk('public')->putFileAs($path, $file, $newFilename);
                $satuan->mars_lagu = Storage::disk('public')->url($path . '/' . $newFilename);;
            }

            if ($request->hasFile('hymne_lagu')) {
                $file = $request->file('hymne_lagu');
                $newFilename = "hymne_lagu_" . date('Ymdhis') . rand(10000000, 99999999) . "." . $file->getClientOriginalExtension();
                $path = 'satuan/hymne_lagu';
                Storage::disk('public')->putFileAs($path, $file, $newFilename);
                $satuan->hymne_lagu = Storage::disk('public')->url($path . '/' . $newFilename);;
            }

            $satuan->save();

            $data = [
                'satuan' => $satuan
            ];

            return responseJson('Add satuan', 201, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $satuan = Satuan::find($id);
            if (!$satuan) {
                return responseJson('Data not found', 404, 'Error');
            }
            // Validate the updated data
            $validator = Validator::make($request->all(), [
                'nama' => 'required',
                'logo' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
                'sejarah' => 'required',
                'hymne' => 'required',
                'mars' => 'required',
                'alamat' => 'required',
                'latitude' => 'required',
                'longitude' => 'required',
                'status' => 'required',
            ], [
                'nama.required' => "Nama wajib diisi!",
                'logo.required' => "Logo wajib diupload!",
                'logo.image' => "File yang anda upload bukan gambar!",
                'logo.mimes' => "Format file harus jpeg/png/jpg/webp!",
                'logo.max' => "Ukuran maksimum logo adalah 5MB!",
                'sejarah.required' => "Sejarah wajib diisi!",
                'hymne.required' => "Hymne wajib diisi!",
                'mars.required' => "Mars wajib diisi!",
                'alamat.required' => "Alamat wajib diisi!",
                'latitude.required' => "Latitude wajib diisi!",
                'longitude.required' => "Longitude wajib diisi!",
                'status.required' => "Status wajib diisi!"
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $satuan->nama = $request->input('nama');
            $satuan->sejarah_url = $request->input('sejarah_url');
            $satuan->hymne = $request->input('hymne');
            $satuan->hymne_url = $request->input('hymne_url');
            $satuan->mars = $request->input('mars');
            $satuan->mars_url = $request->input('mars_url');
            $satuan->struktur_organisasi = $request->input('struktur_organisasi');
            $satuan->struktur_organisasi_url = $request->input('struktur_organisasi_url');
            $satuan->alamat = $request->input('alamat');
            $satuan->latitude = $request->input('latitude');
            $satuan->longitude = $request->input('longitude');
            $satuan->status = $request->input('status');

            if ($request->hasFile('logo')) {
                $file = $request->file('logo');
                $newFilename = "logo_" . date('Ymdhis') . rand(10000000, 99999999) . "." . $file->getClientOriginalExtension();
                $path = 'satuan/logo';
                Storage::disk('public')->putFileAs($path, $file, $newFilename);
                $satuan->logo = Storage::disk('public')->url($path . '/' . $newFilename);;
            }

            if ($request->input('sejarah')) {
                $sejarah = '';
                foreach ($request->sejarah as $index => $val) {
                    if (isset($request->sejarah[$index]['gambar'])) {
                        $file = $request->sejarah[$index]['gambar'];
                        $newFilename = "sejarah_image_$index" . '_' . date('Ymdhis') . rand(10000000, 99999999) . "." . $file->getClientOriginalExtension();
                        $path = "satuan/sejarah/$satuan->id";
                        Storage::disk('public')->deleteDirectory($path);
                        Storage::disk('public')->putFileAs($path, $file, $newFilename);

                        // susun text
                        $src = Storage::disk('public')->url($path . '/' . $newFilename);
                        $sejarah .= str_replace("--gambar_$index--", "<img src='$src' alt='sejarah_image' style='" . $val['style'] . "' />", $val['text']);
                    } else {
                        $sejarah .= str_replace("--gambar_$index--", "", $val['text']);
                    }
                }
                $satuan->sejarah = $sejarah;
            }

            if ($request->hasFile('mars_lagu')) {
                $file = $request->file('mars_lagu');
                $newFilename = "mars_lagu_" . date('Ymdhis') . rand(10000000, 99999999) . "." . $file->getClientOriginalExtension();
                $path = 'satuan/mars_lagu';
                Storage::disk('public')->putFileAs($path, $file, $newFilename);
                $satuan->mars_lagu = Storage::disk('public')->url($path . '/' . $newFilename);
            }

            if ($request->hasFile('hymne_lagu')) {
                $file = $request->file('hymne_lagu');
                $newFilename = "hymne_lagu_" . date('Ymdhis') . rand(10000000, 99999999) . "." . $file->getClientOriginalExtension();
                $path = 'satuan/hymne_lagu';
                Storage::disk('public')->putFileAs($path, $file, $newFilename);
                $satuan->hymne_lagu = Storage::disk('public')->url($path . '/' . $newFilename);
            }

            $satuan->save();

            $data = [
                'satuan' => $satuan
            ];

            return responseJson('Update satuan', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function destroy($id)
    {
        try {
            $satuan = Satuan::find($id);
            if (!$satuan) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'satuan' => $satuan
            ];
            $satuan->delete();
            return responseJson('Delete satuan', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}

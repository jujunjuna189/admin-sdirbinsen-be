<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\LearningResponsibility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class LearningResponsibilityController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = LearningResponsibility::query()->with('satuan');

            // Apply search
            $search = $request->input('search');
            if (!empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->where('title', 'like', "%$search%");
                });
            }

            $id = $request->input('id');
            if (!empty($id)) {
                $query->where('id', $id);
            }

            $category = $request->input('category');
            if (!empty($category)) {
                $query->where('category', $category);
            }

            // Apply filtering by created_at
            $created_at = $request->input('created_at');
            if (!empty($created_at)) {
                $query->whereDate('created_at', $created_at);
            }

            // Paginate the results
            $perPage = $request->input('per_page', 100);
            $learning = $query->paginate($perPage);

            $data = [
                'learning' => $learning
            ];

            return responseJson('All learning', 200, 'Success', $data);
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
                'title' => 'required',
            ], [
                'title.required' => "Judul wajib diisi!",
                'category.required' => "Kategori wajib diisi!",
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $learning = new LearningResponsibility();
            $learning->satuan_id = $request->input('satuan_id');
            $learning->category = $request->input('category');
            $learning->title = $request->input('title');
            $learning->description = $request->input('description');

            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $newFilename = "file" . date('Ymdhis') . rand(10000000, 99999999) . "." . $file->getClientOriginalExtension();
                $path = 'learning/responsibility';
                Storage::disk('public')->putFileAs($path, $file, $newFilename);
                $learning->file = Storage::disk('public')->url($path . '/' . $newFilename);;
            }

            $learning->save();

            $data = [
                'learning' => $learning
            ];

            return responseJson('Add learning', 201, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $learning = LearningResponsibility::find($id);
            if (!$learning) {
                return responseJson('Data not found', 404, 'Error');
            }
            // Validate the updated data
            $validator = Validator::make($request->all(), [
                'title' => 'required',
            ], [
                'title.required' => "Judul learning wajib diisi!",
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $learning->title = $request->input('title');

            $learning->save();

            $data = [
                'learning' => $learning
            ];

            return responseJson('Update learning', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function destroy($id)
    {
        try {
            $learning = LearningResponsibility::find($id);
            if (!$learning) {
                return responseJson('Data not found', 404, 'Error');
            }
            $data = [
                'learning' => $learning
            ];
            $learning->delete();
            return responseJson('Delete learning', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}

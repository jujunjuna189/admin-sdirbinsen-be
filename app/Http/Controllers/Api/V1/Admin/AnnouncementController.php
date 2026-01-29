<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AnnouncementController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = Announcement::query();

            // Apply search
            $search = $request->input('search');
            if (!empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->where('message', 'like', "%$search%");
                });
            }
            // Apply filtering
            $created_at = $request->input('created_at');
            if (!empty($created_at)) {
                $query->where('created_at', $created_at);
            }

            // Paginate the results
            $perPage = $request->input('per_page', 100);
            $announcement = $query->paginate($perPage);

            $data = [
                'announcement' => $announcement
            ];

            return responseJson('All announcement', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function show($id)
    {
        try {
            $announcement = Announcement::find($id);
            if (is_null($announcement)) {
                return responseJson('Announcement not found', 404, 'Error');
            }

            $data = [
                'announcement' => $announcement
            ];

            return responseJson('detail announcement', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'message' => 'required',
            ], [
                'message.required' => 'Pengumuman wajib diisi!',
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $announcement = new Announcement();
            $announcement->message = $request->input('message');

            $announcement->save();


            $data = [
                'announcement' => $announcement
            ];

            return responseJson('Add announcement', 201, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $validator = Validator::make($request->all(), [
                'message' => 'required',
            ], [
                'message.required' => 'Pengumuman wajib diisi!',
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $announcement = Announcement::find($id);
            if (is_null($announcement)) {
                return responseJson('Announcement not found', 404, 'Error');
            }


            $announcement->message = $request->input('message');

            $announcement->save();


            $data = [
                'announcement' => $announcement
            ];

            return responseJson('update announcement', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function destroy($id)
    {
        try {

            $announcement = Announcement::find($id);
            if (is_null($announcement)) {
                return responseJson('announcement not found', 404, 'Error');
            }

            $announcement->delete();


            $data = [
                'announcement' => $announcement
            ];

            return responseJson('delete announcement', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}

<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ChatController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = Chat::query();
            // Get by from and to
            if (!empty($request->from_id) && !empty($request->to_id)) {
                $query->where(function ($query) use ($request) {
                    $query->where('from_id', $request->from_id)
                        ->where('to_id', $request->to_id);
                });

                $query->orWhere(function ($query) use ($request) {
                    $query->where('from_id', $request->to_id)
                        ->where('to_id', $request->from_id);
                });
            }
            // Paginate the results
            $perPage = $request->input('per_page', 30);
            $query->orderBy('id', 'desc');
            $chat = $query->paginate($perPage);

            $data = [
                'chat' => $chat
            ];

            return responseJson('All chat', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $chat = new Chat();
            $chat->from_id = $request->from_id;
            $chat->to_id = $request->to_id;
            $chat->message = $request->message;

            if ($request->hasFile('attachment')) {
                $file = $request->file('attachment');
                $newFilename = "attachment_" . date('Ymdhis') . rand(10000000, 99999999) . "." . $file->getClientOriginalExtension();
                $path = 'chat/attachment';
                Storage::disk('public')->putFileAs($path, $file, $newFilename);
                $chat->attachment = $newFilename;
                $chat->attachment_name = $file->getClientOriginalName();
            }

            $chat->save();

            $data = [
                'chat' => $chat,
            ];

            DB::commit();
            return responseJson('Add e material', 201, 'Success', $data);
        } catch (\Throwable $th) {
            DB::rollback();
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    public function download(Request $request)
    {
        $path = 'storage/chat/attachment';
        $chat = Chat::find($request->id);
        return response()->download($path . '/' . $chat->attachment, $chat->attachment_name);
    }
}

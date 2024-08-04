<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\HelpTicket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HelpTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $query = HelpTicket::query();

            // Apply search
            $search = $request->input('search');
            if (!empty($search)) {
                $query->where(function ($q) use ($search) {
                    $q->where('title', 'like', "%$search%");
                });
            }
            // Apply filtering
            $user_id = $request->input('user_id');
            if (!empty($user_id)) {
                $query->where('user_id', $user_id);
            }

            $created_at = $request->input('created_at');
            if (!empty($created_at)) {
                $query->where('created_at', $created_at);
            }

            // Paginate the results
            $perPage = $request->input('per_page', 100);
            $help_ticket = $query->paginate($perPage);

            $data = [
                'help_ticket' => $help_ticket
            ];

            return responseJson('All help ticket', 200, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'description' => 'required',
            ], [
                'title.required' => 'Judul wajib diisi!',
                'description.required' => 'Deskripsi wajib diisi!',
            ]);
            if ($validator->fails()) {
                return responseJson('Validation error', 400, 'Error', ['errors' => $validator->errors()]);
            }

            $help_ticket = new HelpTicket();
            $help_ticket->title = $request->input('title');
            $help_ticket->description = $request->input('description');

            $help_ticket->save();


            $data = [
                'help_ticket' => $help_ticket
            ];

            return responseJson('Add help ticket', 201, 'Success', $data);
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            return responseJson($errorMessage, 500, 'Error');
        }
    }
}

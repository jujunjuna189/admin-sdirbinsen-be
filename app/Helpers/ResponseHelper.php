<?php

if (!function_exists('responseJson')) {
    function responseJson($message, $statusCode, $status, $data = [], $headers = [], $options = 0)
    {
        return response()->json(
            [
                'message' => $message,
                'status' => $status,
                'list_data' => $data
            ],
            $statusCode,
            $headers,
            $options
        );
    }
}

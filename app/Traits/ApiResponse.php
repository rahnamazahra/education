<?php

namespace App\Traits;

trait ApiRespon
{
    public function successRespons($code, $data = [], $message = null)
    {
        return response()->json([
            'status' => 'success',
            'data' => $data,
            'message' => $message
        ], $code);
    }

    public function errorRespons($code, $data = [], $message = null)
    {
        return response()->json([
            'status'=> 'error',
            'data' => $data,
            'message' => $message
        ], $code);
    }
}

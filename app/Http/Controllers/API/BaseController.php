<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class BaseController extends Controller
{
    /**
     * @param $data
     * @param $message
     * @param int $status
     * @return JsonResponse
     */
    public function sendResponse($data, $message = null, int $status = 200): JsonResponse
    {
        return response()->json([
            'status'    => true,
            'message'   => $message,
            'data'      => $data
        ], $status);
    }

    /**
     * @param $error
     * @param $message
     * @param $status
     * @return JsonResponse
     */
    public function sendError($error, $message, $status): JsonResponse
    {
        return response()->json([
            'status'    => false,
            'message'   => $message,
            'error'     => $error,
        ], $status);
    }
}

<?php

namespace App\Traits;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Contracts\Support\MessageBag;
use Illuminate\Database\Eloquent\Model;

trait HttpResponses{
    public function response(string $message, string|int $status, array|Model|JsonResource $data = []){
        return response()->json([
            'message' => $message,
            'status' => $status,
            'data' => $data
        ], $status);
    }
    public function error(string $message, string|int $status, array|MessageBag $errors = [], array $data = []){
        return response()->json([
            'message' => $message,
            'status' => $status,
            'error' => $errors,
            'data' => $data
        ], $status);
    }
}
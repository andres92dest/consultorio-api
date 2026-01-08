<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'status' => 'ok',
        'service' => 'Consultorio API',
        'health' => url('/api/health'),
    ]);
});

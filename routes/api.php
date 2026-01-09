<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/health', function () {
    return response()->json([
        'status' => 'ok',
        'timestamp' => now(),
    ]);
});
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth')->get('/me', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth', 'role:admin'])->get('/admin-test', function () {
    return response()->json([
        'message' => 'Acceso concedido: eres admin'
    ]);
});

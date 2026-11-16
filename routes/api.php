<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::prefix('v1')->group(function () {

    Route::get('/', function () {
        return response()->json([
            'message' => 'Bienvenido a Finanzas Claro API',
            'version' => '1.0',
        ]);
    });

    Route::get('/health', function () {
        return response()->json([
            'success' => true,
            'message' => 'Finanzas Claro API funcionando correctamente',
        ]);
    });
});

<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MultasController;

Route::post('/login', [AuthController::class, 'login']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);

    // Ver multas (acceso a cualquier usuario autenticado)
    Route::get('/multas', [MultasController::class, 'index']);

    // Crear multas (solo admin)
    Route::middleware('role:admin')->group(function () {
        Route::post('/multas', [MultasController::class, 'store']);
    });
});

});

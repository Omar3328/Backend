<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MultasController;
use Illuminate\Http\Request;

Route::post('/password/send-code', [AuthController::class, 'enviarCodigoRecuperacion']);
Route::post('/password/reset-code', [AuthController::class, 'restablecerContrasenaConCodigo']);

Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->get('/verificar-token', function (Request $request) {
    return response()->json(['status' => 'ok']);
});
Route::get('/password/reset/{token}', function ($token) {
    return redirect("http://localhost:5173/restablecer-contrasena?token=$token");
})->name('password.reset');

Route::post('/password/email', [AuthController::class, 'enviarLinkRecuperacion']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/cambiar-contrasena', [AuthController::class, 'cambiarContrasena']);
    Route::get('/multas', [MultasController::class, 'index']);

    Route::middleware('role:admin')->group(function () {
        Route::post('/multas', [MultasController::class, 'store']);
    });
});

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\detalleController;
use App\Http\Controllers\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('producto',ProductoController::class);

Route::apiResource('detalle',DetalleController::class);

Route::post('/register',[AuthController::class,'register']);

Route::post('/login',[AuthController::class,'login']);
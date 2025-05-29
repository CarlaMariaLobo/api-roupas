<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoupaController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/roupas', [RoupaController::class, 'index']);

Route::post('/roupas', [RoupaController::class, 'store']);
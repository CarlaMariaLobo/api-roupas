<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoupaController;

Route::get('/roupas/{id}', [RoupaController::class, 'index']);
Route::post('/roupas', [RoupaController::class, 'store']);

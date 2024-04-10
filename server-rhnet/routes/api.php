<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmpresaController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');    
    Route::post('refresh', 'refresh');

});

Route::middleware(['api', 'auth:api'])->group(function () {   
    Route::get('empresas', [EmpresaController::class,'empresa']);

});
<?php

use App\Http\Controllers\Api\UsuarioControllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(UsuarioControllers::class)->group(function () {
    Route::get('/usuarios', 'index');
    Route::post('/usuario', 'store');
    Route::get('/usuario/{id}', 'show');
    Route::put('/usuario/{id}', 'update');
    Route::delete('/usuario/{id}', 'destroy');

});
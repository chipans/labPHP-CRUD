<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum'); // <-- Fíjate en la sintaxis correcta aquí

Route::get('/hola', function(Request $request) {
    return 'Hola mundo';
});
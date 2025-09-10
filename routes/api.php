<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/hola', function(Request $request) {
    return 'Hola Mundo';
});

Route::get('/tasks', [TaskController::class, 'showAll']);
Route::post('/tasks', [TaskController::class, 'store']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'index']);
Route::get('/kakunin', [TodoController::class, 'index2']);
Route::get('/san', [TodoController::class, 'index3']);
Route::get('/kanri', [TodoController::class, 'index4']);

Route::post('/todo/create', [TodoController::class, 'create']);
Route::post('/todo/delete', [TodoController::class, 'remove']);

Route::get('/zz', [TodoController::class, 'zz0']);
Route::get('/kari', [TodoController::class, 'index2']);
Route::post('/kari', [TodoController::class, 'kari']);



Route::get('/test', [TodoController::class, 'index99']);
Route::post('/test2', [TodoController::class, 'confirm']);
Route::post('/test/complete', [TodoController::class, 'complete']);
Route::post('/test/complete2', [TodoController::class, 'complete2']);

Route::get('/serch', [TodoController::class, 'serch'])
    ->name('posts.index');
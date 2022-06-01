<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'index']);
Route::get('/kakunin', [TodoController::class, 'index2']);
Route::get('/san', [TodoController::class, 'index3']);
Route::get('/kanri', [TodoController::class, 'index4']);

Route::post('/todo/create', [TodoController::class, 'create']);
Route::post('/todo/delete', [TodoController::class, 'remove']);
Route::get('/serch', [TodoController::class, 'serch']);
Route::post('/kari', [TodoController::class, 'kari']);

use App\Http\Controllers\AuthorController;
Route::get('/', [AuthorController::class, 'index']);







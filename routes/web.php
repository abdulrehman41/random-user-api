<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [UserController::class, 'index']);
Route::get('/{uuid}', [UserController::class, 'show']);

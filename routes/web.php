<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
})->middleware(middleware: 'auth');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', [MahasiswaController::class, 'index'])->middleware('auth');
Route::post('/storeajax', [MahasiswaController::class, 'storeajax']);
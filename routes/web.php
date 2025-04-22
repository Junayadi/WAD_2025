<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EkskulController;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk menampilkan daftar ekskul
Route::get('/ekskul', [EkskulController::class, 'index']);
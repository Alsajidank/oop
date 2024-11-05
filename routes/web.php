<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

// Route untuk menampilkan halaman daftar buku di root URL ('/')
Route::get('/', [BukuController::class, 'index']);

// Route resource untuk buku
Route::resource('buku', BukuController::class);

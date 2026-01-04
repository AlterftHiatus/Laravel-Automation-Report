<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController; // Gunakan LaporanController saja agar simpel

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Ubah HomeController menjadi LaporanController
Route::get('/', [LaporanController::class, 'index'])->name('home');

// Sisanya sudah benar
Route::get('/laporan/create', [LaporanController::class, 'create'])->name('laporan.create');
Route::post('/laporan', [LaporanController::class, 'store'])->name('laporan.store');
Route::get('/laporan/{id}/preview', [LaporanController::class, 'preview'])->name('laporan.preview');
Route::get('/laporan/{id}/pdf', [LaporanController::class, 'generatePdf'])->name('laporan.pdf');
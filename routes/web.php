<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\KonveyorController;
use App\Http\Controllers\PenggerakMulaController;

// Route::get('/tes', function () {
//     return view('laporan.pdf');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/dashboard', [LaporanController::class, 'index'])->name('dashboard');
Route::post('/laporan', [LaporanController::class, 'store']);
Route::delete('/laporan/{id}', [LaporanController::class, 'destroy'])->name('laporan.destroy');
Route::get('/laporan/create', [LaporanController::class, 'create']);
Route::get('/laporan/{id}/pdf', [LaporanController::class, 'generatePdf']);

// form edit laporan
Route::get('/laporan/{id}/edit', [LaporanController::class, 'edit'])->name('laporan.edit');

// update laporan
Route::put('/laporan/{id}/update', [LaporanController::class, 'update'])->name('laporan.update');

Route::get('/laporan/template_konveyor', [KonveyorController::class, 'downloadPdf']);
Route::get('/laporan/konveyor/create', [KonveyorController::class, 'create'])->name('laporan.konveyor.create');
Route::get('/laporan/penggerak-mula/create',[PenggerakMulaController::class, 'create'])->name('laporan.penggerak-mula.create');
Route::post('/laporan/penggerak-mula',[PenggerakMulaController::class, 'store'])->name('laporan.penggerak-mula.store');
Route::post('/laporan/konveyor', [KonveyorController::class, 'store'])->name('laporan.konveyor.store');


// ini front end  
Route::get('/input_laporan', function () {
    return view('input-laporan');
});

Route::get('/profile_perusahaan', function () {
    return view('profile-perusahaan');
});

Route::get('/riwayat', function () {
    return view('riwayat');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/contact', function () {
    return view('contact-us');
});

// Ini buat download pdf
Route::get('/dunlut', function () {
    return view('dunlut');
});

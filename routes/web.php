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
Route::get('/laporan/create', [LaporanController::class, 'create']);
Route::post('/laporan', [LaporanController::class, 'store']);
Route::get('/laporan/{id}/preview', [LaporanController::class, 'preview'])->name('laporan.preview');
Route::get('/laporan/{id}/pdf', [LaporanController::class, 'generatePdf']);


Route::get('/laporan/template_konveyor', [KonveyorController::class, 'downloadPdf']);
Route::get('/laporan/konveyor/create', [KonveyorController::class, 'create'])
    ->name('laporan.konveyor.create');

Route::get('/laporan/penggerak-mula/create', 
    [PenggerakMulaController::class, 'create']
)->name('laporan.penggerak-mula.create');

Route::post('/laporan/penggerak-mula', 
    [PenggerakMulaController::class, 'store']
)->name('laporan.penggerak-mula.store');

// ini front end  
Route::get('/input_laporan', function () {
    return view('input-laporan');
});

Route::post('/laporan/konveyor', [KonveyorController::class, 'store'])
    ->name('laporan.konveyor.store');

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



<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\KonveyorController;



// Route::get('/tes', function () {
//     return view('laporan.pdf');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/laporan/create', [LaporanController::class, 'create']);
Route::post('/laporan', [LaporanController::class, 'store']);
Route::get('/laporan/{id}/preview', [LaporanController::class, 'preview'])->name('laporan.preview');
Route::get('/laporan/{id}/pdf', [LaporanController::class, 'generatePdf']);


Route::get('/laporan/template_konveyor', [KonveyorController::class, 'downloadPdf']);


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



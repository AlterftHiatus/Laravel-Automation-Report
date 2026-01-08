<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaporanController;



// Route::get('/tes', function () {
//     return view('laporan.pdf');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/laporan/create', [LaporanController::class, 'create']);
Route::post('/laporan', [LaporanController::class, 'store']);
Route::get('/laporan/{id}/preview', [LaporanController::class, 'preview'])->name('laporan.preview');
Route::get('/laporan/{id}/pdf', [LaporanController::class, 'generatePdf']);




Route::get('/dunlut', function () {
    return view('dunlut');
});


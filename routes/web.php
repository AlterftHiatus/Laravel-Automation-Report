<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\KonveyorController;
use App\Http\Controllers\PenggerakMulaController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index']);
Route::view('/profile_perusahaan', 'profile-perusahaan');
Route::view('/tentang', 'tentang');
Route::view('/contact', 'contact-us');

/*
|--------------------------------------------------------------------------
| PROTECTED ROUTES (WAJIB LOGIN)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    /*
    |--------------------------------------------------------------------------
    | DASHBOARD
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard', [LaporanController::class, 'index'])
        ->name('dashboard');


    /*
    |--------------------------------------------------------------------------
    | CONCRETE MIXER
    |--------------------------------------------------------------------------
    */

    Route::get('/laporan/create', [LaporanController::class, 'create']);
    Route::post('/laporan', [LaporanController::class, 'store']);

    Route::get('/laporan/{id}/edit', [LaporanController::class, 'edit']);
    Route::put('/laporan/{id}/update', [LaporanController::class, 'update']);

    Route::delete('/laporan/{id}', [LaporanController::class, 'destroy']);
    Route::get('/laporan/{id}/pdf', [LaporanController::class, 'generatePdf']);


    /*
    |--------------------------------------------------------------------------
    | KONVEYOR
    |--------------------------------------------------------------------------
    */

    Route::get('/laporan/template_konveyor', [KonveyorController::class, 'downloadPdf']);

    Route::get('/laporan/konveyor/create', [KonveyorController::class, 'create'])
        ->name('laporan.konveyor.create');

    Route::post('/laporan/konveyor', [KonveyorController::class, 'store'])
        ->name('laporan.konveyor.store');


    /*
    |--------------------------------------------------------------------------
    | PENGGERAK MULA
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/laporan/penggerak-mula/create',
        [PenggerakMulaController::class, 'create']
    )->name('laporan.penggerak-mula.create');

    Route::post(
        '/laporan/penggerak-mula',
        [PenggerakMulaController::class, 'store']
    )->name('laporan.penggerak-mula.store');


    /*
    |--------------------------------------------------------------------------
    | HALAMAN STATIC INTERNAL
    |--------------------------------------------------------------------------
    */

    Route::view('/input_laporan', 'input-laporan');
    Route::view('/dunlut', 'dunlut');


    /*
    |--------------------------------------------------------------------------
    | PROFILE (BREEZE)
    |--------------------------------------------------------------------------
    */

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});


/*
|--------------------------------------------------------------------------
| AUTH ROUTES (LOGIN, LOGOUT, REGISTER)
|--------------------------------------------------------------------------
*/

require __DIR__ . '/auth.php';

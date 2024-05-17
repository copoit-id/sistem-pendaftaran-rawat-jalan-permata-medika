<?php

use App\Http\Controllers\ManajemenDokterController;
use App\Http\Controllers\ManajemenPetugasController;
use App\Http\Controllers\RekamMedisController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/manajemen-dokter');
});

Route::get('/manajemen-dokter', [ManajemenDokterController::class, 'index']);
Route::get('/input-dokter', [ManajemenDokterController::class, 'indexInput']);

Route::get('/manajemen-petugas', [ManajemenPetugasController::class, 'index']);
Route::get('/input-petugas', [ManajemenPetugasController::class, 'indexInput']);

Route::get('/rekam-medis', [RekamMedisController::class, 'index']);
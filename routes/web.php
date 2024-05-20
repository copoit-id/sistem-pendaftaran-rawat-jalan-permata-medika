<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JadwalDokterController;
use App\Http\Controllers\KeluhanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ManajemenDokterController;
use App\Http\Controllers\ManajemenPetugasController;
use App\Http\Controllers\PendaftaranPasienController;
use App\Http\Controllers\RekamMedisController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/manajemen-dokter');
});

Route::get('/manajemen-dokter', [ManajemenDokterController::class, 'index']);
Route::get('/input-dokter', [ManajemenDokterController::class, 'indexInput']);

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/pendaftaran-pasien', [PendaftaranPasienController::class, 'index']);
Route::get('/keluhan-pasien', [KeluhanController::class, 'index']);
Route::get('/jadwal-dokter', [JadwalDokterController::class, 'index']);
Route::get('/laporan', [LaporanController::class, 'index']);

Route::prefix('manajemen-petugas')->group(function () {
    Route::get('/', [ManajemenPetugasController::class, 'index']);
    Route::get('/input-petugas', [ManajemenPetugasController::class, 'indexInput']);
    Route::post('/add-petugas', [ManajemenPetugasController::class, 'addPetugas'])->name('addPetugas');
    Route::get('/edit-petugas/{id}', [ManajemenPetugasController::class, 'indexEdit']);
    Route::post('/update-petugas', [ManajemenPetugasController::class, 'updatePetugas'])->name('updatePetugas');
});


Route::get('/rekam-medis', [RekamMedisController::class, 'index']);
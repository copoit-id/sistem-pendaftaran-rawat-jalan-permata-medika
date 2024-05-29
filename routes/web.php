<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JadwalDokterController;
use App\Http\Controllers\KeluhanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ManajemenDokterController;
use App\Http\Controllers\ManajemenPetugasController;
use App\Http\Controllers\PendaftaranPasienController;
use App\Http\Controllers\RekamMedisController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return redirect('/manajemen-dokter');
// });

// login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate']);

Route::get('/', [MainController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/jadwal-dokter', [JadwalDokterController::class, 'index']);

Route::prefix('keluhan-pasien')->group(function () {
    Route::get('/', [KeluhanController::class, 'index']);
    Route::get('/cetak-antrian', [KeluhanController::class, 'indexCetakAntrian']);
    Route::post('/add-keluhan', [KeluhanController::class, 'addKeluhan'])->name('addKeluhan');
    Route::post('/get-dokter-poli', [KeluhanController::class, 'getDokterByPoli'])->name('getDokterByPoli');
    Route::get('/check-data-pasien/{nik}', [KeluhanController::class, 'checkDataPasien'])->name('checkDataPasien');
});

Route::prefix('pendaftaran-pasien')->group(function () {
    Route::get('/', [PendaftaranPasienController::class, 'index']);
    Route::post('/add-pasien', [PendaftaranPasienController::class, 'addPasien'])->name('addPasien');
});

Route::prefix('manajemen-dokter')->group(function () {
    Route::get('/', [ManajemenDokterController::class, 'index']);
    Route::get('/input-dokter', [ManajemenDokterController::class, 'indexInput']);
    Route::post('/add-dokter', [ManajemenDokterController::class, 'addDokter'])->name('addDokter');
});

Route::prefix('manajemen-petugas')->group(function () {
    Route::get('/', [ManajemenPetugasController::class, 'index']);
    Route::get('/input-petugas', [ManajemenPetugasController::class, 'indexInput']);
    Route::post('/add-petugas', [ManajemenPetugasController::class, 'addPetugas'])->name('addPetugas');
    Route::get('/edit-petugas/{id}', [ManajemenPetugasController::class, 'indexEdit']);
    Route::post('/update-petugas', [ManajemenPetugasController::class, 'updatePetugas'])->name('updatePetugas');
});


Route::get('/rekam-medis', [RekamMedisController::class, 'index']);
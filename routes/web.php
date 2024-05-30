<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JadwalDokterController;
use App\Http\Controllers\KeluhanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ManajemenDokterController;
use App\Http\Controllers\ManajemenPetugasController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\PendaftaranPasienController;
use App\Http\Controllers\RekamMedisController;
use App\Http\Middleware\CheckPetugasAuthenticated;
use Illuminate\Support\Facades\Route;

// login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/authenticate', [LoginController::class, 'authenticate']);

Route::get('/', [MainController::class, 'index']);

Route::middleware(CheckPetugasAuthenticated::class)->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index']);
        Route::get('/jadwal-dokter', [JadwalDokterController::class, 'index']);

        Route::get('/view-pdf', [PDFController::class, 'index']);
        Route::get('/download-pdf', [PDFController::class, 'generatePDF']);

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
            Route::get('/edit-dokter/{id}', [ManajemenDokterController::class, 'indexEdit']);
            Route::get('/delete-dokter/{id}', [ManajemenDokterController::class, 'deleteDokter']);
            Route::post('/add-dokter', [ManajemenDokterController::class, 'addDokter'])->name('addDokter');
        });

        Route::prefix('manajemen-petugas')->group(function () {
            Route::get('/', [ManajemenPetugasController::class, 'index']);
            Route::get('/input-petugas', [ManajemenPetugasController::class, 'indexInput']);
            Route::post('/add-petugas', [ManajemenPetugasController::class, 'addPetugas'])->name('addPetugas');
            Route::get('/edit-petugas/{id}', [ManajemenPetugasController::class, 'indexEdit']);
            Route::post('/update-petugas/{id}', [ManajemenPetugasController::class, 'updatePetugas'])->name('updatePetugas');
            Route::get('/delete-petugas/{id}', [ManajemenPetugasController::class, 'detelePetugas']);
        });

        Route::prefix('rekam-medis')->group(function () {
            Route::get('/', [RekamMedisController::class, 'index']);
            Route::get('/delete-rekam-medis/{id}', [RekamMedisController::class, 'deleteRM']);
        });
});
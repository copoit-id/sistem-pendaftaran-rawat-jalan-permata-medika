<?php

use App\Http\Controllers\ManajemenDokterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/manajemen-dokter');
});

Route::get('/manajemen-dokter', [ManajemenDokterController::class, 'index']);
Route::get('/input-dokter', [ManajemenDokterController::class, 'indexInput']);
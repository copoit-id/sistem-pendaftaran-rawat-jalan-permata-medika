<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Keluhan;
use App\Models\Pasien;
use App\Models\Petugas;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $jumlah_dokter = Dokter::count();
        $jumlah_karyawan = Petugas::count();
        $jumlah_pasien = Pasien::count();
        $jumlah_rekam_medis = Keluhan::count();

        return view('pages.dashboard ',[
            'jumlah_dokter' => $jumlah_dokter,
            'jumlah_karyawan' => $jumlah_karyawan,
            'jumlah_pasien' => $jumlah_pasien,
            'jumlah_rekam_medis' => $jumlah_rekam_medis
        ]);
    }
}
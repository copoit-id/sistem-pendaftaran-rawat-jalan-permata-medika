<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManajemenDokterController extends Controller
{
    public function index(){
        $daftar_dokter = DB::table('dokter')
            ->join('jadwal_dokter', 'dokter.id_dokter', '=', 'jadwal_dokter.id_dokter')
            ->select('dokter.*', 'jadwal_dokter.*')
            ->get();

        return view('pages.manajemen-dokter',[
            'daftar_dokter' => $daftar_dokter
        ]);
    }
    public function indexInput(){
        return view('pages.manajemen-dokter-input');
    }
}
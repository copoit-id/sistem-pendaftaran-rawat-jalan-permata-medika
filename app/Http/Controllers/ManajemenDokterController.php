<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class ManajemenDokterController extends Controller
{
    public function index(){
        $daftar_dokter = Dokter::all();
        return view('pages.manajemen-dokter',[
            'daftar_dokter' => $daftar_dokter
        ]);
    }
    public function indexInput(){
        return view('pages.manajemen-dokter-input');
    }
}
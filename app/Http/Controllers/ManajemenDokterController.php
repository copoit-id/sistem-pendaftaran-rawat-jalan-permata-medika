<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManajemenDokterController extends Controller
{
    public function index(){
        $daftar_dokter = Dokter::with('jadwalDokter')->get();
        // return response()->json($menu);
        // dd($menu->toJson());

        return view('pages.manajemen-dokter',[
            'daftar_dokter' => $daftar_dokter
        ]);
    }
    public function indexInput(){
        return view('pages.manajemen-dokter-input');
    }
}

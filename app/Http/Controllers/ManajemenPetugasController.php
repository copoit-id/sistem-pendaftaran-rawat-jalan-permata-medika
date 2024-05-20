<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class ManajemenPetugasController extends Controller
{
    public function index(){
        $daftar_petugas = Petugas::all();
        return view('pages.manajemen-petugas', [
            'daftar_petugas' => $daftar_petugas
        ]);
    }
    
    public function indexInput(){
        return view('pages.manajemen-petugas-input');
    }
    
    public function indexEdit($id){
        $petugas = Petugas::where('id_petugas', $id)->first();
        return view('pages.manajemen-petugas-edit',[
            'petugas' => $petugas
        ]);
    }

    public function addPetugas(Request $request){
        
        // dd($request->all());
        Petugas::create($request->all());
        return redirect('/manajemen-petugas');
    }

    public function updatePetugas(Request $request, $id){
        
    }
}
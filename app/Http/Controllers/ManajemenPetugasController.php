<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        Petugas::create([
            'nama_petugas' => $request->nama_petugas,
            'nomor_telepon' => $request->nomor_telepon,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat_lengkap' => $request->alamat_lengkap,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/manajemen-petugas');
    }

    public function updatePetugas(Request $request, $id){

    }
}
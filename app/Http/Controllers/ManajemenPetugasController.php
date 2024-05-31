<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ManajemenPetugasController extends Controller
{
    public function index(){
        $daftar_petugas = User::all();
        return view('pages.manajemen-petugas', [
            'daftar_petugas' => $daftar_petugas
        ]);
    }

    public function indexInput(){
        return view('pages.manajemen-petugas-input');
    }

    public function indexEdit($id){
        $petugas = User::where('id', $id)->first();
        return view('pages.manajemen-petugas-edit',[
            'petugas' => $petugas
        ]);
    }

    public function addPetugas(Request $request){
        // dd($request->all());
        User::create([
            'nama' => $request->nama_petugas,
            'nomor_telepon' => $request->nomor_telepon,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat_lengkap' => $request->alamat_lengkap,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/manajemen-petugas');
    }

    public function updatePetugas(Request $request, $id){
        User::where('id', $id)->update([
            'nama' => $request->nama_petugas,
            'nomor_telepon' => $request->nomor_telepon,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat_lengkap' => $request->alamat_lengkap,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/manajemen-petugas');
    }

    public function detelePetugas($id){
        User::where('id', $id)->delete();
        return redirect('/manajemen-petugas');
    }
}
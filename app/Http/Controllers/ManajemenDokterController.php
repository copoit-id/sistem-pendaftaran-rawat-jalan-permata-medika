<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\JadwalDokter;
use App\Models\Poli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManajemenDokterController extends Controller
{
    public function index(){
        $daftar_dokter = Dokter::with('jadwalDokter')->get();
        foreach ($daftar_dokter as $dokter) {
            $hari = [];
            $jadwal_dokter = $dokter->jadwalDokter;
            foreach ($jadwal_dokter as $jadwal) {
                $hari[] = $jadwal['hari'];
            }
            $dokter->hari = $hari; // eror karna intelesensenya aja, ga ngaruh
        }


        return view('pages.manajemen-dokter',[
            'daftar_dokter' => $daftar_dokter
        ]);
    }
    public function indexInput(){
        $daftar_poli = Poli::all();
        return view('pages.manajemen-dokter-input' ,[
            'daftar_poli' => $daftar_poli
        ]);
    }

    public function indexEdit($id){
        $dokter = Dokter::with('jadwalDokter')->where('id_dokter', $id)->first();
        $daftar_poli = Poli::all();

        $jadwal = [
            'senin' => ['checked' => false, 'mulai' => '', 'selesai' => ''],
            'selasa' => ['checked' => false, 'mulai' => '', 'selesai' => ''],
            'rabu' => ['checked' => false, 'mulai' => '', 'selesai' => ''],
            'kamis' => ['checked' => false, 'mulai' => '', 'selesai' => ''],
            'jumat' => ['checked' => false, 'mulai' => '', 'selesai' => ''],
            'sabtu' => ['checked' => false, 'mulai' => '', 'selesai' => ''],
            'minggu' => ['checked' => false, 'mulai' => '', 'selesai' => ''],
        ];

        foreach ($dokter->jadwalDokter as $j) {
            $hari = strtolower($j->hari);
            $jadwal[$hari]['checked'] = true;
            $jadwal[$hari]['mulai'] = $j->jadwal_mulai;
            $jadwal[$hari]['selesai'] = $j->jadwal_selesai;
        }

        return view('pages.manajemen-dokter-edit', [
            'dokter' => $dokter,
            'daftar_poli' => $daftar_poli,
            'jadwal' => $jadwal,
        ]);
    }

    public function deleteDokter($id){
        $dokter = Dokter::find($id);
        if($dokter){
            JadwalDokter::where('id_dokter', $dokter->id_dokter)->delete();
            $dokter->delete();
        }
        return redirect('/manajemen-dokter');
    }

    public function addDokter(Request $request){
        // dd($request->all());
        $dokter_query = Dokter::create([
            'nama_dokter' => $request->nama_dokter,
            'nomor_telepon' => $request->nomor_telepon,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat_lengkap' => $request->alamat_lengkap,
            'id_poli' => $request->poli,
        ]);

        if($dokter_query){
            // hari senin
            if($request->hari_senin !== null && $request->hari_senin ){
                JadwalDokter::create([
                        'hari' => 'senin',
                        'jadwal_mulai' => $request->jadwal_mulai_senin,
                        'jadwal_selesai' => $request->jadwal_selesai_senin,
                        'id_dokter' => $dokter_query->id_dokter,
                ]);
            }
            // hari selasa
            if($request->hari_selasa !== null && $request->hari_selasa){
                JadwalDokter::create([
                        'hari' => 'selasa',
                        'jadwal_mulai' => $request->jadwal_mulai_selasa,
                        'jadwal_selesai' => $request->jadwal_selesai_selasa,
                        'id_dokter' => $dokter_query->id_dokter,
                ]);
            }
            // hari rabu
            if($request->hari_rabu !== null && $request->hari_rabu){
                JadwalDokter::create([
                        'hari' => 'rabu',
                        'jadwal_mulai' => $request->jadwal_mulai_rabu,
                        'jadwal_selesai' => $request->jadwal_selesai_rabu,
                        'id_dokter' => $dokter_query->id_dokter,
                ]);
            }
            // hari kamis
            if($request->hari_kamis !== null && $request->hari_kamis){
                JadwalDokter::create([
                        'hari' => 'kamis',
                        'jadwal_mulai' => $request->jadwal_mulai_kamis,
                        'jadwal_selesai' => $request->jadwal_selesai_kamis,
                        'id_dokter' => $dokter_query->id_dokter,
                ]);
            }
            // hari jumat
            if($request->hari_jumat !== null && $request->hari_jumat){
                JadwalDokter::create([
                        'hari' => 'jumat',
                        'jadwal_mulai' => $request->jadwal_mulai_jumat,
                        'jadwal_selesai' => $request->jadwal_selesai_jumat,
                        'id_dokter' => $dokter_query->id_dokter,
                ]);
            }
            // hari sabtu
            if($request->hari_sabtu !== null && $request->hari_sabtu){
                JadwalDokter::create([
                        'hari' => 'sabtu',
                        'jadwal_mulai' => $request->jadwal_mulai_sabtu,
                        'jadwal_selesai' => $request->jadwal_selesai_sabtu,
                        'id_dokter' => $dokter_query->id_dokter,
                ]);
            }
            // hari minggu
            if($request->hari_minggu !== null && $request->hari_minggu){
                JadwalDokter::create([
                        'hari' => 'minggu',
                        'jadwal_mulai' => $request->jadwal_mulai_minggu,
                        'jadwal_selesai' => $request->jadwal_selesai_minggu,
                        'id_dokter' => $dokter_query->id_dokter,
                ]);
            }

            return redirect('/manajemen-dokter');
        }
    }

    public function updateDokter(Request $request, $id){
        $dokter = Dokter::with('jadwalDokter')->where('id_dokter', $id)->first();
        $dokter->update([
            'nama_dokter' => $request->nama_dokter,
            'nomor_telepon' => $request->nomor_telepon,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat_lengkap' => $request->alamat_lengkap,
            'id_poli' => $request->poli,
        ]);

        JadwalDokter::where('id_dokter', $id)->delete();

        $days = ['senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu'];

        foreach ($days as $day) {
            if ($request->has('hari_' . $day)) {
                JadwalDokter::create([
                    'id_dokter' => $dokter->id_dokter,
                    'hari' => ucfirst($day),
                    'jadwal_mulai' => $request->input('jadwal_mulai_' . $day),
                    'jadwal_selesai' => $request->input('jadwal_selesai_' . $day),
                ]);
            }
        }

        return redirect('/manajemen-dokter');
    }
}
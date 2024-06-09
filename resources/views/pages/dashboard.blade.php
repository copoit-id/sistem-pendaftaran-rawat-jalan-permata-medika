@extends('layouts.admin')

@section('title', 'Dashboard')
@section('content')
<section class="content">
    <h1 class="text-[20px] font-semibold text-slate-800 ">Halo, {{ Auth::user()->role }}!</h1>
    <p class="text-[16px] font-thin">Selamat datang admin, tetap semangat dan selalu bersyukur :)</p>
    <div class="flex items-center justify-between py-6 gap-4">
        <div class="flex-1 px-10 py-6 bg-blue text-white">
            <span class="flex gap-2">
                <i class="ri-dashboard-fill"></i>
                <p class="font-thin">Jumlah Dokter</p>
            </span>
            <p class="font-bold text-[20px]">{{ $jumlah_dokter }} Dokter</p>
        </div>
        <div class="flex-1 px-10 py-6 bg-blue text-white">
            <span class="flex gap-2">
                <i class="ri-dashboard-fill"></i>
                <p class="font-thin">Jumlah Karyawan</p>
            </span>
            <p class="font-bold text-[20px]">{{ $jumlah_karyawan }} Karyawan</p>
        </div>
        <div class="flex-1 px-10 py-6 bg-blue text-white">
            <span class="flex gap-2">
                <i class="ri-dashboard-fill"></i>
                <p class="font-thin">Jumlah Pasien</p>
            </span>
            <p class="font-bold text-[20px]">{{ $jumlah_pasien }} Pasien</p>
        </div>
        <div class="flex-1 px-10 py-6 bg-blue text-white">
            <span class="flex gap-2">
                <i class="ri-dashboard-fill"></i>
                <p class="font-thin">Jumlah Rekam Medis</p>
            </span>
            <p class="font-bold text-[20px]">{{ $jumlah_rekam_medis }} Rekam Medis</p>
        </div>
    </div>
</section>
<script>
    $(document).ready(function() {
            $('#btn-search').on('click', function() {
                alert("Button clicked!");
            });
        });
</script>
@endsection
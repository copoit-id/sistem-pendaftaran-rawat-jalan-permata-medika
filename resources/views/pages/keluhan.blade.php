@extends('layouts.admin')

@section('title', 'Keluhan')
@section('content')
    <section class="content">
        <div class="flex">
            <a href="/keluhan-pasien" class="block pl-4 pr-6 rounded-full py-1 bg-blue text-white text-[14px]"><i
                    class="ri-arrow-left-line mr-2 font-bold"></i>Kembali</a>
            <nav class="flex ml-4" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="#"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                            </svg>
                            Form Keluhan Pasien
                        </a>
                    </li>

                </ol>
            </nav>
        </div>
        <div class="bg-white w-full mt-4 shadow-sm rounded-md px-4 py-8">
            <p class="text-center font-bold text-[20px] mb-4">Form Keluhan Pasien</p>
            <div>
                <form action="{{ route('addPetugas') }}" method="post" class="mx-auto">
                    @csrf
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative flex w-full gap-4">
                        <input type="search" id="default-search"
                            class="flex-1 block p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Masukan ID Pasien" name="nama_petugas" required />
                        <input name="nomor_telepon" type="search" id="default-search"
                            class="flex-1 block p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Masukan Nama Pasien" required />
                        <input name="nomor_telepon" type="search" id="default-search"
                            class="flex-1 block p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Masukan Nomor Kependudukan" required />
                    </div>
                    <div class="relative flex w-full gap-4 py-4">
                        <select id="countries_disabled" name="jenis_kelamin"
                            class="flex-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Pilih Jenis Kelamin</option>
                            <option value="laki-laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                        <select id="countries_disabled" name="jenis_kelamin"
                            class="flex-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Pilih Agama</option>
                            <option value="laki-laki">Islam</option>
                            <option value="perempuan">Kristen</option>
                            <option value="perempuan">Katolik</option>
                            <option value="perempuan">Hindu</option>
                            <option value="perempuan">Budha</option>
                            <option value="perempuan">Konghucu</option>
                        </select>
                        <select id="countries_disabled" name="jenis_kelamin"
                            class="flex-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Pilih Status Pernikahan</option>
                            <option value="laki-laki">Sudah Menikah</option>
                            <option value="perempuan">Belom Menikah</option>
                        </select>
                    </div>
                    <span class="block w-full h-[2px] bg-gray-200 mt-4 mb-8"></span>

                    <div class="py-4 flex gap-4">
                        <textarea name="alamat_lengkap" type="search" id="default-search"
                            class="flex-1 w-full h-[150px] block p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Masukan keluhan pasien" required></textarea>
                        <div class="flex flex-1 flex-col items-center justify-start gap-4">
                            <select id="countries_disabled" name="jenis_kelamin"
                                class="flex-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Pilih Poli Tujuan</option>
                                <option value="laki-laki">Poli Mata</option>
                                <option value="perempuan">Poli Telinga</option>
                                <option value="perempuan">Poli Hidung</option>
                            </select>
                            <select id="countries_disabled" name="jenis_kelamin"
                                class="flex-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Pilih Jadwal Tersedia</option>
                                <option value="laki-laki">07.00 - 09.00</option>
                                <option value="perempuan">09.00 - 10.00</option>
                                <option value="perempuan">10.00 - 11.00</option>
                            </select>
                            <div class="flex w-full mx-4 gap-4 items-center">
                                <button class="flex-1 bg-green-600 text-white px-4 py-2 rounded-md text-sm ">Tambah</button>
                                <button class="flex-1 bg-red-800 text-white px-4 py-2 rounded-md text-sm ">Batal</button>
                            </div>
                        </div>
                        <div class="flex flex-1 items-start">
                            <select id="countries_disabled" name="jenis_kelamin"
                                class="flex-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Pilih Dokter</option>
                                <option value="laki-laki">dr. Kevin Tanes</option>
                                <option value="perempuan">dr. Dina Ftriana</option>
                                <option value="perempuan">dr. Anggara Kevin</option>
                            </select>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </section>
@endsection

@extends('layouts.admin')

@section('title', 'Manajemen Dokter')
@section('content')
    <section class="content">
        <div class="flex">
            <a href="/manajemen-dokter" class="block pl-4 pr-6 rounded-full py-1 bg-blue text-white text-[14px]"><i
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
                            Manajemen Dokter
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Input
                                Dokter</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="bg-white w-full mt-4 shadow-sm rounded-md px-4 py-8">
            <p class="text-center font-bold text-[20px] mb-4">Form Input Dokter</p>
            <div>
                <form action="{{ route('addDokter') }}" method="post" class="mx-auto">
                    @csrf
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative flex w-full gap-4">
                        <input type="search" id="default-search" name="nama_dokter"
                            class="flex-1 block p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Masukan nama dokter" required />
                        <select id="countries_disabled" name="poli"
                            class="flex-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Pilih Poliklinik</option>
                            <option value="1">Poli Mata</option>
                            <option value="2">Poli Telinga</option>
                            <option value="3">Poli Kulit</option>
                            <option value="4">Poli Gigi</option>
                        </select>
                        <select id="countries_disabled" name="jenis_kelamin"
                            class="flex-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Pilih Jenis Kelamin</option>
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="py-4 flex">
                        <div class="bg-gray-100 w-2/3 py-4 px-4 rounded-md border border-gray-300 ">
                            <p class="text-center font-semibold text-gray-600 mb-3">Jadwal Hari Dokter</p>
                            <table class="w-full">
                                <thead class="bg-blue text-center text-white">
                                    <tr>
                                        <td class="border border-gray-300">No</td>
                                        <td class="border border-gray-300">Hari</td>
                                        <td class="border border-gray-300">Ketersediaan</td>
                                        <td class="border border-gray-300">Jadwal Dokter</td>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr class="senin">
                                        <td class="border border-gray-300">1</td>
                                        <td class="border border-gray-300">Senin</td>
                                        <td class="border border-gray-300">
                                            <input type="checkbox" name="hari_senin" id="">
                                        </td>
                                        <td class="border border-gray-300 flex justify-center items-center gap-2">
                                            <input type="time" name="jadwal_mulai_senin" placeholder="07.00 - 10.00">
                                            <p>-</p>
                                            <input type="time" name="jadwal_selesai_senin" placeholder="07.00 - 10.00">
                                        </td>
                                    </tr>
                                    <tr class="selasa">
                                        <td class="border border-gray-300">1</td>
                                        <td class="border border-gray-300">Selasa</td>
                                        <td class="border border-gray-300">
                                            <input type="checkbox" name="hari_selasa" id="">
                                        </td>
                                        <td class="border border-gray-300 flex justify-center items-center gap-2">
                                            <input type="time" name="jadwal_mulai_selasa" placeholder="07.00 - 10.00">
                                            <p>-</p>
                                            <input type="time" name="jadwal_selesai_selasa" placeholder="07.00 - 10.00">
                                        </td>
                                    </tr>
                                    <tr class="rabu">
                                        <td class="border border-gray-300">1</td>
                                        <td class="border border-gray-300">Rabu</td>
                                        <td class="border border-gray-300">
                                            <input type="checkbox" name="hari_rabu" id="">
                                        </td>
                                        <td class="border border-gray-300 flex justify-center items-center gap-2">
                                            <input type="time" name="jadwal_mulai_rabu" placeholder="07.00 - 10.00">
                                            <p>-</p>
                                            <input type="time" name="jadwal_selesai_rabu" placeholder="07.00 - 10.00">
                                        </td>
                                    </tr>
                                    <tr class="kamis">
                                        <td class="border border-gray-300">1</td>
                                        <td class="border border-gray-300">Kamis</td>
                                        <td class="border border-gray-300">
                                            <input type="checkbox" name="hari_kamis" id="">
                                        </td>
                                        <td class="border border-gray-300 flex justify-center items-center gap-2">
                                            <input type="time" name="jadwal_mulai_kamis" placeholder="07.00 - 10.00">
                                            <p>-</p>
                                            <input type="time" name="jadwal_selesai_kamis"
                                                placeholder="07.00 - 10.00">
                                        </td>
                                    </tr>
                                    <tr class="jumat">
                                        <td class="border border-gray-300">1</td>
                                        <td class="border border-gray-300">Jumat</td>
                                        <td class="border border-gray-300">
                                            <input type="checkbox" name="hari_jumat" id="">
                                        </td>
                                        <td class="border border-gray-300 flex justify-center items-center gap-2">
                                            <input type="time" name="jadwal_mulai_jumat" placeholder="07.00 - 10.00">
                                            <p>-</p>
                                            <input type="time" name="jadwal_selesai_jumat"
                                                placeholder="07.00 - 10.00">
                                        </td>
                                    </tr>
                                    <tr class="sabtu">
                                        <td class="border border-gray-300">1</td>
                                        <td class="border border-gray-300">Sabtu</td>
                                        <td class="border border-gray-300">
                                            <input type="checkbox" name="hari_sabtu" id="">
                                        </td>
                                        <td class="border border-gray-300 flex justify-center items-center gap-2">
                                            <input type="time" name="jadwal_mulai_sabtu" placeholder="07.00 - 10.00">
                                            <p>-</p>
                                            <input type="time" name="jadwal_selesai_sabtu"
                                                placeholder="07.00 - 10.00">
                                        </td>
                                    </tr>
                                    <tr class="minggu">
                                        <td class="border border-gray-300">1</td>
                                        <td class="border border-gray-300">Minggu</td>
                                        <td class="border border-gray-300">
                                            <input type="checkbox" name="hari_minggu" id="">
                                        </td>
                                        <td class="border border-gray-300 flex justify-center items-center gap-2">
                                            <input type="time" name="jadwal_mulai_minggu" placeholder="07.00 - 10.00">
                                            <p>-</p>
                                            <input type="time" name="jadwal_selesai_minggu"
                                                placeholder="07.00 - 10.00">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="flex-1 mr-4">
                            <input type="search" id="default-search" name="nomor_telepon"
                                class="w-full block p-4 ml-4 mb-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan nomer dokter" required />
                            <textarea type="search" id="default-search" name="alamat_lengkap"
                                class="w-full h-[150px] ml-4 block p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan alamat lengkap" required></textarea>
                            <div class="flex w-full py-4 mx-4 gap-2">
                                <button
                                    class="flex-1 bg-green-600 text-white px-4 py-2 mb-4 block w-[150px] rounded-md text-sm ">Simpan</button>
                                <button
                                    class="flex-1 bg-red-800 text-white px-4 py-2 mb-4 block w-[150px] rounded-md text-sm ">Batal</button>
                            </div>

                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.admin')

@section('title', 'Manajemen Dokter')
@section('content')
    <section class="content">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table id="table-dokter" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nomor
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nomor RM
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Alamat
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Layanan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 5; $i++)
                        <tr>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $i + 1 }}
                            </th>
                            <td class="px-6 py-4">
                                {{ 'RM1405' . $i + 1 }}
                            </td>
                            <td class="px-6 py-4">
                                Pengguna {{ $i }}
                            </td>
                            <td class="px-6 py-4">
                                $Jember
                            </td>
                            <td class="px-6 py-4">
                                22/10/03
                            </td>
                            <td class="px-6 py-4">
                                BPJS
                            </td>
                            <td class="px-6 py-4">
                                <a href="#"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <a href="#"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                            </td>
                        </tr>
                    @endfor

                </tbody>
            </table>
        </div>
    </section>
@endsection

@extends('layouts.admin')

@section('title', 'Jadwal Dokter')
@section('content')
    <section class="content">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table id="table-dokter" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">No</th>
                        <th scope="col" class="px-6 py-3">Hari</th>
                        <th scope="col" class="px-6 py-3">Jadwal Dokter</th>
                        <th scope="col" class="px-6 py-3">Nama Dokter</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dokter_per_hari as $hari => $jadwals)
                        @foreach ($jadwals as $index => $jadwal)
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                @if ($index == 0)
                                    <td class="px-6 py-4 border-r text-center w-4" rowspan="{{ count($jadwals) }}">
                                        {{ $loop->parent->index + 1 }}
                                    </td>
                                    <td class="px-6 py-4 border-r text-center" rowspan="{{ count($jadwals) }}">
                                        {{ $jadwal['hari'] }}
                                    </td>
                                @endif
                                <td class="px-6 py-4 border-r">{{ $jadwal['jadwal'] }}</td>
                                <td class="px-6 py-4">{{ $jadwal['nama_dokter'] }}</td>
                            </tr>
                        @endforeach
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-4 text-center">Data kosong</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
@endsection

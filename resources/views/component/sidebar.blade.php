    <aside id="sidebar-multi-level-sidebar"
        class="fixed top-0 left-0 z-40 w-[300px] h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="sidebar">
        <div class="h-full px-3 py-6 overflow-y-auto bg-blue ">
            <div class="w-full flex flex-col justify-center text-center items-center mb-10 gap-3">
                <img src="/img/logo.png" alt="as" class="w-[190px] ">
            </div>
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="{{ url('/dashboard') }}"
                        class="flex items-center p-3 {{ $title == 'Manajemen Bahan' ? 'text-white' : 'text-white hover:bg-gray-100' }} rounded-lg dark:text-white dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 {{ $title == 'Dashboard' ? ' text-red' : '  group-hover:text-gray-900' }} transition duration-75 "
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 18 18">
                            <path
                                d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap hover:text-gray-700">Dashboard</span>

                    </a>
                </li>
                <li>
                    <a href="{{ url('/pendaftaran-pasien') }}"
                        class="flex items-center p-3 {{ $title == 'Manajemen Bahan' ? 'text-white' : 'text-white hover:bg-gray-100' }} rounded-lg dark:text-white dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 {{ $title == 'Karyawan' ? 'text-white' : 'text-white  group-hover:text-gray-900' }} transition duration-75 dark:text-gray-400 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 18">
                            <path
                                d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap hover:text-gray-700">Pendaftaran Pasien</span>

                    </a>
                </li>
                <li>
                    <a href="{{ url('/keluhan-pasien') }}"
                        class="flex items-center p-3 {{ $title == 'Manajemen Menu' ? 'text-white' : 'text-white hover:bg-gray-100' }} rounded-lg dark:text-white  dark:hover:bg-gray-700 group">
                        <i class="ri-health-book-fill text-[20px]  group-hover:text-gray-900"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap hover:text-gray-700">Keluhan Pasien</span>

                    </a>
                </li>
                <li>
                    <a href="{{ url('/manajemen-dokter') }}"
                        class="flex items-center p-3 {{ $title == 'Manajemen Konten Promo' ? 'text-white' : 'text-white hover:bg-gray-100' }} rounded-lg dark:text-white  dark:hover:bg-gray-700 group">
                        <i class="ri-nurse-fill text-[20px] group-hover:text-gray-900"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap hover:text-gray-700">Manajemen Dokter</span>

                    </a>
                </li>
                <li>
                    <a href="{{ url('/jadwal-dokter') }}"
                        class="flex items-center p-3 {{ $title == 'Karyawan' ? 'text-white' : 'text-white hover:bg-gray-100' }}  rounded-lg dark:text-white dark:hover:bg-gray-700 group">
                        <i class="ri-calendar-schedule-fill text-[20px] group-hover:text-gray-900"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap hover:text-gray-700">Jadwal Dokter</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/manajemen-petugas') }}"
                        class="flex items-center p-3 {{ $title == 'Karyawan' ? 'text-white' : 'text-white hover:bg-gray-100' }}  rounded-lg dark:text-white dark:hover:bg-gray-700 group">
                        <i class="ri-team-fill text-[20px] group-hover:text-gray-900"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap hover:text-gray-700">Manajemen Petugas</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/rekam-medis') }}"
                        class="flex items-center p-3 {{ $title == 'Karyawan' ? 'text-white' : 'text-white hover:bg-gray-100' }}  rounded-lg dark:text-white dark:hover:bg-gray-700 group">
                        <i class="ri-pie-chart-fill text-[20px] group-hover:text-gray-900"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap hover:text-gray-700">Laporan Rekam Medis</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

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
                        <svg class="flex-shrink-0 w-5 h-5 {{ $title == 'Dashboard' ? ' text-red' : 'text-gray-900  group-hover:text-gray-900' }} transition duration-75 "
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
                        <svg class="flex-shrink-0 w-5 h-5 {{ $title == 'Manajemen Bahan' ? ' text-white' : 'text-white  group-hover:text-gray-900' }} transition duration-75 dark:text-gray-400 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 18 20">
                            <path
                                d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap hover:text-gray-700">Pendaftaran Pasien</span>

                    </a>
                </li>
                <li>
                    <a href="{{ url('/keluhan-pasien') }}"
                        class="flex items-center p-3 {{ $title == 'Manajemen Menu' ? 'text-white' : 'text-white hover:bg-gray-100' }} rounded-lg dark:text-white  dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 {{ $title == 'Pesanan' ? ' text-white' : 'text-white  group-hover:text-gray-900' }} transition duration-75  dark:text-gray-400 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 18 21">
                            <path
                                d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap hover:text-gray-700">Keluhan Pasien</span>

                    </a>
                </li>
                <li>
                    <a href="{{ url('/manajemen-dokter') }}"
                        class="flex items-center p-3 {{ $title == 'Manajemen Konten Promo' ? 'text-white' : 'text-white hover:bg-gray-100' }} rounded-lg dark:text-white  dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 {{ $title == 'Pesanan' ? 'text-white' : 'text-white  group-hover:text-gray-900' }} transition duration-75  dark:text-gray-400 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 18 21">
                            <path
                                d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap hover:text-gray-700">Manajemen Dokter</span>

                    </a>
                </li>
                <li>
                    <a href="{{ url('/jadwal-dokter') }}"
                        class="flex items-center p-3 {{ $title == 'Karyawan' ? 'text-white' : 'text-white hover:bg-gray-100' }}  rounded-lg dark:text-white dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 {{ $title == 'Karyawan' ? 'text-white' : 'text-white  group-hover:text-gray-900' }} transition duration-75 dark:text-gray-400 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 18">
                            <path
                                d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap hover:text-gray-700">Jadwal Dokter</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/manajemen-petugas') }}"
                        class="flex items-center p-3 {{ $title == 'Karyawan' ? 'text-white' : 'text-white hover:bg-gray-100' }}  rounded-lg dark:text-white dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 {{ $title == 'Karyawan' ? 'text-white' : 'text-white  group-hover:text-gray-900' }} transition duration-75 dark:text-gray-400 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 18">
                            <path
                                d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap hover:text-gray-700">Manajemen Petugas</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/laporan') }}"
                        class="flex items-center p-3 {{ $title == 'Karyawan' ? 'text-white' : 'text-white hover:bg-gray-100' }}  rounded-lg dark:text-white dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 {{ $title == 'Karyawan' ? 'text-white' : 'text-white  group-hover:text-gray-900' }} transition duration-75 dark:text-gray-400 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 18">
                            <path
                                d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap hover:text-gray-700">Laporan Rekam Medis</span>
                    </a>
                </li>
                <li class="sign-in">
                    <a href="#"
                        class="flex items-center p-3 text-white rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap hover:text-gray-700">Sign In</span>
                    </a>
                </li>

            </ul>
        </div>
    </aside>

<div class="sticky top-0 z-50">
    <nav class="bg-[#0088cc] border-gray-200 text-white">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
            <div class="flex items-center space-x-5 rtl:space-x-reverse">
                <div class="flex flex-row">
                    <img src="{{ asset('img/call.svg') }}" alt="" class="w-3 lg:w-5 h-fit">
                    <span class="self-center text-xs whitespace-nowrap mx-2">022-6623181</span>
                </div>
                <p>|</p>
                <div class="flex flex-row">
                    <img src="{{ asset('img/mail.svg') }}" alt="" class="w-3 lg:w-5 h-fit">
                    <span class="self-center text-xs whitespace-nowrap mx-2">admin@admin.com</span>
                </div>
            </div>

            <div class="flex items-center space-x-6 rtl:space-x-reverse">
                <div class="flex flex-row">
                    <img src="{{ asset('img/world.svg') }}" alt="" class="w-3 lg:w-5 h-fit">
                    <span class="self-center text-xs whitespace-nowrap mx-2">Kalibawang, Kulon Progo, Yogyakarta</span>
                </div>
            </div>
        </div>
    </nav>

    <nav class="bg-white border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <div class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('img/logo-dukuh.png') }}" class="hidden lg:block h-8" alt="Pantog Kulon Logo" />
                <a href="{{ route('home') }}"> <span
                        class="self-center text-2xl font-semibold whitespace-nowrap">Padukuhan Pantog
                        Kulon</span></a>

            </div>
            <button data-collapse-toggle="navbar-dropdown" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-dropdown" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                            class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto">Profile
                            Padukuhan
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="{{ route('tentang') }}" class="block px-4 py-2 hover:bg-gray-100">Tentang
                                        Kami</a>
                                </li>
                                <li>
                                    <a href="{{ route('visi.misi') }}" class="block px-4 py-2 hover:bg-gray-100">Visi Misi</a>
                                </li>
                                <li>
                                    <a href="{{ route('sejarah') }}" class="block px-4 py-2 hover:bg-gray-100">Sejarah</a>
                                </li>
                                <li>
                                    <a href="{{ route('anggota') }}" class="block px-4 py-2 hover:bg-gray-100">Stuktur Padukuhan</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="{{ route('demografis') }}"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Data
                            Penduduk</a>
                    </li>
                    <li>
                        <a href="{{ route('berita') }}"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Berita</a>
                    </li>
                    <li>
                        <a href="{{ route('agenda') }}"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Agenda
                            Kegiatan</a>
                    </li>
                    <li>
                        <a href="{{ route('galeri') }}"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Galeri</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
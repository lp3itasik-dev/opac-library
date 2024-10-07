<nav class="mx-auto bg-primary w-full z-20 top-0">
    <div class="bg-[#ECAE30] w-full py-1"></div>
    <div class="flex flex-wrap md:flex-nowrap items-center justify-between mx-auto p-5">
        <a href="{{ route('welcome.index') }}">
            <img src="{{ asset('img/lp3ipanjang.png') }}" alt="logo lp3i" width="180px">
        </a>
        <div class="flex md:order-2">
            @if (Route::has('login'))
                <div class="flex gap-3">
                    @auth
                        <a href="{{ route('welcome.index') }}"
                            class="border bg-secondary border-gray-200 hover:bg-blue-900 hidden md:block px-3 py-1 rounded-md font-medium text-sm text-white space-x-1">
                            <i class="fa-solid fa-circle-user"></i>
                            <span>{{ Auth::user()->name }}</span>
                        </a>
                        <form method="POST" action="{{ route('logout') }}"
                            class="border bg-red-500 border-gray-200 hover:bg-red-600 hidden md:block px-3 py-1 rounded-md font-medium text-sm text-white space-x-1">
                            @csrf
                            <button onclick="konfirmasiLogout()" data-modal-target="popup-modal"
                                data-modal-toggle="popup-modal" :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Keluar') }}
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="rounded-lg text-white mr-9 hidden md:block">
                            <i class="fa-solid fa-right-to-bracket fa-1x"></i> Login
                        </a>
                    @endauth
                </div>
            @endif
            <button onclick="hamburgerMenu()" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-slate-200 rounded-lg md:hidden hover:bg-secondary"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-end hidden w-full md:flex md:w-auto md:order-1" id="navbarHamburger">
            <ul
                class="flex flex-col p-4 text-sm md:p-0 mt-4 font-medium mx-2 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:ml-0">
                <li>
                    <a href="{{ route('welcome.index') }}"
                        class="block py-2 text-white rounded mx-1 md:bg-transparent md:hover:text-[#ECAE30] md:text-white md:p-0 md:dark:text-blue-500">Beranda</a>
                </li>
                <li>
                    <button onclick="dropdownTentang()" id="buttonTentang"
                        class="flex relative items-center justify-between w-full py-2 mx-1 text-white rounded md:hover:bg-transparent md:border-0 md:hover:text-[#ECAE30] md:p-0 md:w-auto">Tentang
                        Kami <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div id="tentangNavbar"
                        class="z-10 hidden absolute font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                        <ul class="py-2 text-sm text-gray-700">
                            <li>
                                <a href="{{ route('visimisi.index') }}" class="block px-4 py-2 hover:bg-gray-100">
                                    Visi Misi
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pustakawan.index') }}" class="block px-4 py-2 hover:bg-gray-100">
                                    Pustakawan
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('about.index') }}" class="block px-4 py-2 hover:bg-gray-100">
                                    Jam Pelayanan
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <button onclick="dropdownDigital()" id="buttonDigital"
                        class="flex relative items-center justify-between w-full py-2 mx-1 text-white rounded md:hover:bg-transparent md:border-0 md:hover:text-[#ECAE30] md:p-0 md:w-auto">Digital
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="digitalNavbar"
                        class="z-10 hidden absolute font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                        <ul class="py-2 text-sm text-gray-700">
                            <li>
                                <a href="https://jurnal.plb.ac.id/index.php/ekobima/index"
                                    class="block px-4 py-2 hover:bg-gray-100">Jurnal
                                    (Ekobima)</a>
                            </li>
                            <li>
                                <a href="https://opac.politekniklp3i-tasikmalaya.ac.id/slims8/"
                                    class="block px-4 py-2 hover:bg-gray-100">Opac</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="{{ route('service.index') }}"
                        class="block py-2 mx-1 text-white rounded md:hover:bg-transparent md:hover:text-[#ECAE30] md:p-0">Pelayanan</a>
                </li>
                <li>
                    <a href="{{ route('pedoman.index') }}"
                        class="block py-2 mx-1 text-white rounded md:hover:bg-transparent md:hover:text-[#ECAE30] md:p-0">Pedoman</a>
                </li>
                <li>
                    <a href="{{ route('arsip.index') }}"
                        class="block py-2 mx-1 text-white rounded md:hover:bg-transparent md:hover:text-[#ECAE30] md:p-0">Arsip</a>
                </li>
                <li>
                    <a href="{{ route('eb.index') }}"
                        class="block py-2 mx-1 text-white rounded md:hover:bg-transparent md:hover:text-[#ECAE30] md:p-0">E-Book</a>
                </li>
                <li>
                    <a href="{{ route('bc.index') }}"
                        class="block py-2 mx-1 text-white rounded md:hover:bg-transparent md:hover:text-[#ECAE30] md:p-0">Book
                        Chapter Dosen</a>
                </li>
                @if (Auth::check())
                    @if (Auth::user()->role == 'A')
                        <li>
                            <button onclick="dropdownMaster()" id="buttonMaster"
                                class="flex relative items-center justify-between w-full py-2 mx-1 text-white rounded md:hover:bg-transparent md:border-0 md:hover:text-[#ECAE30] md:p-0 md:w-auto">Master
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div id="masterNavbar"
                                class="z-10 hidden mx-auto absolute font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-54">
                                <ul class="py-2 text-sm text-gray-700">
                                    <li>
                                        <a href="{{ route('type.index') }}"
                                            class="block px-4 py-2 hover:bg-gray-100">Type</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('desiderata.index') }}"
                                            class="block px-4 py-2 hover:bg-gray-100">Desiderata</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('daftarapproverepo.index') }}"
                                            class="block px-4 py-2 hover:bg-gray-100">Approve
                                            Repo</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('editrepo.index') }}"
                                            class="block px-4 py-2 hover:bg-gray-100">View
                                            Repo</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('inputrepo.index') }}"
                                            class="block px-4 py-2 hover:bg-gray-100">Input
                                            Repo</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('bookchapter.index') }}"
                                            class="block px-4 py-2 hover:bg-gray-100">Book Chapter dan E-Book</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('vbcebook.index') }}"
                                            class="block px-4 py-2 hover:bg-gray-100">View Book Chapter dan E-Book</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('inputpedoman.index') }}"
                                            class="block px-4 py-2 hover:bg-gray-100">Input Pedoman</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('inputarsip.index') }}"
                                            class="block px-4 py-2 hover:bg-gray-100">Input Arsip</a>
                                    </li>
                                    <li>
                                        <a href="{{ asset('user_guide_admin.pdf') }}"
                                            class="block px-4 py-2 hover:bg-gray-100">User Guide</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    @elseif(Auth::user()->role == 'M')
                        <li>
                            <button onclick="dropdownRepository()"
                                class="flex relative items-center justify-between w-full py-2 mx-1 text-white rounded md:hover:bg-transparent md:border-0 md:hover:text-[#ECAE30] md:p-0 md:w-auto">Repository<svg
                                    class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div id="repositoryNavbar"
                                class="z-10 hidden absolute font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                <ul class="py-2 text-sm text-gray-700">
                                    @if (Auth::user()->status == '1')
                                        <li>
                                            <a href="{{ route('inputrepouser.index') }}"
                                                class="block px-4 py-2 hover:bg-gray-100">Input
                                                Repo</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('daftar.index') }}"
                                                class="block px-4 py-2 hover:bg-gray-100">Daftar
                                                Repository</a>
                                        </li>
                                    @endif
                                    <li>
                                        <a href="{{ asset('user_guide_mahasiswa.pdf') }}"
                                            class="block px-4 py-2 hover:bg-gray-100">User Guide</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    @else
                    @endif
                @else
                @endif
                <li>
                    @if (Route::has('login'))
                        <div class="flex flex-row items-center justify-center gap-2 mt-5">
                            @auth
                                <a href="{{ route('welcome.index') }}"
                                    class="border bg-secondary border-gray-200 hover:bg-blue-900 md:hidden px-3 py-1 ml-9 rounded-lg font-medium text-sm text-white space-x-1">
                                    <i class="fa-solid fa-circle-user"></i>
                                    <span>{{ Auth::user()->name }}</span>
                                </a>
                                <form method="POST" action="{{ route('logout') }}"
                                    class="mr-9 border  bg-red-500 border-gray-200 hover:bg-red-600 md:hidden px-3 py-1 rounded-lg font-medium text-sm text-white space-x-1">
                                    @csrf
                                    <button :href="route('logout')"
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                        {{ __('Keluar') }}
                                        </b>
                                </form>
                            @else
                                <a href="{{ route('login') }}" class="rounded-lg text-white md:hidden">
                                    <i class="fa-solid fa-right-to-bracket fa-1x "></i> Login
                                </a>
                            @endauth
                        </div>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>

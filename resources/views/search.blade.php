<x-landing-layout>
    <div class="container mt-16 mx-auto">
        <div>
            <div class="px-4 text-center items-center">
                <p class="font-bold text-black text-xl md:text-2xl mb-5">Daftar Repository</p>
            </div>
            <form class="mx-20">
                <label for="default-search"
                    class="mb-2 mx-10 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="search" name="search"
                        class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-full bg-white focus:ring-secondary focus:border-primary"
                        placeholder="" onkeypress="handleKeyPress(event)" required>
                    <button type="button" onclick="searchRepo()"
                        class="text-slate-900 absolute end-2.5 bottom-2.5 bg-white hover:bg-slate-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-4 py-2">
                        Cari</button>
                </div>
            </form>
            <section id="about" class="mt-16 mb-6">
                <div class="container mx-auto px-4">
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-2/3 px-4">
                            <div class="relative shadow-md sm:rounded-lg mb-8">
                                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                <span class="sr-only">Edit</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($repositories as $r)
                                            <tr
                                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                <th scope="row"
                                                    class="px-6 py-4 text-blue-400 font-bold text-lg whitespace-nowrap dark:text-white">
                                                    <a class="text-wrap"
                                                        href="{{ route('viewrepo.edit', $r->series) }}">{{ $r->title }}</a>
                                                    <div class="flex">
                                                        <h2
                                                            class="text-slate-400 text-dark font-normal md:mr-4 text-sm">
                                                            <i class="fa-solid fa-user"></i>
                                                            {{ $r->student_name }} [{{ $r->student }}]
                                                        </h2>
                                                        <h2 class="text-slate-400 font-normal mr-6 max-w-md text-sm">
                                                            <i class="fa-solid fa-user-tie"></i>
                                                            @if ($r->userlec)
                                                                {{ $r->userlec->name }}
                                                            @else
                                                                Tidak Diketahui
                                                            @endif
                                                        </h2>
                                                        <h2 class="text-red-600 font-bold max-w-md text-sm">
                                                            {{ date('Y', strtotime($r->created_at)) }}
                                                        </h2>
                                                    </div>
                                                </th>

                                                <td class="flex justify-end items-center gap-4 px-6 py-4 text-center">
                                                    <a
                                                        class="bg-red-400 hover:bg-red-500 text-white text-sm w-28 rounded-full px-3 py-1 shadow-lg">Tugas
                                                        Akhir</a>

                                                </td>
                                            </tr>
                                        @empty
                                            {{-- <p class="font-bold p-5">Data Tidak Ditemukan....</p> --}}
                                            <div class="flex flex-row justify-center">
                                                <lottie-player src="{{ asset('animation/empty.json') }}"
                                                    background="transparent" speed="1"
                                                    style="width: 300px; height: 350px;" loop autoplay></lottie-player>
                                            </div>
                                        @endforelse
                                    </tbody>
                                </table>
                                {{-- <nav class="flex items-center mx-auto px-4 flex-column flex-wrap md:flex-row justify-between pt-4 mb-5"
                                    aria-label="Table navigation">
                                    <span
                                        class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-4 md:mb-0 block w-full md:inline md:w-auto">Showing
                                        <span class="font-semibold text-gray-900 dark:text-white">1-10</span> of <span
                                            class="font-semibold text-gray-900 dark:text-white">1000</span></span>
                                    <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
                                        <li>
                                            <a href="#"
                                                class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                                        </li>
                                        <li>
                                            <a href="#" aria-current="page"
                                                class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                                        </li>
                                    </ul>
                                </nav> --}}
                            </div>

                        </div>

                        <div class="max-w-lg lg:w-1/3 mx-auto items-center">
                            <h3 class="font-semibold text-black text-xl mb-4 lg:text-2xl text-center">
                                Jenis Koleksi
                            </h3>
                            <div class="container max-w-lg lg:w-1/3 mx-auto flex flex-col justify-center items-center">
                                <a href="{{ route('searchrepo.edit', '3') }}"
                                    class="w-64 text-white flex text-md justify-center items-center bg-red-400 rounded-lg px-1 py-3 shadow-lg  mb-3">
                                    <i class="fa-solid fa-file-lines"></i>
                                    <p class="ml-3">
                                        Tugas Akhir
                                    </p>
                                </a>
                                <a href="{{ route('searchrepo.edit', '2') }}"
                                    class="w-64 text-white flex text-md justify-center items-center bg-red-400 rounded-lg px-1 py-3 shadow-lg  mb-3">
                                    <i class="fa-solid fa-file-lines"></i>
                                    <p class="ml-3">
                                        Laporan KKN
                                    </p>
                                </a>
                                <a href="{{ route('searchrepo.edit', '1') }}"
                                    class="w-64 text-white flex text-md justify-center items-center bg-red-400 rounded-lg px-1 py-3 shadow-lg mb-3">
                                    <i class="fa-solid fa-file-lines"></i>
                                    <p class="ml-3">
                                        Laporan KKI
                                    </p>
                                </a>
                                <a href="{{ route('searchrepo.edit', '16') }}"
                                    class="w-64 text-white flex text-md justify-center items-center bg-red-400 rounded-lg px-1 py-3 shadow-lg mb-16">
                                    <i class="fa-solid fa-file-lines"></i>
                                    <p class="ml-3">
                                        Laporan PKM
                                    </p>
                                </a>

                                <h3 class="font-semibold text-black text-xl mb-4">
                                    Program Studi
                                </h3>
                                <div>
                                    <div
                                        class="w-64 text-white text-lg flex flex-col text-center justify-center items-center bg-white rounded-lg px-1 py-3 shadow-lg mb-3">
                                        <div
                                            class="flex flex-row justify-center bg-primary h-[252px] w-[230px] rounded-lg shadow-md relative mx-auto mb-5">
                                            <img src="{{ asset('img/rounded.png') }}" alt="" class="ml-10">
                                            <div
                                                class="absolute text-xl text-wrap top-24 z-10 font-semibold text-center items-center justify-center">
                                                Manajemen Pemasaran
                                            </div>
                                        </div>

                                        <div
                                            class="bg-[#ECF0D1] h-[252px] w-[230px] rounded-lg shadow-md relative mx-auto">
                                            <img src="{{ asset('img/Rounded2.png') }}" alt=""
                                                class="ml-[60px]">
                                            <div
                                                class="absolute text-xl text-wrap top-24 z-10 text-black font-semibold text-center items-center justify-center">
                                                Manajemen Keuangan Perbankan
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
            </section>
        </div>
    </div>
    <div class="w-full">
        @include('components.footer')
    </div>
    <script>
        const searchRepo = async () => {
            let search = document.getElementById('search').value;
            urlSearch = `/searchrepo?search=${search}`;
            window.location.href = urlSearch;
        }
    </script>
    <script>
        function handleKeyPress(event) {
            if (event.key === 'Enter') {
                // Prevent the default form submission
                event.preventDefault();

                // Call your search function
                searchRepo();
            }
        }


        const getParams = () => {
            const urlParams = new URLSearchParams(window.location.search);

        const searchValue = urlParams.get('search');

        console.log('Nilai dari parameter search:', searchValue);
        document.getElementById('search').value = searchValue;
        }
        getParams();
    </script>
</x-landing-layout>

<script src="{{ asset('js/lottie-player.js') }}"></script>

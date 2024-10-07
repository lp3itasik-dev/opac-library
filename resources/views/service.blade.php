<x-landing-layout>
    <div class="container mx-auto justify-center md:ml-auto mb-20">
        <div class="px-4 pt-16 text-center items-center md:pt-10">
            <p class="font-bold text-black text-2xl md:text-2xl mb-4">PELAYANAN</p>
            <p class="mb-1 text-black text-lg text-wrap font-bold text-center">Perpustakaan Politeknik LP3I Kampus Tasikmalaya
                memiliki:</p>
            <div class="w-full px-4 pt-5 mb-8">
                <div class="md:flex flex-wrap text-center text-black font-light items-center justify-center">
                    <p class="md:mr-8">Buku Fiksi : 100.000</p>
                    <p class="md:mr-8">Buku Non-Fiksi : 100.000</p>
                    <p class="md:mr-8">Buku Keilmuan : 100.000</p>
                    <p>Buku Religi : 100.000</p>
                </div>
            </div>
        </div>
        <div class="text-center mb-8 text-black ">
            <p class="font-bold text-xl mb-2">Alur Peminjaman</p>
            <p class="text-md font-light">Berikut ini adalah alur peminjaman gan!</p>
        </div>

        <div class="container mx-auto px-10 grid grid-cols-1 md:grid-cols-2 gap-5">
            <div class="flex items-end">
                <div class="w-1/3 p-2 hidden md:block rounded-xl">
                    <div class="">
                        <lottie-player src="{{ asset('animation/1.json') }}" background="transparent" speed="1"
                            style="width: 250px; height: 300px;" loop autoplay class="-ml-3 -mb-8"></lottie-player>
                    </div>
                </div>
                <div class="w-2/3 p-2">
                    <div
                        class="py-10 w-80 rounded-md shadow-lg bg-primary flex flex-col justify-end relative justify-items-center items-center">
                        <div class="w-10 h-10 bg-[#F15C67] rounded-full flex absolute -top-5 -right-5 animate-bounce">
                            <span class="text-2xl m-auto text-white">1</span>
                        </div>
                        <p
                            class="text-white text-wrap group-hover:text-white selection:bg-lime-300 selection:text-slate-900 md:text-md px-4 hover:block">
                            Pemustaka datang ke perpustakaan LP3I Tasikmalaya untuk membaca dan belajar.</p>
                    </div>
                </div>
            </div>
            <div class="flex items-end">
                <div class="w-1/3 p-2 hidden md:block rounded-xl">
                    <div>
                        <lottie-player src="{{ asset('animation/2.json') }}" background="transparent" speed="1"
                            style="width: 250px; height: 300px;" loop autoplay class="-ml-3 -mb-[75px]"></lottie-player>
                        <hr class="border border-gray-300">
                    </div>
                </div>
                <div class="w-2/3 p-2">
                    <div
                        class="py-10 w-80 rounded-md shadow-lg bg-primary flex flex-col justify-end relative justify-items-center items-center">
                        <div class="w-10 h-10 bg-[#F15C67] rounded-full flex absolute -top-5 -right-5 animate-bounce">
                            <span class="text-2xl m-auto text-white">2</span>
                        </div>
                        <p
                            class="text-white text-wrap group-hover:text-white selection:bg-lime-300 selection:text-slate-900 md:text-md px-4 hover:block">
                            Pengguna melakukan pencarian buku menggunakan komputer OPAC di perpustakaan kampus.</p>
                    </div>
                </div>
            </div>
            <div class="flex items-end">
                <div class="w-1/3 p-2 hidden md:block rounded-xl">
                    <div>
                        <lottie-player src="{{ asset('animation/3.json') }}" background="transparent" speed="1"
                            style="width: 250px; height: 300px;" loop autoplay class="-ml-3 -mb-8"></lottie-player>
                        <hr class="border border-gray-300">
                    </div>
                </div>
                <div class="w-2/3 p-2">
                    <div
                        class="py-10 w-80 rounded-md shadow-lg bg-primary flex flex-col justify-end relative justify-items-center items-center">
                        <div class="w-10 h-10 bg-[#F15C67] rounded-full flex absolute -top-5 -right-5 animate-bounce">
                            <span class="text-2xl m-auto text-white">3</span>
                        </div>
                        <p
                            class="text-white text-wrap group-hover:text-white selection:bg-lime-300 selection:text-slate-900 md:text-md px-4 hover:block">
                            Pengguna bawa buku, KTA, ingin meminjam di perpustakaan LP3I Tasikmalaya.</p>
                    </div>
                </div>
            </div>
            <div class="flex items-end">
                <div class="w-1/3 p-2 hidden md:block rounded-xl">
                    <div>
                        <lottie-player src="{{ asset('animation/4.json') }}" background="transparent" speed="1"
                            style="width: 250px; height: 300px;" loop autoplay class="-ml-3 -mb-16"></lottie-player>
                        <hr class="border border-gray-300">
                    </div>
                </div>
                <div class="w-2/3 p-2">
                    <div
                        class="py-10 w-80 rounded-md shadow-lg bg-primary flex flex-col justify-end relative justify-items-center items-center">
                        <div class="w-10 h-10 bg-[#F15C67] rounded-full flex absolute -top-5 -right-5 animate-bounce">
                            <span class="text-2xl m-auto text-white">4</span>
                        </div>
                        <p
                            class="text-white text-wrap group-hover:text-white selection:bg-lime-300 selection:text-slate-900 md:text-md px-4 hover:block">
                            Pengguna mencari buku di rak dengan memanfaatkan mesin pencarian yang tersedia.</p>
                    </div>
                </div>
            </div>
            <div class="flex items-end">
                <div class="w-1/3 p-2 hidden md:block rounded-xl">
                    <div>
                        <lottie-player src="{{ asset('animation/5.json') }}" background="transparent" speed="1"
                            style="width: 250px; height: 300px;" loop autoplay class="-ml-3 -mb-14"></lottie-player>
                        <hr class="border border-gray-300">
                    </div>
                </div>
                <div class="w-2/3 p-2">
                    <div
                        class="py-10 w-80 rounded-md shadow-lg bg-primary flex flex-col justify-end relative justify-items-center items-center">
                        <div class="w-10 h-10 bg-[#F15C67] rounded-full flex absolute -top-5 -right-5 animate-bounce">
                            <span class="text-2xl m-auto text-white">5</span>
                        </div>
                        <p
                            class="text-white text-wrap group-hover:text-white selection:bg-lime-300 selection:text-slate-900 md:text-md px-4 hover:block">
                            Petugas perpustakaan sirkulasi buku, data peminjaman pengguna dilakukan.</p>
                    </div>
                </div>
            </div>
            <div class="flex items-end">
                <div class="w-1/3 p-2 hidden md:block rounded-xl">
                    <div>
                        <lottie-player src="{{ asset('animation/6.json') }}" background="transparent" speed="1"
                            style="width: 250px; height: 300px;" loop autoplay class="-ml-3 -mb-8"></lottie-player>
                        <hr class="border border-gray-300">
                    </div>
                </div>
                <div class="w-2/3 p-2">
                    <div
                        class="py-10 w-80 rounded-md shadow-lg bg-primary flex flex-col justify-end relative justify-items-center items-center">
                        <div class="w-10 h-10 bg-[#F15C67] rounded-full flex absolute -top-5 -right-5 animate-bounce">
                            <span class="text-2xl m-auto text-white">6</span>
                        </div>
                        <p
                            class="text-white text-wrap group-hover:text-white selection:bg-lime-300 selection:text-slate-900 md:text-md px-4 hover:block">
                            Buku sudah dapat dipinjam di perpustakaan, manfaatkan kesempatan ini sekarang juga.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="-ml-5 md:ml-auto text-center mb-8 text-black mt-16">
            <p class="font-bold text-xl mb-2">Pengajuan Pengadaan Buku</p>
            <p class="text-sm md:text-md font-light">Berikut ini adalah menu untuk pengadaan buku.</p>
        </div>
        <form action="{{ route('service.store') }}" method="post">
            @csrf
            <div class="container mx-auto">
                <div class="ml-16 md:flex md:flex-wrap md:gap-6 md:justify-evenly">
                    <div>
                        <input type="text" id="judul_buku" name="judul_buku"
                            class="md:-ml-12 mt-4 bg-gray-50 border shadow-lg border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-80 h-12 md:w-[550px] p-2.5"
                            placeholder="Tulis judul buku disini..." required>
                    </div>
                    <div>
                        <input type="text" id="pengarang" name="pengarang"
                            class="md:-ml-8 mt-4 bg-gray-50 border shadow-lg border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-80 h-12 md:w-[650px] p-2.5"
                            placeholder="Tulis Nama Pengarang disini..." required>
                    </div>
                    <button type="submit"
                        class="ml-20 md:-ml-8 mt-4 text-white shadow-lg bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-full text-sm px-9 py-2.5 text-center inline-flex items-center">
                        Ajukan
                        <i class="fa-solid fa-circle-up ml-3"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="w-full">
        @include('components.footer')
    </div>
</x-landing-layout>

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/lottie-player.js') }}"></script>

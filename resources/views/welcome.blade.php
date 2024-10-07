<x-landing-layout>
    <section
        class="mx-auto max-w-screen bg-center bg-no-repeat bg-[url('/img/gedung.png')] bg-gray-800 bg-cover bg-blend-multiply">
        <div class="py-12">
            <div class="text-center items-center flex flex-col justify-center ">
                <p class="font-bold text-white text-xl md:text-2xl mb-5">PERPUSTAKAAN DIGITAL</p>
                <p class="font-bold text-white  text-md md:text-xl mb-1">Tugas Akhir</p>
                <p class="mb-2 text-white ">Karya Tulis Ilmiah, Panduan, serta Referensi</p>
                <div
                    class="mb-6 flex flex-row justify-center items-center rounded-3xl w-80 bg-[#ECAE30] shadow-lg border-white">
                    <div>
                        <p id="tanggal" class=" text-white font-semibold text-md  p-2"></p>
                    </div>
                    <div>
                        <p id="jam" class=" text-white font-semibold text-md  p-2"></p>
                    </div>
                </div>

            </div>
            <div class="mx-4 md:mx-20">
                <label for="default-search"
                    class="mb-2 mx-10 text-sm font-medium text-gray-900 sr-only">Search</label>
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
                        onkeypress="handleKeyPress(event)" placeholder="Cari Repository Di sini ....." required>
                    <button type="button" onclick="searchRepo()"
                        class="text-slate-900 absolute end-2.5 bottom-2.5 bg-white hover:bg-slate-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-4 py-2">
                        Cari</button>
                </div>
            </div>
            <div class="w-full px-4 pt-5 mb-16">
                <div class="flex flex-wrap gap-6 text-center mx-auto text-white items-center justify-center">
                    <p>Tugas Akhir: {{ $tugas_akhir->count() }}</p>
                    <p>Laporan KKN: {{ $kkn->count() }}</p>
                    <p>Laporan KKI: {{ $kki->count() }}</p>
                    <p>Laporan PKM: {{ $pkm->count() }}</p>
                </div>
            </div>


            <div class="text-center mb-8 text-white ">
                <p class="font-bold text-xl">Prodi</p>
                <p class="text-md font-light">Berikut ini adalah kategori dari Program Studi.</p>
            </div>

            <div class="container mx-auto px-10 font-inter sm:flex sm:flex-wrap sm:justify-evenly text-center">
                <div
                    class="rounded-md shadow-sm bg-white overflow-hidden sm:mb-0 mb-10 sm:w-64 md:w-80 lg:w-[500px] hover:border-2 hover:border-white hover:scale-105 transition-all duration-300">
                    <img src="{{ asset('img/mp.jpeg') }}" alt="Image Caption" class="w-full">
                    <div class="px-6 py-4">
                        <div class="font-semibold text-md mb-2 text-slate-700">Manajemen Pemasaran</div>
                        <p class="text-sm text-slate-600">Politeknik LP3I Kampus Tasikmalaya</p>
                    </div>
                </div>

                <div
                    class="rounded-md shadow-sm bg-white overflow-hidden sm:mb-0 mb-10 sm:w-64 md:w-80 lg:w-[500px] hover:border-2 hover:border-white hover:scale-105 transition-all duration-300">
                    <img src="{{ asset('img/mkp.jpeg') }}" alt="Image Caption" class="w-full">
                    <div class="px-6 py-4">
                        <div class="font-semibold text-md mb-2 text-slate-700">Manajemen Keuangan Perbankan</div>
                        <p class="text-sm text-slate-600">Politeknik LP3I Kampus Tasikmalaya</p>
                    </div>
                </div>
            </div>
    </section>

    <div class="w-full">
        @include('components.footer')
    </div>
    @push('scripts')
        <script>
            // Mendapatkan tanggal hari ini
            var today = new Date();

            // Membuat objek formatter dengan opsi untuk format long date
            var options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };
            var formatter = new Intl.DateTimeFormat('id-ID', options);

            // Mendapatkan tanggal dalam format long date
            var longDate = formatter.format(today);

            // Menampilkan tanggal di elemen dengan id "tanggal"
            document.getElementById('tanggal').innerHTML = longDate;

            function updateClock() {
                // Mendapatkan waktu saat ini
                var currentTime = new Date();

                // Mendapatkan jam, menit, dan detik
                var hours = currentTime.getHours();
                var minutes = currentTime.getMinutes();
                var seconds = currentTime.getSeconds();

                // Format jam dengan menambahkan "0" di depan jika angkanya satu digit
                hours = (hours < 10) ? "0" + hours : hours;
                minutes = (minutes < 10) ? "0" + minutes : minutes;
                seconds = (seconds < 10) ? "0" + seconds : seconds;

                // Menampilkan waktu di elemen dengan id "jam"
                document.getElementById('jam').innerHTML = hours + ":" + minutes + ":" + seconds;
            }

            // Memanggil fungsi updateClock setiap detik (1000 milidetik)
            setInterval(updateClock, 1000);

            // Memanggil fungsi untuk pertama kali saat halaman dimuat
            updateClock();
        </script>
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
        </script>
    @endpush
</x-landing-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="shortcut icon" href="{{asset('img/lp3iwarna.png')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<body class="bg-center bg-no-repeat bg-[url('/img/gedung.png')] bg-gray-800 bg-cover bg-blend-multiply">
    {{ view('components.navbar') }}

    {{-- Section Top Start --}}
    <div class="container mx-auto mt-8 mb-20">
        <div>
            <div>
                <div class="px-4 pt-16 text-center items-center flex flex-col justify-center">
                    <p class="font-bold text-white text-xl md:text-2xl mb-5">PERPUSTAKAAN DIGITAL</p>
                    <p class="font-semibold text-white  text-md md:text-xl mb-1">Tugas Akhir</p>
                    <p class="mb-2 text-white ">Karya Tulis Ilmiah, Panduan, serta Referensi</p>
                    <div class="mb-6 flex flex-row justify-center items-center rounded-3xl w-80 bg-[#ECAE30] shadow-lg border-white">
                        <div>
                            <p id="tanggal" class=" text-white font-semibold text-md  p-2"></p>
                        </div>
                        <div>
                            <p id="jam" class=" text-white font-semibold text-md  p-2"></p>
                        </div>
                    </div>
                    
                </div>
                <form class="mx-20">   
                    <label for="default-search" class="mb-2 mx-10 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-full bg-white focus:ring-secondary focus:border-primary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                        <a href="{{ route('search.index') }}" type="submit" class="text-slate-900 absolute end-2.5 bottom-2.5 bg-white hover:bg-slate-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-4 py-2">
                            Cari</a>
                    </div>
                </form>
            </div>
            <section class="max-w-6xl px-4 md:px-0 mx-auto py-12">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-x-8">
                    <a href="{{route('daftarapproverepo.index')}}" class="bg-[#ECAE30] shadow-md shadow-[#ECAE30] mb-5 flex rounded-2xl p-5">
                        <div class="bg-white rounded-full p-[16px] text-[#ECAE30] grid place-items-center text-center">
                            <i class="fa-solid fa-check fa-2xl"></i>
                        </div>
                        <div href="" class="text-white text-right w-full justify-end">
                            <div class="text-lg font-semibold">Approve</div>
                            <div>160</div>
                        </div>  
                    </a>
                    <a href="{{route('desiderata.index')}}" class="bg-[#F15C67] shadow-md shadow-[#F15C67] mb-5 flex rounded-2xl p-5">
                        <div class="bg-white rounded-full p-[16px] text-[#F15C67] grid place-items-center text-center">
                            <i class="fa-solid fa-book fa-2xl"></i>
                        </div>
                        <div class="text-white text-right w-full justify-end">
                            <div class="text-lg font-semibold">Desiderata</div>
                            <div>160</div>
                        </div>  
                    </a>
                    <a href="{{route('repository.index')}}" class="bg-[#00AEB6] shadow-md shadow-[#00AEB6] mb-5 flex rounded-2xl p-5">
                        <div class="bg-white rounded-full p-[16px] text-[#00AEB6] grid place-items-center text-center">
                            <i class="fa-solid fa-clipboard-list fa-2xl"></i>
                        </div>
                        <div class="text-white text-right w-full justify-end">
                            <div class="text-lg font-semibold">Repository</div>
                            <div>160</div>
                        </div>  
                    </a>
                </div>
            </section>
        </div>
    </div>
    {{-- Section Top End --}}

    
    {{ view('components.footer') }}

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        const dropdownDigital = () => {
            let content = document.getElementById('digitalNavbar');
            let nonactive = content.classList.contains('hidden');
            if(nonactive){
                content.classList.remove('hidden');
            }else{
                content.classList.add('hidden');
            }
        }

        const dropdownMaster = () => {
            let content = document.getElementById('masterNavbar');
            let nonactive = content.classList.contains('hidden');
            if(nonactive){
                content.classList.remove('hidden');
            }else{
                content.classList.add('hidden');
            }
        }

        const dropdownRepository = () => {
            let content = document.getElementById('repositoryNavbar');
            let nonactive = content.classList.contains('hidden');
            if(nonactive){
                content.classList.remove('hidden');
            }else{
                content.classList.add('hidden');
            }
        }

        const dropdownTentang = () => {
            let content = document.getElementById('tentangNavbar');
            let nonactive = content.classList.contains('hidden');
            if(nonactive){
                content.classList.remove('hidden');
            }else{
                content.classList.add('hidden');
            }
        }

        const hamburgerMenu = () => {
            let content = document.getElementById('navbarHamburger');
            let nonactive = content.classList.contains('hidden');
            if(nonactive){
                content.classList.remove('hidden');
            }else{
                content.classList.add('hidden');
            }
        }

        // Mendapatkan tanggal hari ini
        var today = new Date();

        // Membuat objek formatter dengan opsi untuk format long date
        var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
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
</body>

</html>

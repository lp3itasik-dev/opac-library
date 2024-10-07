<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="shortcut icon" href="{{ asset('img/lp3iwarna.png') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('js/OwlCarousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/OwlCarousel/dist/assets/owl.theme.default.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/select2-input.css') }}">
    <!-- DataTable -->
    <link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

    <style>
        html,
        /* body {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Roboto Mono', monospace;
            font-family: 'Source Code Pro', monospace;
        } */

        td,
        th {
            white-space: nowrap;
        }

        .dataTables_length>label {
            font-size: 14px !important;
            color: #6b7280 !important;
        }

        .dataTables_info,
        .paginate_button {
            font-size: 14px !important;
            color: #6b7280 !important;
        }

        .dataTables_length>label>select {
            font-size: 14px !important;
            padding: 3px 20px 3px 15px !important;
            border-radius: 10px !important;
            margin: 5px !important;
        }

        .dataTables_filter>label {
            font-size: 14px !important;
        }

        .dataTables_filter>label>input {
            margin: 5px !important;
            border-radius: 10px !important;
        }

        /* .js-example-placeholder-single {
            height: 1000px;
        } */

        .select2-container .select2-selection--single {
            width: 100% !important;
            background-color: #f9fafb;
            border: 1px solid #d1d5db !important;
            padding: 0.5rem 0.75rem;
            font-size: 0.875rem;
            height: 43px;
            border-radius: 0.4rem;
            color: #1f2937;
        }

        .select2-container .select2-selection--single .select2-selection__arrow {
            top: 20% !important;
            right: 8px;
        }

        .select2-container .select2-selection--single .select2-selection__rendered {
            font-size: 14px !important;
            top: -2px;
            left: -6px;
            position: relative;
            color: #1f2937;
        }

        .select2-search__field {
            font-size: 14px !important;
            border-radius: 0.5rem;
        }

        .select2-results {
            font-size: 14px !important;
            border-radius: 0px 10px 0px 10px;
        }
    </style>


</head>


<body>
    @include('components.navbar')
    <div id="loading"
        class="hidden top-0 bg-black w-full h-full min-h-screen bg-opacity-40 fixed z-40 flex justify-center items-center transition duration-150">
        <lottie-player src="{{ asset('animation/loading.json') }}" background="transparent" speed="1"
            style="width: 250px; height: 300px;" loop autoplay class="-ml-3 -mb-8"></lottie-player>
    </div>
    <main>
        {{ $slot }}
    </main>
    @stack('footer')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    <script src="{{ asset('js/lottie-player.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
        const showLoading = () => {
            const loadingElement = document.getElementById('loading');
            loadingElement.classList.remove('hidden');
        }
        const hideLoading = () => {
            const loadingElement = document.getElementById('loading');
            loadingElement.classList.add('hidden');
        }
    </script>
    @stack('scripts')
    <script>
        const dropdownDigital = () => {
            let content = document.getElementById('digitalNavbar');
            let nonactive = content.classList.contains('hidden');
            if (nonactive) {
                content.classList.remove('hidden');
            } else {
                content.classList.add('hidden');
            }
            // Menutup dropdown jika diklik di luar dropdown
            window.addEventListener('click', function(event) {
                var buttonDigital = document.getElementById('buttonDigital');
                var digitalNavbar = document.getElementById('digitalNavbar');

                if (!buttonDigital.contains(event.target) && !digitalNavbar.contains(event.target)) {
                    digitalNavbar.classList.add('hidden');
                }
            });
        }

        const dropdownMaster = () => {
            let content = document.getElementById('masterNavbar');
            let nonactive = content.classList.contains('hidden');
            if (nonactive) {
                content.classList.remove('hidden');
            } else {
                content.classList.add('hidden');
            }

            // Menutup dropdown jika diklik di luar dropdown
            window.addEventListener('click', function(event) {
                var buttonMaster = document.getElementById('buttonMaster');
                var masterNavbar = document.getElementById('masterNavbar');

                if (!buttonMaster.contains(event.target) && !masterNavbar.contains(event.target)) {
                    masterNavbar.classList.add('hidden');
                }
            });
        }

        const dropdownRepository = () => {
            let content = document.getElementById('repositoryNavbar');
            let nonactive = content.classList.contains('hidden');
            if (nonactive) {
                content.classList.remove('hidden');
            } else {
                content.classList.add('hidden');
            }
        }

        const dropdownTentang = () => {
            let content = document.getElementById('tentangNavbar');
            let nonactive = content.classList.contains('hidden');
            if (nonactive) {
                content.classList.remove('hidden');
            } else {
                content.classList.add('hidden');
            }
            // Menutup dropdown jika diklik di luar dropdown
            window.addEventListener('click', function(event) {
                var buttonTentang = document.getElementById('buttonTentang');
                var tentangNavbar = document.getElementById('tentangNavbar');

                if (!buttonTentang.contains(event.target) && !tentangNavbar.contains(event.target)) {
                    tentangNavbar.classList.add('hidden');
                }
            });
        }

        const hamburgerMenu = () => {
            let content = document.getElementById('navbarHamburger');
            let nonactive = content.classList.contains('hidden');
            if (nonactive) {
                content.classList.remove('hidden');
            } else {
                content.classList.add('hidden');
            }
        }


        const konfirmasiLogout = () => {
            let konfirmasi = confirm("Apakah Anda yakin ingin logout?");
            if (konfirmasi) {
                alert("Logout berhasil!");
            } else {
                alert("Logout dibatalkan.");
                return true;
            }
        }
    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- DataTable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

    {{-- Fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    {{-- Select2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    {{-- Text Editor --}}
    <!-- Include Quill stylesheet -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    @stack('styles');

    <!-- Include Quill library -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <style>
        html,
        body {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
            /* font-family: 'Roboto Mono', monospace; */
            /* font-family: 'Source Code Pro', monospace; */
        }

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
    </style>
</head>

<body class="font-sans antialiased ">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(".js-example-placeholder-single").select2({
            placeholder: "Pilih Type ...",
            allowClear: true
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</body>

</html>

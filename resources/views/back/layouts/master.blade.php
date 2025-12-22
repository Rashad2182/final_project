<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>@yield('title')</title>
    <!-- CSS files -->
    <!-- Bootstrap / Tabler Core CSS -->
    <link href="{{ asset('dashboard') }}/css/tabler.min.css?1692870487" rel="stylesheet"/>
    <link href="{{ asset('dashboard') }}/css/tabler-flags.min.css?1692870487" rel="stylesheet"/>
    <link href="{{ asset('dashboard') }}/css/tabler-payments.min.css?1692870487" rel="stylesheet"/>
    <link href="{{ asset('dashboard') }}/css/tabler-vendors.min.css?1692870487" rel="stylesheet"/>
    <link href="{{ asset('dashboard') }}/css/demo.min.css?1692870487" rel="stylesheet"/>

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont,
            San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;

            --bg-dark: #0b0b0b;
            --text-light: #e5e5e5;
            --accent-red: #dc3545;
        }

        body {
            font-family: var(--tblr-font-sans-serif);
            font-feature-settings: "cv03", "cv04", "cv11";
            background-color: var(--bg-dark);
            color: var(--text-light);
            margin: 0;
        }

        /* Ümumi section-lar üçün */
        section,
        .page,
        .page-wrapper {
            background-color: var(--bg-dark);
        }

        /* Linklər */
        a {
            color: var(--accent-red);
            text-decoration: none;
        }

        a:hover {
            color: #ff4d5a;
        }
    </style>
    @yield('css')
</head>

<body class=" layout-fluid">

<div class="page">
    {{--    Sidebar--}}
    @include('back.includes.sidebar')
    {{--    Header--}}
    @include('back.includes.header')
    <div class="page-wrapper">
        <div class="page-body">
            <div class="container-xl">
                <div class="row row-deck row-cards">
                    @yield('content')
                </div>
            </div>
        </div>
        @include('back.includes.footer')
    </div>
</div>
<!-- jQuery (HƏMİŞƏ BİRİNCİ) -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- DataTables -->
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

<!-- Toastr -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Charts & Maps -->
<script src="{{ asset('dashboard') }}/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="{{ asset('dashboard') }}/libs/jsvectormap/dist/js/jsvectormap.min.js"></script>
<script src="{{ asset('dashboard') }}/libs/jsvectormap/dist/maps/world.js"></script>
<script src="{{ asset('dashboard') }}/libs/jsvectormap/dist/maps/world-merc.js"></script>

<!-- Tabler Core (ƏVVƏL) -->
<script src="{{ asset('dashboard') }}/js/tabler.min.js"></script>
<script src="{{ asset('dashboard') }}/js/demo.min.js"></script>

<!-- Custom JS (SONDA, 1 DƏFƏ) -->
<script src="{{ asset('dashboard') }}/js/main.js"></script>

@yield('js')

</body>
</html>



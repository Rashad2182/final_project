<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name')}} | @yield('title')</title>
    <!-- Favicon -->
    <link href="{{ asset('it-project') }}/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Oswald:wght@600&display=swap"
          rel="stylesheet">

    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('it-project') }}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ asset('it-project') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('it-project') }}/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Template Stylesheet -->
    <link href="{{ asset('it-project') }}/css/style.css" rel="stylesheet">
    <style>
        body {
            background: #0e0e0e;
            color: #fff;
            font-family: 'Poppins', sans-serif;
        }

        /* SIDEBAR */
        .sidebar {
            width: 250px;
            height: 100vh;
            background: #111;
            position: fixed;
            top: 0;
            left: 0;
            padding: 30px 0;
            border-right: 2px solid #e60000;
        }

        .sidebar a {
            display: block;
            padding: 14px 25px;
            font-size: 15px;
            color: #ccc;
            text-decoration: none;
            margin-bottom: 5px;
            transition: 0.3s;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: #e60000;
            color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 15px #e60000;
        }

        /* NAVBAR */
        .top-navbar {
            margin-left: 250px;
            height: 65px;
            background: #111;
            display: flex;
            align-items: center;
            padding: 0 25px;
            border-bottom: 2px solid #e60000;
        }

        /* PAGE CONTENT */
        .content {
            margin-left: 250px;
            padding: 30px;
        }

        /* CARDS */
        .card-box {
            background: #111;
            padding: 25px;
            border-radius: 12px;
            border: 1px solid #e60000;
            transition: 0.3s;
        }

        .card-box:hover {
            box-shadow: 0 0 20px #e60000;
        }

        .card-title {
            color: #e60000;
            font-size: 18px;
            margin-bottom: 10px;
        }

        /* TABLE */
        .custom-table {
            background: #111;
            border: 1px solid #e60000;
            border-radius: 12px;
            overflow: hidden;
        }

        .custom-table th {
            background: #e60000 !important;
            color: #fff !important;
        }

        .custom-table tr {
            color: #ccc;
        }

        .custom-table tr:hover {
            background: #1a1a1a;
        }

        .search-box input {
            background: #1a1a1a;
            border: 1px solid #e60000;
            color: white;
        }

        .search-box input:focus {
            box-shadow: 0 0 12px #e60000;
            border-color: #ff0000;
        }
    </style>
    @yield('css')
</head>
<body>

@include('back.includes.header')

@yield('content')

@include('back.includes.footer')


<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('it-project') }}/lib/wow/wow.min.js"></script>
<script src="{{ asset('it-project') }}/lib/easing/easing.min.js"></script>
<script src="{{ asset('it-project') }}/lib/waypoints/waypoints.min.js"></script>
<script src="{{ asset('it-project') }}/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="{{ asset('it-project') }}/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/js/all.min.js"></script>
<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@yield('js')
</body>
</html>



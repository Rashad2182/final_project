<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }} | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset('it-project') }}/img/favicon.ico" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Oswald:wght@600&display=swap" rel="stylesheet">

    <!-- Template Bootstrap -->
    <link href="{{ asset('it-project') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries -->
    <link href="{{ asset('it-project') }}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ asset('it-project') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flag-icons/css/flag-icons.min.css">

    <!-- Template Style -->
    <link href="{{ asset('it-project') }}/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>
    <style>
        /* =============  TOASTR COLORS FIX ============= */

        #toast-container .toast-success {
            background-color: #28a745 !important;
            color: #fff !important;
        }

        #toast-container .toast-error {
            background-color: #dc3545 !important;
            color: #fff !important;
        }

        #toast-container .toast-info {
            background-color: #17a2b8 !important;
            color: #fff !important;
        }

        #toast-container .toast-warning {
            background-color: #ffc107 !important;
            color: #212529 !important;
        }
    </style>
    @yield('css')
</head>

<body>

<!-- Spinner Start -->
<div id="spinner"
     class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="visually-hidden">@lang('messages.loading')...</span>
    </div>
</div>

<!-- Spinner End -->
@include('front.includes.header')

@yield('content')

@include('front.includes.footer')
<!-- Back to Top -->
<a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="{{ asset('it-project') }}/lib/wow/wow.min.js"></script>
<script src="{{ asset('it-project') }}/lib/easing/easing.min.js"></script>
<script src="{{ asset('it-project') }}/lib/waypoints/waypoints.min.js"></script>
<script src="{{ asset('it-project') }}/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('it-project') }}/js/main.js"></script>
@yield('js')
</body>
</html>



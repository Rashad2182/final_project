<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.js"></script>
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Oswald:wght@600&display=swap"
          rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('it-project') }}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ asset('it-project') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flag-icons/css/flag-icons.min.css">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('it-project') }}/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <title>@lang('messages.register')</title>
    <style>
        body {
            background-size: cover;
            background: black center;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Poppins', sans-serif;
        }

        .register-card {
            width: 420px;
            padding: 30px;
            background: rgba(20, 20, 20, 0.7);
            border-radius: 15px;
            box-shadow: 0 0 25px red;
            border: 1px solid rgba(255, 0, 0, 0.4);
            backdrop-filter: blur(10px);
            animation: fadeIn 0.8s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.97);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .register-card h2 {
            color: red;
            text-align: center;
            margin-bottom: 25px;
            text-shadow: 0 0 10px red;
        }

        .form-control {
            background: rgba(0, 0, 0, 0.6);
            border: 1px solid red;
            color: white;
            height: 45px;
        }

        .form-control:focus {
            box-shadow: 0 0 12px red;
            border-color: red;
            color: white;
        }

        label {
            color: red;
            text-shadow: 0 0 5px red;
        }

        .btn-register {
            width: 100%;
            background: red;
            border: none;
            padding: 10px;
            font-weight: 600;
            border-radius: 8px;
            box-shadow: 0 0 12px red;
            transition: 0.3s;
        }

        .btn-register:hover {
            background: #b30000;
            box-shadow: 0 0 18px red;
        }

        .text-center a {
            color: goldenrod;
            text-decoration: none;
        }

        .text-center a:hover {
            text-shadow: 0 0 12px goldenrod;
        }

        @media (max-width: 480px) {
            .register-card {
                width: 95%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
<div class="register-card">
    <h2><i class="fa fa-user"></i>@lang('messages.sign up')</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <!-- Name -->
        <div class="mb-3">
            <label for="fullname">@lang('messages.name')</label>
            <input style="background-color: black" id="fullname" type="text"
                   class="form-control @error('fullname') is-invalid @enderror"
                   name="fullname" value="{{ old('fullname') }}" required>

            @error('name')
            <span class="invalid-feedback" role="alert" style="display:block;color:red">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label for="email">@lang('messages.email')</label>
            <input style="background-color: black" id="email" type="email"
                   class="form-control @error('email') is-invalid @enderror"
                   name="email" value="{{ old('email') }}" required>

            @error('email')
            <span class="invalid-feedback" role="alert" style="display:block;color:red">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password">@lang('messages.password')</label>
            <input style="background-color: black" id="password" type="password"
                   class="form-control @error('password') is-invalid @enderror"
                   name="password" required>

            @error('password')
            <span class="invalid-feedback" role="alert" style="display:block;color:red">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mb-3">
            <label for="password-confirm">@lang('messages.password') (@lang('messages.confirm'))</label>
            <input style="background-color: black" id="password-confirm" type="password"
                   class="form-control" name="password_confirmation" required>
        </div>

        <!-- Button -->
        <button type="submit" class="btn-register">
            @lang('messages.sign up') <i class="fa-solid fa-paper-plane"></i>
        </button>
    </form>
        <p class="text-center mt-3" style="color:white;">
            @lang('messages.do you already have an account?') <a href="{{ route('login') }}">@lang('messages.login')</a>
        </p>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


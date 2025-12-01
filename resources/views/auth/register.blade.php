<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <title>Register</title>
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
    <h2><i class="fa fa-user"></i> Qeydiyyat</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <!-- Name -->
        <div class="mb-3">
            <label for="name">Ad Soyad</label>
            <input style="background-color: black" id="name" type="text"
                   class="form-control @error('name') is-invalid @enderror"
                   name="name" value="{{ old('name') }}" required autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert" style="display:block;color:red">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label for="email">Email</label>
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
            <label for="password">Şifrə</label>
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
            <label for="password-confirm">Şifrə (Təkrar)</label>
            <input style="background-color: black" id="password-confirm" type="password"
                   class="form-control" name="password_confirmation" required>
        </div>

        <!-- Button -->
        <button type="submit" class="btn-register">
            Qeydiyyat
        </button>

        <p class="text-center mt-3" style="color:white;">
            Artıq hesabın var? <a href="{{ route('login') }}">Daxil ol</a>
        </p>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


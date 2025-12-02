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
    <title>Login</title>
    <style>
        body {
            background: linear-gradient(135deg, #2b0000, #660000, #000000);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: "Poppins", sans-serif;
            color: #fff;
        }


        .login-card {
            width: 420px;
            background: rgba(0, 0, 0, 0.55);
            box-shadow: 0 0 20px rgba(255, 0, 0, 0.5);
            border-radius: 15px;
            padding: 30px;
            backdrop-filter: blur(6px);
            animation: fadeIn 0.8s ease;
        }


        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }


        .login-card h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #ff4d4d;
            text-shadow: 0 0 10px #ff0000;
        }


        .form-control {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid #ff4d4d;
            color: #fff;
        }

        .form-control:focus {
            box-shadow: 0 0 10px #ff0000;
            border-color: #ff0000;
            background: rgba(255, 255, 255, 0.15);
        }


        label {
            color: #ffb3b3;
        }


        .btn-login {
            width: 100%;
            background: #cc0000;
            border: none;
            color: white;
            padding: 10px;
            margin-top: 10px;
            border-radius: 10px;
            font-size: 18px;
            transition: 0.3s;
            box-shadow: 0 0 15px rgba(255, 0, 0, 0.4);
        }


        .btn-login:hover {
            background: #ff1a1a;
            box-shadow: 0 0 25px rgba(255, 0, 0, 0.8);
        }


        a {
            color: #ff8080;
        }
    </style>
</head>
<body>
<div class="login-card">
    <h2>Login</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf


        <div class="mb-3">
            <label>Email</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                   required autofocus/>
            @error('email')
            <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>


        <div class="mb-3">
            <label>Şifrə</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                   name="password" required/>
            @error('password')
            <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>


        <div class="mb-3 form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember"/>
            <label class="form-check-label" for="remember">Yadda saxla</label>
        </div>


        <button class="btn-login" type="submit"><i class="fa-solid fa-right-to-bracket me-2"></i>Daxil ol</button>


        @if (Route::has('register'))
            <div class="mt-3 text-center">
                <a href="{{ route('register') }}">Register</a>
            </div>
        @endif
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

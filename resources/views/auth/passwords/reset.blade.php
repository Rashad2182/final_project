@extends('layouts.app')

@section('title')
    Reset
@endsection

@section('css')
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

        .reset-card {
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

        .reset-card h2 {
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

        .btn-reset {
            width: 100%;
            background: red;
            border: none;
            padding: 10px;
            font-weight: 600;
            border-radius: 8px;
            box-shadow: 0 0 12px red;
            transition: 0.3s;
            margin-top: 10px;
        }

        .btn-reset:hover {
            background: #b30000;
            box-shadow: 0 0 18px red;
        }

        @media (max-width: 480px) {
            .reset-card {
                width: 95%;
                padding: 20px;
            }
        }
    </style>
@endsection

@section('content')
    <div class="reset-card">
        <h2><i class="fa-solid fa-key"></i> Şifrənin Yenilənməsi</h2>

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <!-- Email -->
            <div class="mb-3">
                <label for="email">Email Ünvanı</label>
                <input id="email" type="email"
                       class="form-control @error('email') is-invalid @enderror"
                       name="email"
                       value="{{ $email ?? old('email') }}"
                       required autofocus>

                @error('email')
                <span class="invalid-feedback" style="display:block;color:red">
                <strong>{{ $message }}</strong>
            </span>
                @enderror
            </div>

            <!-- New Password -->
            <div class="mb-3">
                <label for="password">Yeni Şifrə</label>
                <input id="password" type="password"
                       class="form-control @error('password') is-invalid @enderror"
                       name="password"
                       required>

                @error('password')
                <span class="invalid-feedback" style="display:block;color:red">
                <strong>{{ $message }}</strong>
            </span>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="mb-3">
                <label for="password-confirm">Şifrə (Təkrar)</label>
                <input id="password-confirm" type="password"
                       class="form-control"
                       name="password_confirmation"
                       required>
            </div>

            <!-- Button -->
            <button type="submit" class="btn-reset">
                Şifrəni Yenilə <i class="fa-solid fa-arrow-rotate-right"></i>
            </button>
        </form>
    </div>
    @yield('js')
@endsection

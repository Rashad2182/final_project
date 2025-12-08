@extends('front.layouts.main')

@section('title')
    @lang('messages.contact')
@endsection

@section('css')
    <style>
        body {
            background: #111; /* dark background */
            font-family: Arial, sans-serif;
        }

        .contact-card {
            background: #1a1a1a;
            border: 1px solid #b30000;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(255, 0, 0, 0.3);
        }

        .contact-title {
            color: #ff1a1a;
            text-align: center;
            font-size: 28px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .form-control {
            background: #111;
            border: 1px solid #333;
            color: #fff;
            padding-left: 40px;
        }
        .form-control:focus {
            border-color: #ff1a1a;
            box-shadow: 0 0 5px #ff1a1a;
            background: #111;
            color: #fff;
        }

        .input-icon {
            position: absolute;
            left: 10px;
            top: 10px;
            color: #888;
        }

        .btn-red {
            width: 100%;
            background: #cc0000;
            border: none;
            padding: 12px;
            font-size: 17px;
            border-radius: 10px;
            font-weight: bold;
            color: white;
            transition: .2s;
        }
        .btn-red:hover {
            background: #ff1a1a;
            box-shadow: 0 0 10px #ff1a1a;
        }
    </style>
@endsection

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="min-height:100vh;">
        <div class="col-md-5">
            <div class="contact-card">

                <div class="contact-title">@lang('messages.contact us')</div>
                <p class="text-center text-secondary mb-4" style="color: white">
                   --------------------------------------
                </p>

                <form action="#" method="POST">

                    <!-- NAME -->
                    <div class="mb-3 position-relative">
                        <i class="input-icon bi bi-person-fill"></i>
                        <input type="text" class="form-control" placeholder="@lang('messages.name')" required>
                    </div>

                    <!-- EMAIL -->
                    <div class="mb-3 position-relative">
                        <i class="input-icon bi bi-envelope-fill"></i>
                        <input type="email" class="form-control" placeholder="@lang('messages.email')" required>
                    </div>

                    <!-- SUBJECT -->
                    <div class="mb-3 position-relative">
                        <i class="input-icon bi bi-chat-dots-fill"></i>
                        <input type="text" class="form-control" placeholder="@lang('messages.subject')">
                    </div>

                    <!-- MESSAGE -->
                    <div class="mb-3 position-relative">
                        <textarea class="form-control" placeholder="@lang('messages.message')" rows="4" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-red">@lang('messages.send message')<i class="fa-solid fa-paper-plane"></i></button>

                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.js"></script>
@endsection



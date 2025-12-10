@extends('back.layouts.master')

@section('title')
    Əsas Panel
@endsection

@section('css')

@endsection

@section('content')
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card shadow-lg border-0 rounded-4" style="background: linear-gradient(135deg, #4e73df, #224abe); color: #fff;">
            <div class="card-body d-flex flex-column justify-content-between">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="card-title mb-0">İstifadəçilər</h4>
                    <span class="badge bg-light text-dark fs-6">+18%</span>
                </div>

                <h1 class="mt-3 fw-bold">1,245</h1>

                <p class="mb-0 opacity-75">Son 30 gün ərzində aktiv istifadəçilər</p>

                <div class="progress mt-3" style="height: 7px;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 68%"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card shadow-lg border-0 rounded-4">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="rounded-circle bg-primary d-flex justify-content-center align-items-center"
                         style="width:60px; height:60px;">
                        <i class="bi bi-people-fill text-white fs-2"></i>
                    </div>

                    <div class="ms-3">
                        <h5 class="fw-bold mb-0">Yeni Abunəçilər</h5>
                        <small class="text-muted">Son 7 gün</small>
                    </div>
                </div>

                <h2 class="my-3 fw-bold">328</h2>

                <div class="progress" style="height: 6px;">
                    <div class="progress-bar bg-success" style="width: 80%;"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card shadow-lg border-0 rounded-4" style="backdrop-filter: blur(10px); background: rgba(255,255,255,0.1); color: #fff;">
            <div class="card-body">
                <h5 class="fw-bold">Sayt Ziyarətləri</h5>
                <h1 class="fw-bold mt-3">14,562</h1>

                <div class="d-flex justify-content-between mt-4">
                    <div>
                        <small>Bu gün</small>
                        <h5>542</h5>
                    </div>
                    <div>
                        <small>Dünən</small>
                        <h5>487</h5>
                    </div>
                    <div>
                        <small>Artım</small>
                        <h5 class="text-success fw-bold">+12%</h5>
                    </div>
                </div>

                <div class="progress mt-3" style="height: 8px;">
                    <div class="progress-bar bg-info" style="width: 75%"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection



@extends('back.layouts.admin')

@section('title')
    Dashboard/Home
@endsection

@section('css')

@endsection

@section('content')
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Users summary</h3>
                <div id="chart-mentions" class="chart-lg"></div>
            </div>
        </div>
    </div>
@endsection



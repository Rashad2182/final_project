<?php

namespace App\Http\Controllers\back;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Visitor;

class DashboardController extends Controller
{
    public function dashboard()
    {

        view('back.pages.dashboard.dashboard');
    }
}

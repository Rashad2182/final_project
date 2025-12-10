<?php

namespace App\Http\Controllers\Back;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
      return view('back.pages.dashboard.dashboard');
    }
}

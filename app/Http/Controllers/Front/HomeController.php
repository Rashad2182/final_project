<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{
    public function home()
    {
        return view('front.pages.home');
    }
}

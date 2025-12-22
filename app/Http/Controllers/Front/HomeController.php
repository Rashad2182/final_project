<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Models\HomeBanner;

class HomeController extends Controller
{
    public function home()
    {
        $banners = HomeBanner::orderBy('order_no', 'asc')->where('lang', app()->getLocale())->get();
        return view('front.pages.home', compact('banners'));
    }
}

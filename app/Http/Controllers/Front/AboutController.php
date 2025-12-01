<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class AboutController extends Controller
{
public function about(){
    return view('front.pages.about');
}
}

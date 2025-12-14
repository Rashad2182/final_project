<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;

class RHController extends Controller
{
    public function index()
    {
      return  view('back.pages.rh.rh');
    }
}

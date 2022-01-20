<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function print_home_page()
    {
        return view('home');
    }
}

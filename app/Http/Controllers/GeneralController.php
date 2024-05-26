<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function landing_page()
    {
        return view('landingpage');
    }

    public function register_page()
    {
        return view('register');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function biography()
    {
        return view('biography');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function contact()
    {
        return view('contact');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function experience()
    {
        return view('about.experience');
    }

    public function about()
    {
        return view('about.about');
    }
}

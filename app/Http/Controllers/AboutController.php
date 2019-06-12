<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Load the Experience Page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function experience()
    {
        return view('about.experience');
    }

    /**
     * Load the About Page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about()
    {
        return view('about.about');
    }

    public function skills()
    {
        return view('about.skills');
    }

    public function backyard()
    {
        return view('about.backyard');
    }

    public function hiking()
    {
        return view('about.hiking');
    }

    public function woodWorking()
    {
        return view('about.woodworking');
    }
}
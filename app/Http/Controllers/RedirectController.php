<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function contact()
    {
        return redirect('contact');
    }

    public function howDoIt()
    {
        return redirect('services');
    }

    public function marketingDesign()
    {
        return redirect('services/marketing');
    }

    public function seo()
    {
        return redirect('services/seo');
    }

    public function siteDesign()
    {
        return redirect('services/web-design');
    }

    public function sitemap ()
    {
        return redirect('sitemap');
    }
}

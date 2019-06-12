<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('portfolio.portfolio');
    }

    public function websites()
    {
        return view('portfolio.websites');
    }
}

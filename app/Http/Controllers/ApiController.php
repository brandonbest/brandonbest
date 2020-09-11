<?php

namespace App\Http\Controllers;

class ApiController extends Controller
{
    public function api()
    {
        return response([
            'message' => 'Welcome to Brandon\'s Api'
        ], 404);
    }
}

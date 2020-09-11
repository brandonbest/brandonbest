<?php

namespace App\Http\Controllers;

class ErrorController extends Controller
{
    public function error404()
    {
        return response([
            'message' => '404: Endpoint does not exist'
        ], 404);
    }
}

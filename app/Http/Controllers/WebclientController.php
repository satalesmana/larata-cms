<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebclientController extends Controller
{
    public function index()
    {
        return view('app');
    }
}

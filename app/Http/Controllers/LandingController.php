<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LandingController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function send(Request $request)
    {

    }
}

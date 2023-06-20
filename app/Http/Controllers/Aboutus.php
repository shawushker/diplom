<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aboutus extends Controller
{
    public function index(Request $request)
    {return view('aboutus.index');}
}

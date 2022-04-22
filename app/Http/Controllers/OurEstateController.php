<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurEstateController extends Controller
{
     public function index()
    {
        return view('our-estate');
    }
}

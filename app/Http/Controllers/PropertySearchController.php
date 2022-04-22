<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertySearchController extends Controller
{
     public function index()
    {
        return view('property-form');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CisFormController extends Controller
{
     public function index()
    {
        return view('cis-form');
    }
}


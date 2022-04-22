<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiftingFormController extends Controller
{
     public function index()
    {
        return view('lifting-form');
    }
}

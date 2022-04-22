<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteFormController extends Controller
{
     public function index()
    {
        return view('site-form');
    }
}

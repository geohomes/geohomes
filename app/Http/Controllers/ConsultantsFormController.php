<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultantsFormController extends Controller
{
   public function index()
    {
        return view('consultants-form');
    }
}

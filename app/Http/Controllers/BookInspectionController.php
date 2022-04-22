<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookInspectionController extends Controller
{
     public function index()
    {
        return view('book-inspection');
    }
}

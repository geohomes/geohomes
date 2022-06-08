<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AboutController extends Controller
{
    public function index()
    {
        $fetch = DB::table('about')->paginate(1);
         $about = json_decode(json_encode($fetch ), true);
        return view('about', ['about'=>$fetch]);
    }
}

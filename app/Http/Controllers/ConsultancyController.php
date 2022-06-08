<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ConsultancyController extends Controller
{

     public function index()
    {
        $fetch = DB::table('consultancy')->paginate(1);
         $consultancy = json_decode(json_encode($fetch ), true);
        return view('consultancy', ['consultancy'=>$fetch]);
    }
}

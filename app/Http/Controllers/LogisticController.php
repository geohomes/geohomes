<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LogisticController extends Controller
{
    //


      public function index()
    {
        $fetch = DB::table('logistic')->paginate(1);
         $logistic = json_decode(json_encode($fetch ), true);
        return view('logistic', ['logistic'=>$fetch]);
    }
}

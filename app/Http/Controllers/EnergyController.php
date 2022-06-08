<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EnergyController extends Controller
{
    //

     public function index()
    {
        $fetch = DB::table('energy')->paginate(1);
         $energy = json_decode(json_encode($fetch ), true);
        return view('energys', ['energy'=>$fetch]);
    }
}

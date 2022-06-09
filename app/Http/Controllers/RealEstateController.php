<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RealEstateController extends Controller
{


    public function index()
    {
         
         $fetch = DB::table('estate')->paginate(1);
         $estate = json_decode(json_encode($fetch ), true);
        return view('real-estate', ['estate'=> $fetch]);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MineralController extends Controller
{
    //
       public function index()
    {
        $fetch = DB::table('mineral')->paginate(1);
         $medical = json_decode(json_encode($fetch ), true);
        return view('mineral', ['mineral'=>$fetch]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ConstructionController extends Controller
{
     public function index()
    {
        $fetch = DB::table('construction')->paginate(1);
         $construction = json_decode(json_encode($fetch ), true);
        return view('construction', ['construction'=>$fetch]);
    }
}

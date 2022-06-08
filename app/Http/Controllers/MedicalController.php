<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MedicalController extends Controller
{
    //
       public function index()
    {
        $fetch = DB::table('medicals')->paginate(1);
         $medical = json_decode(json_encode($fetch ), true);
        return view('medical', ['medical'=>$fetch]);
    }
}

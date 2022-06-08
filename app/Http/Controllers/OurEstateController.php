<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class OurEstateController extends Controller
{
     public function index()
    {

        $fetch = DB::table('portifolio')->paginate(4);
         $portifolio = json_decode(json_encode($fetch ), true);
        return view('our-estate', ['portifolio'=> $fetch]);
    }
       
}

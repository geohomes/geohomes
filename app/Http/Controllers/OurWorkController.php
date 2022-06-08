<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class OurWorkController extends Controller
{
     public function index()
    {
    	{
        $fetch = DB::table('portifolio')->paginate(4);
         $portifolio = json_decode(json_encode($fetch ), true);
        return view('our-work', ['portifolio'=>$portifolio]);
    }
}

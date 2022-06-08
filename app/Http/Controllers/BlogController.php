<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BlogController extends Controller
{
     public function index()
    {
        $fetch = DB::table('blogs')->paginate(4);
         $array = json_decode(json_encode($fetch ), true);
        return view('frontendblog', ['array'=>$fetch]);
    }
    
}

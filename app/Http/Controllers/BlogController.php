<?php

namespace App\Http\Controllers;
use App\blog;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;

class BlogController extends Controller
{
     public function index()
    {
        $fetch = DB::table('blogs')->paginate(4);

         $blog = json_decode(json_encode($fetch ), true);
        return view('frontendblog', ['blog'=>$fetch]);
    }
    
}

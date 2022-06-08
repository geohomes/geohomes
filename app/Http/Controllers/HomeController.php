<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
   public function index()
    {
        return view('home');
    }

    /* news form submission */

    public function NewsInsert(Request $request){
        $email = $request->input('name');
         $data=array(
            'email'=>$email,

             );
            $submit= DB::table('newsletters')->insert($data);

        if ($submit) {
            back()->with('success', 'Subscription successful');

    }

       else{
        return back()->with('error', 'Subscription Failed. please try Again.');
       }
  }
}
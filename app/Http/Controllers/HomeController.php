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

  public function submitContact(Request $request)
   {

      $data = request()->all();
        $validator = Validator::make($data, [
             'name' => ['required'], 
            'email' => ['required', 'email'], 
            'message' => ['required'], 
           
        ]);
        dd($data);

          if ($validator->fails()) {
         return back()
         ->withInput()
         ->withErrors($validator);
        }


        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
        $data=array(
            'name'=>$name,
            'email'=>$email,
            'message'=>$message,
        );
            $submit= DB::table('contacts')->insert($data);

       if ($submit) {
            return back()->with('success', 'Your Message has been submitted. Thank You.');

    }

       else{
        return back()->with('error', 'message not sent. Please try Again.');
       }
   
  }

}
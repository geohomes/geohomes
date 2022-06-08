<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Str;

class AffiliateController extends Controller
{
     public function index()
    {
        return view('affiliate');
    }

     

    public function AffiliateInsert(Request $request){

$data = request()->all();
        $validator = Validator::make($data, [ 
            'email' => ['required', 'email'], 
            'phone' => ['required'], 
            'name' => ['required'],
        ]);

        if ($validator->fails()) {
         return back()
         ->withInput()
         ->withErrors($validator);
        }

        else{
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $data=array(
            'name'=>$name,
            'email'=>$email,
            'phone'=>$phone,
        );
            $submit= DB::table('affiliates')->insert($data);

        if ($submit) {
            return back()->with('success', 'Registration successful');

    }

       else{
        return back()->with('error', 'Submission Failed. Try Again.');
       }
    }
  }
}
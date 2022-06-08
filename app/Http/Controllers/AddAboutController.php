<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Str;

class AddAboutController extends Controller
{
    //

     public function admin()
    {
        return view('addabout');
    }

    public function AboutInsert(Request $request)
{

     $data = request()->all();
    $validator = Validator::make($data, [  
        'title' => ['required'],
        'description' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'error' => $validator->errors()
            ]);
        }

    $request=array([
        'title' => $request['title'],
        'description' => $request['description'],
    ]);

         $submit= DB::table('about')->insert($request);

        if ($submit) {
            return back()->with('success', 'You have successfully Added Content. Thank You.');

    }

       else{
        return back()->with('error', 'content was not Added. Please try Again.');
       }
    }

  
}

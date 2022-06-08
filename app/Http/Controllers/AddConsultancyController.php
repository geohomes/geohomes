<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Str;

class AddConsultancyController extends Controller
{
    //


     public function admin()
    {
        return view('add_consultancy');
    }

     public function ConsultancyInsert(Request $request)
{
    $data = request()->all();
    $validator = Validator::make($data, [ 
        'title' => ['required'], 
        'firstdescription' => ['required'], 
        'seconddescription' => ['required'],
        'firstimage' => ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg|max:10240'],
        'secondimage' => ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg|max:10240'],

        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'error' => $validator->errors()
            ]);
        }

    $firstimage = request()->file('firstimage');
    $secondimage = request()->file('secondimage');
        $extension = $firstimage->getClientOriginalExtension();
        $firstfilename = Str::uuid().'.'.$extension;
        $path = 'assets/upload/consultancy_images';
        $firstimage->move($path, $firstfilename);

        $extension = $secondimage->getClientOriginalExtension();
        $secondfilename = Str::uuid().'.'.$extension;
        $path = 'assets/upload/consultancy_images';
        $secondimage->move($path, $secondfilename);


    $request=array([
        'title' => $request['title'],
        'firstdescription' => $request['firstdescription'],
        'seconddescription' => $request['seconddescription'],
        'firstimage' => $firstfilename, // save full image path to database
        'secondimage' => $secondfilename, // save full image path to database
    ]);

         $submit= DB::table('consultancy')->insert($request);

        if ($submit) {
            return back()->with('success', 'content added Successfully. please click on consultancy to view it.');

    }

       else{
        return back()->with('error', 'Sorry, Content was not Added. Please try Again.');
       }
    }
}

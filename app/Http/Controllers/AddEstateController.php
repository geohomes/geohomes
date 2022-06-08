<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Str;

class AddEstateController extends Controller
{
    //

     public function admin()
    {
        return view('add_estate');
    }

    public function estateInsert(Request $request)
{

     $data = request()->all();
    $validator = Validator::make($data, [ 
        'title' => ['required'],
        'titledescription' => ['required'], 
        'firstdescription' => ['required'],
        'seconddescription' => ['required'],
        'thirddescription' => ['required'],
        'firstimage' => ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg|max:10240'],
        'secondimage' => ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg|max:10240'],
        'thirdimage' => ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg|max:10240'],

        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'error' => $validator->errors()
            ]);
        }

    $firstimage = request()->file('firstimage');
    $secondimage = request()->file('secondimage');
     $thirdimage = request()->file('thirdimage');

        $extension = $firstimage->getClientOriginalExtension();
        $firstfilename = Str::uuid().'.'.$extension;
        $path = 'assets/upload/estate_images';
        $firstimage->move($path, $firstfilename);

        $extension = $secondimage->getClientOriginalExtension();
        $secondfilename = Str::uuid().'.'.$extension;
        $path = 'assets/upload/estate_images';
        $secondimage->move($path, $secondfilename);

         $extension = $thirdimage->getClientOriginalExtension();
        $thirdfilename = Str::uuid().'.'.$extension;
        $path = 'assets/upload/estate_images';
        $thirdimage->move($path, $thirdfilename);


    $request=array([
        'title' => $request['title'],
        'titledescription' => $request['firstdescription'],
        'first_description' => $request['titledescription'],
        'second_description' => $request['seconddescription'],
        'third_description' => $request['thirddescription'],
        'first_image' => $firstfilename, // save full image path to database
        'second_image' => $secondfilename, // save full image path to database
        'third_image' => $thirdfilename, // save full image path to database
    ]);

         $submit= DB::table('estate')->insert($request);

        if ($submit) {
            return back()->with('success', 'content added Successfully.');

    }

       else{
        return back()->with('error', 'Sorry, Content was not Added. Please try Again.');
       }
    }
}

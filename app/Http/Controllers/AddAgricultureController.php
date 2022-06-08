<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Str;

class AddAgricultureController extends Controller
{
    //

     public function admin()
    {
        return view('addagriculture');
    }

    public function AgricultureInsert(Request $request)
{

     $data = request()->all();
    $validator = Validator::make($data, [  
        'title' => ['required'],
        'description' => ['required'],
       'first_image' => ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg|max:10240'],
   		'second_image' => ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg|max:10240'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'error' => $validator->errors()
            ]);
        }

    $firstimage = request()->file('first_image');
    $secondimage = request()->file('second_image');


        $extension = $firstimage->getClientOriginalExtension();
        $firstfilename = Str::uuid().'.'.$extension;
        $path = 'assets/upload/agriculture_images';
        $firstimage->move($path, $firstfilename);

        $extension = $secondimage->getClientOriginalExtension();
        $secondfilename = Str::uuid().'.'.$extension;
        $path = 'assets/upload/agriculture_images';
        $secondimage->move($path, $secondfilename);

    $request=array([
        'title' => $request['title'],
        'description' => $request['description'],
        'first_image' => $firstfilename, // save full image path to database
        'second_image' => $secondfilename, // save full image path to database
    ]);

         $submit= DB::table('agriculture')->insert($request);

        if ($submit) {
            return back()->with('success', 'You have successfully Added Content. Thank You.');

    }

       else{
        return back()->with('error', 'Mineral services was not Added. Please try Again.');
       }
    }
}

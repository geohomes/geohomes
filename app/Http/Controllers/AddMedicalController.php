<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Str;

class AddMedicalController extends Controller
{
    //
     public function admin()
    {
        return view('addmedical');
    }

    public function MedicalInsert(Request $request)
{

     $data = request()->all();
    $validator = Validator::make($data, [  
        'title' => ['required'],
        'description' => ['required'],
        'image' => ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg|max:10240'],

        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'error' => $validator->errors()
            ]);
        }

    $firstimage = request()->file('image');
   

        $extension = $firstimage->getClientOriginalExtension();
        $firstfilename = Str::uuid().'.'.$extension;
        $path = 'assets/upload/medical_images';
        $firstimage->move($path, $firstfilename);

       

    $request=array([
        'title' => $request['title'],
        'description' => $request['description'],
        'image' => $firstfilename, // save full image path to database
        
    ]);

         $submit= DB::table('medicals')->insert($request);

        if ($submit) {
            return back()->with('success', 'You have successfully Added content. Thank You.');

    }

       else{
        return back()->with('error', 'content was not Added. Please try Again.');
       }
    }
}

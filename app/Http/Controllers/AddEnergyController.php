<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Str;
class AddEnergyController extends Controller
{
    //
     public function admin()
    {
        return view('addenergy');
    }

     public function EnergyInsert(Request $request)
{
    $data = request()->all();
        $validator = Validator::make($data, [ 
            'title' => ['required'], 
            'firstdescription' => ['required'], 
            'seconddescription' => ['required'],
            'firstimage' => ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg|max:10240'],
            'secondimage' => ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg|max:10240']

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
        $path = 'assets/upload/energy_images';
        $firstimage->move($path, $firstfilename);

        $extension = $secondimage->getClientOriginalExtension();
        $secondfilename = Str::uuid().'.'.$extension;
        $path = 'assets/upload/energy_images';
        $secondimage->move($path, $secondfilename);


    $request=array([
        'title' => $request['title'],
        'first_description' => $request['firstdescription'],
        'second_description' => $request['seconddescription'],
        'first_image' => $firstfilename, // save full image path to database
        'second_image' => $secondfilename, // save full image path to database
    ]);

         $submit= DB::table('energy')->insert($request);

        if ($submit) {
            return back()->with('success', 'content added Successfully.');

    }

       else{
        return back()->with('error', 'Sorry, Content was not Added. Please try Again.');
       }
    }
}

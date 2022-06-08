<?php

namespace App\Http\Controllers\Edit;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Validator;
use Str;
class EstateEditController extends Controller
{
    //
    public function edit($id)
    {
        $fetch = DB::table('estate')
         ->where('id', $id)
         ->get();
         $estate = json_decode(json_encode($fetch ), true);
        return view('edit.estateedit', ['estate'=>$estate]);
    }

     public function view($id)
    {
        $fetch = DB::table('estate')
         ->where('id', $id)
         ->get();
         $estate = json_decode(json_encode($fetch ), true);
        return view('view.view_estate', ['estate'=>$estate]);
    }

    public function EstateEdit(Request $request)
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

     else{

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


    $title = $request->input('title');
    $firstdescription = $request->input('firstdescription');
    $seconddescription = $request->input('seconddescription');
    $thirddescription = $request->input('thirddescription');
    $id = $request->input('id');

        $edit=DB::table('estate')
            ->where('id', $id)
            ->update([
                'title' => "$title",
                'titledescription' => "$firstdescription",
                'first_image' => "$firstfilename",
                'first_description' => "$firstdescription",
                'second_image' => "$secondfilename",
                'second_description' => "$seconddescription",
                'third_image' => "$thirdfilename",
                'third_description' => "$thirddescription",
            ]);


        if ($edit) {
                return back()->with('success', 'Record Updated successfully');

        }

           else{
            return back()->with('error', 'Record was not Updated. please try Again.');
           }
    }
 }
}

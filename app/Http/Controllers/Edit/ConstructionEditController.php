<?php

namespace App\Http\Controllers\Edit;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Validator;
use Str;

class ConstructionEditController extends Controller
{
    //

     public function edit($id)
    {
        $fetch = DB::table('construction')
         ->where('id', $id)
         ->get();
         $construction = json_decode(json_encode($fetch ), true);
        return view('edit.constructionedit', ['construction'=>$construction]);
    }

    public function view($id)
    {
        $fetch = DB::table('construction')
         ->where('id', $id)
         ->get();
         $construction = json_decode(json_encode($fetch ), true);
        return view('view.view_construction', ['construction'=>$construction]);
    }



    public function Constructionedit(Request $request)
{

    $data = request()->all();
        $validator = Validator::make($data, [ 
            'title' => ['required'], 
            'description' => ['required'], 
            'firstimage' => ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg|max:10240'],
            'secondimage' => ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg|max:10240'],

        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'error' => $validator->errors()
            ]);
        }

     else{

      $title = $request->input('title');
        $description = $request->input('description');
        $id = $request->input('id');

         $firstimage = request()->file('firstimage');
         $secondimage = request()->file('secondimage');

        $extension = $firstimage->getClientOriginalExtension();
        $firstfilename = Str::uuid().'.'.$extension;
        $path = 'assets/upload/construction_images';
        $firstimage->move($path, $firstfilename);

        $extension = $secondimage->getClientOriginalExtension();
        $secondfilename = Str::uuid().'.'.$extension;
        $path = 'assets/upload/construction_images';
        $secondimage->move($path, $secondfilename);



        $edit=DB::table('construction')
            ->where('id', $id)
            ->update([
                'title' => "$title",
                'description' => "$description",
                'first_image' => "$firstfilename",
                'second_image' => "$secondfilename",
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

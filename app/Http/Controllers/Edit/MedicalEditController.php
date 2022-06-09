<?php

namespace App\Http\Controllers\Edit;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Validator;
use Str;

class MedicalEditController extends Controller
{
    //
    public function edit($id)
    {
        $fetch = DB::table('medicals')
        ->where('id', $id)
         ->get();
         $medical= json_decode(json_encode($fetch ), true);
        return view('edit.medicaledit', ['medical'=>$medical]);
    }

     public function view($id)
    {
        $fetch = DB::table('medicals')
        ->where('id', $id)
         ->get();
         $medical= json_decode(json_encode($fetch ), true);
        return view('view.view_medical', ['medical'=>$medical]);
    }


    public function MedicalEdit(Request $request)
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

     else{

    $image = request()->file('image');

        $extension = $image->getClientOriginalExtension();
        $filename = Str::uuid().'.'.$extension;
        $path = 'assets/upload/medical_images';
        $image->move($path, $filename);




    $title = $request->input('title');
    $description = $request->input('description');
    $id = $request->input('id');

        $edit=DB::table('medicals')
            ->where('id', $id)
            ->update([
                'title' => "$title",
                'description' => "$description",
                'image' => "$filename",
                
            ]);


        if ($edit) {
                return back()->with('success', 'Record Updated successfully. Check the Services Table');

        }

           else{
            return back()->with('error', 'Record was not Updated. please try Again.');
           }
    }
 }
}

<?php

namespace App\Http\Controllers\Edit;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Validator;
use Str;
class ConsultancyEditController extends Controller
{
    //
    public function edit($id)
    {
        $fetch = DB::table('consultancy')
        ->where('id', $id)
         ->get();
         $consultancy = json_decode(json_encode($fetch ), true);
        return view('edit.consultancyedit', ['consultancy'=>$consultancy]);
    }

     public function view($id)
    {
        $fetch = DB::table('consultancy')
        ->where('id', $id)
         ->get();;
         $consultancy = json_decode(json_encode($fetch ), true);
        return view('view.view_consultancy', ['consultancy'=>$consultancy]);
    }

    public function ConsultancyEdit(Request $request)
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

     else{

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


    $title = $request->input('title');
    $firstdescription = $request->input('firstdescription');
    $seconddescription = $request->input('seconddescription');
    $id = $request->input('id');

        $edit=DB::table('consultancy')
            ->where('id', $id)
            ->update([
                'title' => "$title",
                'firstdescription' => "$firstdescription",
                'seconddescription' => "$seconddescription",
                'firstimage' => "$firstfilename",
                'secondimage' => "$secondfilename",
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

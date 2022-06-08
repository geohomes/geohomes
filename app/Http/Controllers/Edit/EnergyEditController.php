<?php

namespace App\Http\Controllers\Edit;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Validator;
use Str;
class EnergyEditController extends Controller
{
    //
    public function edit($id)
    {
        $fetch = DB::table('energy')
        ->where('id', $id)
         ->get();
         $energy = json_decode(json_encode($fetch ), true);
        return view('edit.energyedit', ['energy'=>$energy]);
    }

     public function view($id)
    {
        $fetch = DB::table('energy')
        ->where('id', $id)
         ->get();
         $energy = json_decode(json_encode($fetch ), true);
        return view('view.view_energy', ['energy'=>$energy]);
    }

    public function EnergyEdit(Request $request)
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
        $path = 'assets/upload/energy_images';
        $firstimage->move($path, $firstfilename);

        $extension = $secondimage->getClientOriginalExtension();
        $secondfilename = Str::uuid().'.'.$extension;
        $path = 'assets/upload/energy_images';
        $secondimage->move($path, $secondfilename);



    $title = $request->input('title');
    $firstdescription = $request->input('firstdescription');
    $seconddescription = $request->input('seconddescription');
    $id = $request->input('id');

        $edit=DB::table('energy')
            ->where('id', $id)
            ->update([
                'title' => "$title",
                'first_description' => "$firstdescription",
                'second_description' => "$seconddescription",
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

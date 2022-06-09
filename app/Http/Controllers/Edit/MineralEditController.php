<?php

namespace App\Http\Controllers\Edit;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Validator;
use Str;

class MineralEditController extends Controller
{
    //
    public function edit($id)
    {
        $fetch = DB::table('mineral')
        ->where('id', $id)
         ->get();
         $mineral= json_decode(json_encode($fetch ), true);
        return view('edit.mineraledit', ['mineral'=>$mineral]);
    }

// Viewing of page detail
    public function view($id)
    {
        $fetch = DB::table('mineral')
        ->where('id', $id)
         ->get();
         $mineral= json_decode(json_encode($fetch ), true);
        return view('view.view_mineral', ['mineral'=>$mineral]);
    }
    

    public function MineralEdit(Request $request)
{
    $data = request()->all();
    $validator = Validator::make($data, [ 
        'title' => ['required'], 
        'description' => ['required'], 
        'first_image' => ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg|max:10240'],
        'second_image' => ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg|max:10240'],
        'third_image' => ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg|max:10240'],

        ]);

       
        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'error' => $validator->errors()
            ]);
        }

     else{

    $firstimage = request()->file('first_image');
     $secondimage = request()->file('second_image');
      $thirdimage = request()->file('third_image');

        $extension = $firstimage->getClientOriginalExtension();
        $firstfilename = Str::uuid().'.'.$extension;
        $path = 'assets/upload/mineral_images';
        $firstimage->move($path, $firstfilename);

        $extension = $secondimage->getClientOriginalExtension();
        $secondfilename = Str::uuid().'.'.$extension;
        $path = 'assets/upload/mineral_images';
        $secondimage->move($path, $secondfilename);

        $extension = $thirdimage->getClientOriginalExtension();
        $thirdfilename = Str::uuid().'.'.$extension;
        $path = 'assets/upload/mineral_images';
        $thirdimage->move($path, $thirdfilename);




    $title = $request->input('title');
    $description = $request->input('description');
    $id = $request->input('id');

        $edit=DB::table('mineral')
            ->where('id', $id)
            ->update([
                'title' => "$title",
                'description' => "$description",
                'first_image' => "$firstfilename",
                'second_image' => "$secondfilename",
                'third_image' => "$thirdfilename",
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

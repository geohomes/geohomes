<?php

namespace App\Http\Controllers\Edit;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Validator;
use Str;
class AgricultureEditController extends Controller
{
    //
    public function edit($id)
    {
        $fetch = DB::table('agriculture')
        ->where('id', $id)
         ->get();
         $agriculture= json_decode(json_encode($fetch ), true);
        return view('edit.agricultureedit', ['agriculture'=>$agriculture]);
    }

        public function view($id)
    {
        $fetch = DB::table('agriculture')
        ->where('id', $id)
         ->get();
         $agriculture= json_decode(json_encode($fetch ), true);
        return view('view.view_agriculture', ['agriculture'=>$agriculture]);
    }

    public function agricultureEdit(Request $request)
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

     else{

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



    $title = $request->input('title');
    $description = $request->input('description');
    $id = $request->input('id');

        $edit=DB::table('agriculture')
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

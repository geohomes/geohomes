<?php

namespace App\Http\Controllers\Edit;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Validator;
use Str;



class AboutEditController extends Controller
{
  public function edit($id)
    {
        $fetch = DB::table('about')
        ->where('id', $id)
         ->get();
         $about = json_decode(json_encode($fetch ), true);
        return view('edit.editabout', ['about'=>$about]);
    }

  public function view($id)
    {
        $fetch = DB::table('about')
        ->where('id', $id)
         ->get();
         $about = json_decode(json_encode($fetch ), true);
        return view('view.view_about', ['about'=>$about]);
    }
    
    public function AboutEdit(Request $request)
{

     $data = request()->all();
    $validator = Validator::make($data, [  
        'title' => ['required'],
        'description' => ['required'],
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

        
        $edit=DB::table('about')
            ->where('id', $id)
            ->update([
                'title' => "$title",
                'description' => "$description",]);
               


        if ($edit) {
                return back()->with('success', 'Record Updated successfully');

        }

           else{
            return back()->with('error', 'Record was not Updated. please try Again.');
           }
    }
 }
}

<?php

namespace App\Http\Controllers\Edit;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Validator;
use Str;
class BlogEditController extends Controller
{
    //
    public function edit($id)
    {
        $fetch = DB::table('blogs')
        ->where('id', $id)
         ->get();
         $blog= json_decode(json_encode($fetch ), true);
        return view('edit.blogedit', ['blog'=>$blog]);
    }

        public function view($id)
    {
        $fetch = DB::table('blogs')
        ->where('id', $id)
         ->get();
         $blog= json_decode(json_encode($fetch ), true);
        return view('view.view_blog', ['blog'=>$blog]);
    }

    public function blogEdit(Request $request)
{
    $data = request()->all();
    $validator = Validator::make($data, [ 
        'name' => ['required'], 
        'email' => ['required'],
        'title' => ['required'], 
        'description' => ['required'],
        'image' => ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg|max:10240'],

        ]);

       
         if ($validator->fails()) {
         return back()
         ->withInput()
         ->withErrors($validator);
        }

     else{

    $firstimage = request()->file('image');

        $extension = $firstimage->getClientOriginalExtension();
        $firstfilename = Str::uuid().'.'.$extension;
        $path = 'assets/upload/blog_images';
        $firstimage->move($path, $firstfilename);


    $title = $request->input('title');
    $description = $request->input('description');
    $name= $request->input('name');
    $email = $request->input('email');
    $id = $request->input('id');

        $edit=DB::table('blogs')
            ->where('id', $id)
            ->update([
                'title' => "$title",
                'description' => "$description",
                'writer' => "$name",
                'email' => "$email",
                'image' => "$firstfilename",
                
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

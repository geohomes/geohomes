<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Str;

class BlogPostController extends Controller
{
    //

     public function admin()
    {
        return view('blogpost');
    }

    public function BlogInsert(Request $request)
{
    $image = request()->file('image');

        //Validation //
         $data = request()->all();
        $validator = Validator::make($data, [  
        'name' => ['required'],
        'email' => ['required','email'],
        'blog_title' => ['required'],
        'image' => $image,
        'image' => ['required', 'image', 'mimes:jpg,png,jpeg,|max:10240'],
        'description' => ['required'],
        ]);

         
      if ($validator->fails()) {
         return back()
         ->withInput()
         ->withErrors($validator);
        }

        else{

        $extension = $image->getClientOriginalExtension();
        $filename = Str::uuid().'.'.$extension;
        $path = 'assets/upload/blog_images';
        $image->move($path, $filename);

    $request=array([
        'title' => $request['blog_title'],
        'description' => $request['description'],
        'writer' => $request['name'],
        'email' => $request['email'],
        'image' => $filename, // save full image path to database
    ]);

         $submit= DB::table('blogs')->insert($request);

        if ($submit) {
            return back()->with('success', 'Blog Created Successful. Thank You.');

    }

       else{
        return back()->with('error', 'Post Was Not created. Please try Again.');
       }
    }

   }
}
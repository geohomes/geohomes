<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;

class BlogController extends Controller
{
     public function index()
    {
        $fetch = DB::table('blogs')->paginate(8);

         $blogs = json_decode(json_encode($fetch ), true);
        return view('frontendblog', ['blogs'=>$fetch]);
    }

    public function blogdetail($id)
    {
        $fetch = DB::table('blogs')
        ->where('id', $id)
         ->get();
         $blogdetail = json_decode(json_encode($fetch ), true);
         $blogs = Blog::paginate(8);
         // dd($blogs);
        return view('blogdetail', ['blogdetail'=>$fetch, 'blogs' => $blogs]);

    }

    
}
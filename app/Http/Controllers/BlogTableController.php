<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BlogTableController extends Controller
{
    //
      public function admin()
    {
        $fetch = DB::table('blogs')->paginate(8);
         $blog = json_decode(json_encode($fetch ), true);
        return view('blog_table', ['blog'=>$fetch]);
    }
    
    
    public function delete($id) {
    $delet=DB::delete('delete from blogs where id = ?',[$id]);

        if ($delet) {
            return back()->with('success', 'Record deleted successfully');

    }

       else{
        return back()->with('error', 'Record was not deleted. please try Again.');
       }
  }
}

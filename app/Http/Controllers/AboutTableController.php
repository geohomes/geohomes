<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AboutTableController extends Controller
{
    //
      public function admin()
    {
         $fetch = DB::table('about')->get();
         $about = json_decode(json_encode($fetch ), true);
        return view('about-table', ['about'=>$fetch ]);
    }
    
    public function delete($id) {
    $delet=DB::delete('delete from about where id = ?',[$id]);

        if ($delet) {
            return back()->with('success', 'Record deleted successfully');

    }

       else{
        return back()->with('error', 'Record was not deleted. please try Again.');
       }
  }
}

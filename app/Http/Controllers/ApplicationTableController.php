<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ApplicationTableController extends Controller
{

       /* Fetching data from Application */
      public function admin()
    {
         $fetch = DB::table('applications')->get();
         $array = json_decode(json_encode($fetch ), true);
        return view('application_table', ['array'=>$array ]);
    }


  public function delete($id) {
    $delete=DB::delete('delete from applications where id = ?',[$id]);

        if ($delete) {
            return back()->with('success', 'Record deleted successfully');

    }

       else{
        return back()->with('error', 'Record was not deleted. please try Again.');
       }
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PSRTableController extends Controller
{
    //
      public function admin()
    {
         $fetch = DB::table('propertysearchs')->get();
         $array = json_decode(json_encode($fetch ), true);
        return view('property_table', ['array'=>$array]);
    }
    
    public function delete($id) {
    $delet=DB::delete('delete from propertysearchs where id = ?',[$id]);

        if ($delet) {
            return back()->with('success', 'Record deleted successfully');

    }

       else{
        return back()->with('error', 'Record was not deleted. please try Again.');
       }
  }
}

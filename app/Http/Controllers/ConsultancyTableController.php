<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ConsultancyTableController extends Controller
{
    //

      public function admin()
    {
         $fetch = DB::table('consultancy')->paginate(8);
         $consultancy = json_decode(json_encode($fetch ), true);
        return view('consultancy_table', ['consultancy'=> $fetch]);
    }
    
    public function delete($id) {
    $delet=DB::delete('delete from consultancy where id = ?',[$id]);

        if ($delet) {
            return back()->with('success', 'Record deleted successfully');

    }

       else{
        return back()->with('error', 'Record was not deleted. please try Again.');
       }
  }
}

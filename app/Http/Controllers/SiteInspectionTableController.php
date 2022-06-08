<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SiteInspectionTableController extends Controller
{
    //
    public function admin()
    {
         $fetch = DB::table('siteinspections')->get();
         $array = json_decode(json_encode($fetch ), true);
        return view('inspection_table', ['array'=>$array]);
    }
    
    public function delete($id) {
    $delet=DB::delete('delete from siteinspections where id = ?',[$id]);

        if ($delet) {
            return back()->with('success', 'Record deleted successfully');

    }

       else{
        return back()->with('error', 'Record was not deleted. please try Again.');
       }
  }
}

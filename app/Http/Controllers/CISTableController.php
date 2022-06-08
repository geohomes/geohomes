<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CISTableController extends Controller
{
    //
    /* Selection of file from DB */
        public function admin()
    {
         $fetch = DB::table('cis')->get();
         $array = json_decode(json_encode($fetch ), true);
        return view('cis_table', ['array'=>$array]);
    }
/* deleting of files from DB */
    public function delete($id) {
    $delet=DB::delete('delete from cis where id = ?',[$id]);

        if ($delet) {
            return back()->with('success', 'Record deleted successfully');

    }

       else{
        return back()->with('error', 'Record was not deleted. please try Again.');
       }
  }
}

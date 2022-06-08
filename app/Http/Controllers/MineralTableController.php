<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MineralTableController extends Controller
{
    //
        public function admin()
    {
         $fetch = DB::table('mineral')->get();
         $mineral = json_decode(json_encode($fetch ), true);
        return view('mineral-table', ['mineral'=>$mineral]);
    }
    
    public function delete($id) {
    $delet=DB::delete('delete from mineral where id = ?',[$id]);

        if ($delet) {
            return back()->with('success', 'Record deleted successfully');

    }

       else{
        return back()->with('error', 'Record was not deleted. please try Again.');
       }
  }
}

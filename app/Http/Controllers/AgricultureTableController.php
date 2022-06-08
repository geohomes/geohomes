<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AgricultureTableController extends Controller
{
    //
      public function admin()
    {
         $fetch = DB::table('agriculture')->get();
         $agriculture = json_decode(json_encode($fetch ), true);
        return view('agriculture-table', ['agriculture'=>$agriculture]);
    }
    
    public function delete($id) {
    $delet=DB::delete('delete from agriculture where id = ?',[$id]);

        if ($delet) {
            return back()->with('success', 'Record deleted successfully');

    }

       else{
        return back()->with('error', 'Record was not deleted. please try Again.');
       }
  }
}

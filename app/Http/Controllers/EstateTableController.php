<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EstateTableController extends Controller
{
    //

     public function admin()
    {
         $fetch = DB::table('estate')->paginate(8);
         $estate = json_decode(json_encode($fetch ), true);
        return view('estate_table', ['estate'=> $fetch]);
    }
    
    public function delete($id) {
    $delet=DB::delete('delete from estate where id = ?',[$id]);

        if ($delet) {
            return back()->with('success', 'Record deleted successfully');

    }

       else{
        return back()->with('error', 'Record was not deleted. please try Again.');
       }
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ConstructionTableController extends Controller
{
    //

     public function admin()
    {
         $fetch = DB::table('construction')->paginate(8);
         $construction = json_decode(json_encode($fetch ), true);
        return view('construction_table', ['construction'=>$fetch]);
    }
    
    public function delete($id) {
    $delet=DB::delete('delete from construction where id = ?',[$id]);

        if ($delet) {
            return back()->with('success', 'Record deleted successfully');

    }

       else{
        return back()->with('error', 'Record was not deleted. please try Again.');
       }
  }
}

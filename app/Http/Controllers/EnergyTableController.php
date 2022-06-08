<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EnergyTableController extends Controller
{
    //

     public function admin()
    {
         $fetch = DB::table('energy')->get();
         $energy = json_decode(json_encode($fetch ), true);
        return view('energy_table', ['energy'=>$fetch]);
    }
    
    public function delete($id) {
    $delet=DB::delete('delete from energy where id = ?',[$id]);

        if ($delet) {
            return back()->with('success', 'Record deleted successfully');

    }

       else{
        return back()->with('error', 'Record was not deleted. please try Again.');
       }
  }
}

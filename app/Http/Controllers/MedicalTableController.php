<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MedicalTableController extends Controller
{
    //
        public function admin()
    {
         $fetch = DB::table('medicals')->paginate(8);
         $medical = json_decode(json_encode($fetch ), true);
        return view('medical-table', ['medical'=>$fetch]);
    }
    
    public function delete($id) {
    $delet=DB::delete('delete from medicals where id = ?',[$id]);

        if ($delet) {
            return back()->with('success', 'Record deleted successfully');

    }

       else{
        return back()->with('error', 'Record was not deleted. please try Again.');
       }
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LogisticTableController extends Controller
{
    //
        public function admin()
    {
         $fetch = DB::table('logistic')->paginate(8);
         $logistic = json_decode(json_encode($fetch ), true);
        return view('logistic-table', ['logistic'=>$fetch]);
    }
    
    public function delete($id) {
    $delet=DB::delete('delete from logistic where id = ?',[$id]);

        if ($delet) {
            return back()->with('success', 'Record deleted successfully');

    }

       else{
        return back()->with('error', 'Record was not deleted. please try Again.');
       }
  }
}

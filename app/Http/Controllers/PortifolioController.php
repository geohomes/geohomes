<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PortifolioController extends Controller
{
    // fetching data from database
     public function admin()
   {
        $fetch = DB::table('portifolio')->paginate(6);
         $portifolio = json_decode(json_encode($fetch ), true);
        return view('portifolio_table', ['portifolio'=>$fetch]);
    }


    // delete function
    public function delete($id) {
    $delet=DB::delete('delete from portifolio where id = ?',[$id]);

        if ($delet) {
            return back()->with('success', 'Record deleted successfully');

    }

       else{
        return back()->with('error', 'Record was not deleted. please try Again.');
       }
    }
}

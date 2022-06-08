<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    //

     /* Fetching data from Application */
      public function admin()
    {
        
         $array = [
              $applicationCount = DB::table('applications')->count(),
          $cisCount = DB::table('cis')->count(),
          $bookingCount = DB::table('bookings')->count(),
          $consultantCount = DB::table('consultants')->count(),
          $affiliateCount = DB::table('affiliates')->count(),
          $inpectionCount = DB::table('siteinspections')->count(),
          $propertysearchCount = DB::table('propertysearchs')->count(),
          $contactCount = DB::table('contacts')->count(),
         ];
        return view('dashboard', compact('applicationCount', 'cisCount','bookingCount','consultantCount','affiliateCount','inpectionCount','propertysearchCount','contactCount'));
    }

}

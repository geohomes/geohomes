<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Str;

class BookInspectionController extends Controller
{
     public function index()
    {
        return view('book-inspection');
    }


    /* for Booking form submission */

    public function BookingsInsert(Request $request){

         $data = request()->all();
        $validator = Validator::make($data, [  
        'name' => ['required'],
        'middlename' => ['required'],
         'surname' => ['required'],
        'phone' => ['required'],
         'email' => ['required','email'],
        'residential' => ['required'],
         'office' => ['required'],
        'desired-service' => ['required'],
        ]);

          if ($validator->fails()) {
         return back()
         ->withInput()
         ->withErrors($validator);
        }

        else{

        $firstname = $request->input('name');
        $miidlename = $request->input('middlename');
        $surname = $request->input('surname');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $residential_address = $request->input('residential');
        $office_address = $request->input('office');
        $desired_service = $request->input('desired-service');
       

        $data=array(
            'firstname'=>$firstname,
            'middlename'=>$miidlename,
            'surname'=>$surname,
            'phone'=>$phone,
            'email'=>$email,
            'residential_address'=>$residential_address,
            'office_address'=>$office_address,
            'desired_service'=>$desired_service,
            
        );
            $submit= DB::table('bookings')->insert($data);

        if ($submit) {
            return back()->with('success', 'Sumission successful');

    }

       else{
        return back()->with('error', 'Submission Failed. please try Again.');
       }
    }
  }
}

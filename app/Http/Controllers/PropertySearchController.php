<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Str;

class PropertySearchController extends Controller
{
     public function index()
    {
        return view('property-form');
    }

     /* for Property Search Request form submission */

    public function propertyInsert(Request $request){
             $data = request()->all();
        $validator = Validator::make($data, [  
        'name' => ['required'],
        'phone' => ['required'],
         'email' => ['required','email'],
        'residential_address' => ['required'],
        'office_address' => ['required'],
         'plot_number' => ['required'],
        'location' => ['required'],
         'date' => ['required'],
        'approved_by' => ['required'],
        'customer' => ['required'],
         'survey_payment' => ['required'],
        'payment_status' => ['required'],
        ]);

      
      if ($validator->fails()) {
         return back()
         ->withInput()
         ->withErrors($validator);
        }

        else{
        
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $residential = $request->input('residential_address');
        $office_address = $request->input('office_address');
        $plot_number = $request->input('plot_number');
        $location = $request->input('location');
        $date= $request->input('date');
        $approved_by= $request->input('approved_by');
        $customer = $request->input('customer');
        $survey_payment = $request->input('survey_payment');
        $payment_status = $request->input('payment_status');
        $date = $request->input('date');
       

        $data=array(
            'clientname'=>$name,
            'phone'=>$phone,
            'email'=>$email,
            'residential_address'=>$residential,
            'office_address'=>$office_address,
            'plot_number'=>$plot_number,
            'layout'=>$location ,
            'person'=>$customer,
            'inspection_date'=>$date,
            'survey_payment'=>$survey_payment,
            'status'=> $payment_status,
            'approved_by'=>$approved_by,
        );
            $submit= DB::table('propertysearchs')->insert($data);

        if ($submit) {
            return back()->with('success', 'Sumission successful');

    }

       else{
        return back()->with('error', 'Submission Failed. please try Again.');
       }
    }
  }
}

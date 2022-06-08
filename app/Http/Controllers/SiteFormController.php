<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Str;

class SiteFormController extends Controller
{
     public function index()
    {
        return view('site-form');
    }

    /* for Site Inspection form submission */

    public function SiteInsert(Request $request){

        //Validation //
         $data = request()->all();
        $validator = Validator::make($data, [  
        'name' => ['required'],
        'phone' => ['required'],
         'email' => ['required','email'],
        'residential' => ['required'],
        'date' => ['required'],
        'inspection_date' => ['required'],
         'plot_number' => ['required'],
        'layout' => ['required'],
        'customer' => ['required'],
        'inspection_date' => ['required'],
         'payment_survey' => ['required'],
        'payment_status' => ['required'],
         'approved_by' => ['required'], 
        ]);

        
          if ($validator->fails()) {
         return back()
         ->withInput()
         ->withErrors($validator);
        }

        else{

        $fullname = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $residential_address = $request->input('residential');
        $date = $request->input('date');
        $plot_number = $request->input('plot_number');
        $layout = $request->input('layout');
        $customer= $request->input('customer');
        $inspection_date = $request->input('inspection_date');
        $payment_survey = $request->input('payment_survey');
        $payment_status = $request->input('payment_status');
        $approved_by = $request->input('approved_by');
       

        $data=array(
            'name'=>$fullname,
            'phone'=>$phone,
            'email'=>$email,
            'residential_address'=> $residential_address,
            'submission_date'=>$date,
            'plot_number'=>$plot_number,
            'layout'=>$layout,
            'person'=>$customer,
            'inspection_date'=>$inspection_date,
            'survey_payment'=>$payment_survey ,
            'status'=>$payment_status,
            'approved_by'=>$approved_by,
            
        );
            $submit= DB::table('siteinspections')->insert($data);

        if ($submit) {
            return back()->with('success', 'Sumission successful');

    }

       else{
        return back()->with('error', 'Submission Failed. please try Again.');
       }
    }
  }
}

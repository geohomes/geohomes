<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Str;

class ConsultantsFormController extends Controller
{
   public function index()
    {
        return view('consultants-form');
    }


/* for consultants form submission */

    public function ConsultantsInsert(Request $request){
        $data = request()->all();
        $validator = Validator::make($data, [  
        'name' => ['required'],
        'middlename' => ['required'],
         'surname' => ['required'],
        'phone' => ['required'],
         'email' => ['required','email'],
        'residential' => ['required'],
        'office' => ['required'],
         'kin-name' => ['required'],
        'kin-address' => ['required'],
         'kin-relation' => ['required'],
        'prepared-who' => ['required'],
        'account-name' => ['required'],
         'account-number' => ['required'],
        'bank' => ['required'],
         'company-line' => ['required'],
         'company-email' => ['required'],  
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
        $kin_name = $request->input('kin-name');
        $kin_address = $request->input('kin-address');
        $kin_relation = $request->input('kin-relation');
        $prepared_who = $request->input('prepared-who');
        $account_name = $request->input('account-name');
        $account_number = $request->input('account-number');
        $bank = $request->input('bank');
        $company_line = $request->input('company-line');
        $company_email = $request->input('company-email');

        $data=array(
            'firstname'=>$firstname,
            'middlename'=>$miidlename,
            'surname'=>$surname,
            'phone'=>$phone,
            'email'=>$email,
            'residential_address'=>$residential_address,
            'office_address'=>$office_address,
            'kin_name'=>$kin_name,
            'kin_address'=>$kin_address,
            'kin-relation'=>$kin_relation,
            'prepared_by'=>$prepared_who,
            'account_name'=>$account_name,
            'account_number'=>$account_number,
            'bank'=> $bank,
            'company_phone'=>$company_line,
            'company_email'=>$company_email,
            
        );
            $submit= DB::table('consultants')->insert($data);

        if ($submit) {
            return back()->with('success', 'Sumission successful');

    }

       else{
        return back()->with('error', 'Submission Failed. please try Again.');
       }
    }
  }
}

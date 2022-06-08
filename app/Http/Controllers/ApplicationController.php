<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Str;

class ApplicationController extends Controller
{
    public function index()
    {
        return view('application-form');
    }

     /* for Application form submission */

    public function ApplicationInsert(Request $request){

         //Validation //
         $data = request()->all();
        $validator = Validator::make($data, [  
        'name' => ['required'],
        'surname' => ['required'],
        'phone' => ['required'],
         'email' => ['required','email'],
        'date_of_birth' => ['required'],
        'gender' => ['required'],
         'marital_status' => ['required'],
        'state' => ['required'],
        'country' => ['required'],
        'residential' => ['required'],
         'local_government_area' => ['required'],
        'organization' => ['required'],
         'office_address' => ['required'], 
        'property_type' => ['required'], 
        ]);

        if ($validator->fails()) {
         return redirect()->back()
         ->withInput()
         ->withErrors($validator);
        }

        else{
        $name = $request->input('name');
        $surname = $request->input('surname');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $date_of_birth = $request->input('date_of_birth');
        $gender = $request->input('gender');
        $marital_status = $request->input('marital_status');
        $state= $request->input('state');
        $country= $request->input('country');
        $residential = $request->input('residential');
        $local_government_area = $request->input('local_government_area');
        $organization = $request->input('organization');
        $office_address = $request->input('office_address');
        $property_type = $request->input('property_type');
       

        $data=array(
            'name'=>$name,
            'surname'=>$surname ,
            'phone'=>$phone,
            'email'=>$email,
            'DOB'=>$date_of_birth,
            'gender'=>$gender,
            'marital_status'=>$marital_status,
            'residential_address'=>$residential,
            'state'=>$state,
            'country'=>$country,
            'LGA'=>$local_government_area,
            'organisation'=>$organization,
            'office_address'=>$office_address,
            'property_type'=>$property_type,

        );
            $submit= DB::table('applications')->insert($data);

        if ($submit) {
            return back()->with('success', 'Sumission successful');

    }

       else{
        return back()->with('error', 'Submission Failed. please try Again.');
       }
    }
  }
}

<?php

namespace App\Http\Controllers\Edit;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Validator;
use Str;
class ApplicationFormEditController extends Controller
{
    //
    public function edit($id)
    {
        $fetch = DB::table('applications')
        ->where('id', $id)
         ->get();
         $application= json_decode(json_encode($fetch ), true);
        return view('edit.applicationformedit', ['application'=>$application]);
    }

    public function view($id)
    {
        $fetch = DB::table('applications')
        ->where('id', $id)
         ->get();
         $application= json_decode(json_encode($fetch ), true);
        return view('view.view_application', ['application'=>$application]);
    }


    public function ApplicationEdit(Request $request)
{
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
         return back()
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
    
         $id = $request->input('id');

        $edit=DB::table('applications')
            ->where('id', $id)
            ->update([
                'name' => "$name ",
                'surname' => "$surname",
                'phone' => "$phone",
                'email' => "$email",
                'DOB' => "$date_of_birth",
                'gender' => "$gender",
                'marital_status' => "$marital_status",
                'residential_address' => "$state",
                 'state' => "$country",
                'country' => "$residential",
                'LGA' => "$local_government_area",
                'organisation' => "$organization",
                 'office_address' => "$office_address",
                'property_type' => "$property_type",
               
                
            ]);


        if ($edit) {
                return back()->with('success', 'Record Updated successfully');

        }

           else{
            return back()->with('error', 'Record was not Updated. please try Again.');
           }
    }
 }
}

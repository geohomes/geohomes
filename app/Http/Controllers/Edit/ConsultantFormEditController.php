<?php
namespace App\Http\Controllers\Edit;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Validator;
use Str;

class ConsultantFormEditController extends Controller
{
  public function edit($id)
    {
        $fetch = DB::table('consultants')
         ->where('id', $id)
         ->get();
         $consultant = json_decode(json_encode($fetch ), true);
        return view('edit.consultantformedit', ['consultant'=>$consultant]);
    }
    public function view($id)
    {
        $fetch = DB::table('consultants')
         ->where('id', $id)
         ->get();
         $consultant = json_decode(json_encode($fetch ), true);
        return view('view.view_consultant', ['consultant'=>$consultant]);
    }


    public function ConsultantEdit(Request $request)
{

        $data = request()->all();
        $validator = Validator::make($data, [  
        'firstname' => ['required'],
        'middlename' => ['required'],
        'surname' => ['required'],
        'phone' => ['required'],
        'email' => ['required','email'],
        'residential' => ['required'],
        'office' => ['required'],
        'kin_name' => ['required'],
        'kin_address' => ['required'],
        'kin_relation' => ['required'],
        'prepared_who' => ['required'],
        'account_name' => ['required'],
        'account_number' => ['required'],
        'bank' => ['required'],
        'company_phone' => ['required'],
        'company_email' => ['required'], 
        ]);


        if ($validator->fails()) {
         return back()
         ->withInput()
         ->withErrors($validator);
        }

        else{

        $firstname = $request->input('firstname');
        $middlename = $request->input('middlename');
        $surname = $request->input('surname');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $residential = $request->input('residential');
        $office = $request->input('office');
        $kin_name= $request->input('kin_name');
        $kin_address = $request->input('kin_address');
        $kin_relation = $request->input('kin_relation');
        $prepared_who = $request->input('prepared_who');
        $account_name= $request->input('account_name');
        $account_number = $request->input('account_number');
        $bank = $request->input('bank');
        $company_line = $request->input('company_phone');
        $company_email= $request->input('company_email');
        $id = $request->input('id');

        
        $edit=DB::table('consultants')
            ->where('id', $id)
            ->update([
        'firstname' =>"$firstname",
        'middlename' => "$middlename",
        'surname' => "$surname",
        'phone' => "$phone",
        'email' => "$email",
        'residential_address' => "$residential",
        'office_address' => "$office",
        'kin_name' => "$kin_name",
        'kin_address' => "$kin_address",
        'kin-relation' => "$kin_relation",
        'prepared_by' => "$prepared_who",
        'account_name' => "$account_name",
        'account_number' => "$account_number",
        'bank' => "$bank",
        'company_phone' => "$company_line",
        'company_email' => "$company_email",]); 
               


        if ($edit) {
                return back()->with('success', 'Record Updated successfully');

        }

           else{
            return back()->with('error', 'Record was not Updated. please try Again.');
           }
    }

 }
}

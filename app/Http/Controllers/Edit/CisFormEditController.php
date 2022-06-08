<?php
namespace App\Http\Controllers\Edit;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Validator;
use Str;

class CisFormEditController extends Controller
{
  public function edit($id)
    {
        $fetch = DB::table('cis')
        ->where('id', $id)
         ->get();
         $cis = json_decode(json_encode($fetch ), true);
        return view('edit.cisformedit', ['cis'=>$cis]);
    }

      public function view($id)
    {
        $fetch = DB::table('cis')
        ->where('id', $id)
         ->get();
         $cis = json_decode(json_encode($fetch ), true);
        return view('view.view_cis', ['cis'=>$cis]);
    }

    public function CisEdit(Request $request)
{

        $data = request()->all();
        $validator = Validator::make($data, [  
        'name' => ['required'],
        'email' => ['required','email'],
        'phone' => ['required'],
        'residential' => ['required'],
        'occupation' => ['required'],
        'date_of_birth' => ['required'],
        'plot_number' => ['required'],
        'lifted' => ['required'],
        'layout' => ['required'],
        'agent_name' => ['required'],
        'agent_phone' => ['required'],
        'agent_address' => ['required'],
        'agent_occupation' => ['required'], 
        'agent_office' => ['required'],
        
        ]);


        if ($validator->fails()) {
         return back()
         ->withInput()
         ->withErrors($validator);
        }

        else{

        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $residential = $request->input('residential');
        $occupation = $request->input('occupation');
        $dob= $request->input('date_of_birth');
        $plot_number = $request->input('plot_number');
        $lifted = $request->input('lifted');
         $layout= $request->input('layout');
        $amount = $request->input('amount');
        $agent_name = $request->input('agent_name');
        $agent_phone = $request->input('agent_phone');
        $agent_address = $request->input('agent_address');
        $agent_occupation= $request->input('agent_occupation');
        $agent_office= $request->input('agent_office');
        $id = $request->input('id');

        $calculated_amount=$plot_number * 24000;
        
        $edit=DB::table('cis')
            ->where('id', $id)
            ->update([
        'fullname' =>"$name",
        'phone' => "$phone",
        'email' => "$email",
        'residential_address' => "$residential",
        'occupation' => "$occupation",
        'DOB' => "$dob",
        'plot_number' => "$plot_number",
        'lifted' => "$lifted",
        'layout' => "$layout",
        'amount' => "$calculated_amount",
        'agent_name' => "$agent_name",
        'agent_phone' => "$agent_phone",
        'agent_address' => "$agent_address",
        'agent_occupation' => "$agent_occupation",
        'agent-office_address' => "$agent_office",]); 
               


        if ($edit) {
                return back()->with('success', 'Record Updated successfully');

        }

           else{
            return back()->with('error', 'Record was not Updated. please try Again.');
           }
    }

 }
}

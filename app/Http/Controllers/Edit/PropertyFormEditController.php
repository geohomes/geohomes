<?php
namespace App\Http\Controllers\Edit;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Validator;
use Str;

class PropertyFormEditController extends Controller
{
  public function edit($id)
    {
        $fetch = DB::table('propertysearchs')
        ->where('id', $id)
         ->get();
         $property = json_decode(json_encode($fetch ), true);
        return view('edit.propertyformedit', ['property'=>$property]);
    }

    public function view($id)
    {
        $fetch = DB::table('propertysearchs')
        ->where('id', $id)
         ->get();
         $property = json_decode(json_encode($fetch ), true);
        return view('view.view_property', ['property'=>$property]);
    }

    public function PropertyformEdit(Request $request)
{
        //Validation //
         $data = request()->all();
        $validator = Validator::make($data, [  
        'name' => ['required'],
        'phone' => ['required'],
        'email' => ['required','email'],
        'residential' => ['required'],
        'office' => ['required'],
        'plot_number' => ['required'],
        'layout' => ['required'],
        'customer' => ['required'],
        'inspection_date' => ['required'],
        'survey_payment' => ['required'],
        'payment_status' => ['required'],
        'approved_by' => ['required'],
         'registration_date' => ['required'], 
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
        $residential = $request->input('residential');
        $office_address = $request->input('office');
        $plot_number = $request->input('plot_number');
        $layout = $request->input('layout');
        $customer = $request->input('customer');
        $inspection_date= $request->input('inspection_date');
        $survey_payment = $request->input('survey_payment');
        $payment_status = $request->input('payment_status');
        $approved_by= $request->input('approved_by');
        $registration_date = $request->input('date');

        $id = $request->input('id');

       
        

        $edit=DB::table('propertysearchs')
            ->where('id', $id)
            ->update([
            'clientname'=>"$name",
            'phone'=>"$phone",
            'email'=>"$email",
            'residential_address'=>"$residential",
            'office_address'=>"$office_address",
            'plot_number'=>"$plot_number",
            'layout'=>"$layout",
            'person'=>"$customer",
            'inspection_date'=>"$inspection_date",
            'survey_payment'=>"$survey_payment",
            'status'=>"$payment_status",
            'approved_by'=>"$approved_by",
            'registration_date'=>"$registration_date",]); 
               


        if ($edit) {
                return back()->with('success', 'Record Updated successfully');

        }

           else{
            return back()->with('error', 'Record was not Updated. please try Again.');
           }
    }

 }
}

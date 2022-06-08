<?php
namespace App\Http\Controllers\Edit;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Validator;
use Str;

class SiteFormEditController extends Controller
{
  public function edit($id)
    {
        $fetch = DB::table('siteinspections')
        ->where('id', $id)
         ->get();
         $siteinspection = json_decode(json_encode($fetch ), true);
        return view('edit.siteformedit', ['siteinspection'=>$siteinspection]);
    }
     public function view($id)
    {
        $fetch = DB::table('siteinspections')
        ->where('id', $id)
         ->get();
         $siteinspection = json_decode(json_encode($fetch ), true);
        return view('view.view_siteinspection', ['siteinspection'=>$siteinspection]);
    }

    public function SiteInspectionEdit(Request $request)
{
        //Validation //
         $data = request()->all();
        $validator = Validator::make($data, [  
        'name' => ['required'],
        'phone' => ['required'],
        'email' => ['required','email'],
        'residential' => ['required'],
        'submission_date' => ['required'],
        'plot_number' => ['required'],
        'layout' => ['required'],
        'customer' => ['required'],
        'inspection_date' => ['required'],
        'survey_payment' => ['required'],
        'payment_status' => ['required'],
        'approved_by' => ['required'],
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
        $submission_date = $request->input('submission_date');
        $plot_number = $request->input('plot_number');
        $layout = $request->input('layout');
        $customer = $request->input('customer');
        $inspection_date= $request->input('inspection_date');
        $survey_payment = $request->input('survey_payment');
        $payment_status = $request->input('payment_status');
        $approved_by= $request->input('approved_by');

        $id = $request->input('id');

       
        

        $edit=DB::table('siteinspections')
            ->where('id', $id)
            ->update([
            'name'=>"$name",
            'phone'=>"$phone",
            'email'=>"$email",
            'residential_address'=>"$residential",
            'submission_date'=>"$submission_date",
            'plot_number'=>"$plot_number",
            'layout'=>"$layout",
            'person'=>"$customer",
            'inspection_date'=>"$inspection_date",
            'survey_payment'=>"$survey_payment",
            'status'=>"$payment_status",
            'approved_by'=>"$approved_by",]); 
               


        if ($edit) {
                return back()->with('success', 'Record Updated successfully');

        }

           else{
            return back()->with('error', 'Record was not Updated. please try Again.');
           }
    }

 }
}

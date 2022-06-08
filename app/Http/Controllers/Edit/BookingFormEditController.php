<?php
namespace App\Http\Controllers\Edit;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Validator;
use Str;

class BookingFormEditController extends Controller
{
  public function edit($id)
    {
        $fetch = DB::table('bookings')
        ->where('id', $id)
         ->get();
         $booking = json_decode(json_encode($fetch ), true);
        return view('edit.bookingformedit', ['booking'=>$booking]);
    }

     public function view($id)
    {
        $fetch = DB::table('bookings')
        ->where('id', $id)
         ->get();
         $booking = json_decode(json_encode($fetch ), true);
        return view('view.view_booking', ['booking'=>$booking]);
    }

    public function BookingEdit(Request $request)
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
        'desired_service' => ['required'],
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
        $desired_service= $request->input('desired_service');
        $id = $request->input('id');

        
        $edit=DB::table('bookings')
            ->where('id', $id)
            ->update([
                'firstname' => "$firstname",
                'middlename' => "$middlename",
                'surname' => "$surname",
                'phone' => "$phone",
                'email' => "$email",
                'residential_address' => "$residential",
                'office_address' => "$office",
                'desired_service' => "$desired_service",]);
               


        if ($edit) {
                return back()->with('success', 'Record Updated successfully');

        }

           else{
            return back()->with('error', 'Record was not Updated. please try Again.');
           }
    }
 }
}

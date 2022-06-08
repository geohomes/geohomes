<?php
namespace App\Http\Controllers\Edit;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Validator;
use Str;

class ContactEditController extends Controller
{
  public function edit($id)
    {
        $fetch = DB::table('contacts')
         ->where('id', $id)
         ->get();
         $contact = json_decode(json_encode($fetch ), true);
        return view('edit.contactedit', ['contact'=>$contact]);
    }

    public function contactEdit(Request $request)
{

        $data = request()->all();
        $validator = Validator::make($data, [  
        'name' => ['required'],
        'email' => ['required','email'],
        'message' => ['required'],
        
        ]);


        if ($validator->fails()) {
         return back()
         ->withInput()
         ->withErrors($validator);
        }

        else{

        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
        $id = $request->input('id');

        
        $edit=DB::table('contacts')
            ->where('id', $id)
            ->update([
        'name' =>"$name",
        'email' => "$email",
        'message' => "$message",]); 
               


        if ($edit) {
                return back()->with('success', 'Record Updated successfully');

        }

           else{
            return back()->with('error', 'Record was not Updated. please try Again.');
           }
    }

 }
}

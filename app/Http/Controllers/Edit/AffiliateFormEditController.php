<?php
namespace App\Http\Controllers\Edit;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Validator;
use Str;

class AffiliateFormEditController extends Controller
{
  public function edit($id)
    {
        $fetch = DB::table('affiliates')
         ->where('id', $id)
         ->get();
         $affiliate = json_decode(json_encode($fetch ), true);
        return view('edit.affiliateformedit', ['affiliate'=>$affiliate]);
    }

    public function AffiliateEdit(Request $request)
{

     $data = request()->all();
    $validator = Validator::make($data, [  
        'name' => ['required'],
        'email' => ['required', 'email'],
        'phone' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'error' => $validator->errors()
            ]);
        }
        else{

        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $id = $request->input('id');

        
        $edit=DB::table('affiliates')
            ->where('id', $id)
            ->update([
                'name' => "$name",
                'email' => "$email",
                'phone' => "$phone",]);
               


        if ($edit) {
                return back()->with('success', 'Record Updated successfully');

        }

           else{
            return back()->with('error', 'Record was not Updated. please try Again.');
           }
    }
 }
}

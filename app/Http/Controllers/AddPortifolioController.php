<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Str;
class AddPortifolioController extends Controller
{
    public function admin()
    {
        return view('add_portifolio');
    }

    public function PortifolioInsert(Request $request)
{

     $data = request()->all();
    $validator = Validator::make($data, [  
        'title' => ['required'],
        'location' => ['required'],
        'product' => ['required'],
        'price' => ['required'],
        'feature' => ['required'],
        'image' => ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg|max:10240'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'error' => $validator->errors()
            ]);
        }

    $image = request()->file('image');


        $extension = $image->getClientOriginalExtension();
        $filename = Str::uuid().'.'.$extension;
        $path = 'assets/upload/portifolio_images';
        $image->move($path, $filename);

      

    $request=array([
        'title' => $request['title'],
        'location' => $request['location'],
        'product' => $request['product'],
        'price' => $request['price'],
        'features' => $request['feature'],
        'image' => $filename, // save full image path to database
    ]);

         $submit= DB::table('portifolio')->insert($request);

        if ($submit) {
            return back()->with('success', 'You have successfully Added Portifolio. Thank You.');

    }

       else{
        return back()->with('error', 'Portifolio was not Added. Please try Again.');
       }
    }
}
     /*// Edit function
        public function edit(Request $request) {

             $data = request()->all();
            $validator = Validator::make($data, [  
        'firstdescription' => ['required'],
        'seconddescription' => ['required'],
        'thirddescription' => ['required'],
        'firstimage' => ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg|max:10240'],
        'secondimage' => ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg|max:10240'],
        'thirdimage' => ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg|max:10240'],

        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'error' => $validator->errors()
            ]);
        }
        $firstimage = request()->file('firstimage');
        $secondimage = request()->file('secondimage');
        $thirdimage = request()->file('thirdimage');

        $extension = $firstimage->getClientOriginalExtension();
        $firstfilename = Str::uuid().'.'.$extension;
        $path = 'assets/upload/portifolio_images';
        $firstimage->move($path, $firstfilename);

        $extension = $secondimage->getClientOriginalExtension();
        $secondfilename = Str::uuid().'.'.$extension;
        $path = 'assets/upload/portifolio_images';
        $secondimage->move($path, $secondfilename);

        $extension = $secondimage->getClientOriginalExtension();
        $thirdfilename = Str::uuid().'.'.$extension;
        $path = 'assets/upload/portifolio_images';
        $thirdimage->move($path, $thirdfilename);

        $first_description = $request->input('firstdescription');
        $second_description = $request->input('seconddescription');
        $third_description = $request->input('thirddescription');
        $id = $request->input('id');

        
        $edit=DB::table('portifolio')
            ->where('id', $id)
            ->update(['first_description' => "$first_description",
                'second_description' => "$second_description",
                'third_description' => "$firstfilename",
                'first_image' => "$firstfilename",
                'second_image' => "$secondfilename",
                'third_image' => "$thirdfilename",]);


        if ($edit) {
                return back()->with('success', 'Record Updated successfully');

        }

           else{
            return back()->with('error', 'Record was not Updated. please try Again.');
           }
}
       
}
*/
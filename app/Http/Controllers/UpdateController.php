<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Str;

class UpdateController extends Controller
{
    public function admin()
    {
        return view('editabout');
    }

    // Edit function
        public function editportifolio(Request $request) {

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
         return back()->with('the Field is empty.');
        }

        else{
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
                'third_description' => "$third_description",
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
	// Edit function
        public function editenergy(Request $request) {

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

        $extension = $firstimage->getClientOriginalExtension();
        $firstfilename = Str::uuid().'.'.$extension;
        $path = 'assets/upload/energy_images';
        $firstimage->move($path, $firstfilename);

        $extension = $secondimage->getClientOriginalExtension();
        $secondfilename = Str::uuid().'.'.$extension;
        $path = 'assets/upload/energy_images';
        $secondimage->move($path, $secondfilename);

        $title = $request->input('title');
        $first_description = $request->input('firstdescription');
        $second_description = $request->input('seconddescription');
        $id = $request->input('id');

        
        $edit=DB::table('energy')
            ->where('id', $id)
            ->update([
            	'title' => "$title",
            	'first_description' => "$first_description",
                'second_description' => "$second_description",
                'first_image' => "$firstfilename",
                'second_image' => "$secondfilename",]);


        if ($edit) {
                return back()->with('success', 'Record Updated successfully');

        }

           else{
            return back()->with('error', 'Record was not Updated. please try Again.');
           }
	}

	// Edit function
        public function editlogistic(Request $request) {

             $data = request()->all();
            $validator = Validator::make($data, [  
        'title' => ['required'],
        'description' => ['required'],
        'first_image' => ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg|max:10240'],
        'second_image' => ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg|max:10240'],
        'third_image' => ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg|max:10240'],

        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'error' => $validator->errors()
            ]);
        }
        $firstimage = request()->file('first_image');
        $secondimage = request()->file('second_image');
        $thirddimage = request()->file('second_image');

        $extension = $firstimage->getClientOriginalExtension();
        $firstfilename = Str::uuid().'.'.$extension;
        $path = 'assets/upload/logistic_images';
        $firstimage->move($path, $firstfilename);

        
        $extension = $thirdimage->getClientOriginalExtension();
        $thirdfilename = Str::uuid().'.'.$extension;
        $path = 'assets/upload/logistic_images';
        $thirdimage->move($path, $thirdfilename);

        $title = $request->input('title');
        $first_description = $request->input('description');
        $id = $request->input('id');

        
        $edit=DB::table('logistic')
            ->where('id', $id)
            ->update([
            	'title' => "$title",
            	'description' => "$first_description",
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
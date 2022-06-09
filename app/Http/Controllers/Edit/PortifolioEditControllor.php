<?php

namespace App\Http\Controllers\Edit;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Validator;
use Str;



class PortifolioEditControllor extends Controller
{
  public function edit($id)
    {
        $fetch = DB::table('portifolio')
        ->where('id', $id)
         ->get();
         $portifolio = json_decode(json_encode($fetch ), true);
        return view('edit.editportifolio', ['portifolio'=>$fetch]);
    }

     public function view($id)
    {
        $fetch = DB::table('portifolio')
        ->where('id', $id)
         ->get();
         $portifolio = json_decode(json_encode($fetch ), true);
        return view('view.view_portifolio', ['portifolio'=>$portifolio]);
    }

   public function portifolioedit(Request $request) {

            $data = request()->all();
            $validator = Validator::make($data, [ 
        'firsttitle' => ['required'],
        'secondtitle' => ['required'],
        'thirdtitle' => ['required'], 
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

        $first_title = $request->input('firsttitle');
        $second_title = $request->input('secondtitle');
        $third_title = $request->input('thirdtitle');
        $first_description = $request->input('firstdescription');
        $second_description = $request->input('seconddescription');
        $third_description = $request->input('thirddescription');
        $id = $request->input('id');

        
        $edit=DB::table('portifolio')
            ->where('id', $id)
            ->update([
                'first_title' => "$first_title",
                'second_title' => "$second_title",
                'third_title' => "$third_title",
                'first_description' => "$first_description",
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
}

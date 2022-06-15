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
        'title' => ['required'],
        'location' => ['required'],
        'price' => ['required'], 
        'product' => ['required'],
        'description' => ['required'],
        'image' => ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg|max:10240'],

        ]);

        
          if ($validator->fails()) {
         return back()->with('the Field is empty.');
        }

        else{
        $image = request()->file('image');

        $extension = $image->getClientOriginalExtension();
        $filename = Str::uuid().'.'.$extension;
        $path = 'assets/upload/portifolio_images';
        $image->move($path, $filename);

    

        $title = $request->input('title');
        $location = $request->input('location');
        $product = $request->input('product');
        $price = $request->input('price');
        $description = $request->input('description');
        $id = $request->input('id');

        
        $edit=DB::table('portifolio')
            ->where('id', $id)
            ->update([
                'title' => "$title",
                'location' => "$location",
                'product' => "$product",
                'price' => "$price",
                'features' => "$description",
                'image' => "$filename",]);


        if ($edit) {
                return back()->with('success', 'Record Updated successfully');

        }

           else{
            return back()->with('error', 'Record was not Updated. please try Again.');
           }
        }
    }
}

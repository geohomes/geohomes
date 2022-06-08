<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
use Validator;
use Auth;
use DB;

class ValidationController extends Controller
{
    //
 public function checklogin(Request $request){

        $data = array(
            'email'=>$request->post('user_email'),
            'password'=>$request->post('user_pass'),
        );


        if(auth() -> attempt($data)){
            request()->session()->regenerate();
            return redirect()->route('dashboard');

        }

        else{

            return back()->with('error', 'Invalid credentials. Try agin.');
        }

        function successLogin(){         

            return view('dashboard');
        }
    }
}
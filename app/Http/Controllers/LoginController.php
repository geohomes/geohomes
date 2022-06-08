<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
use Validator;

class LoginController extends Controller
{

    /**
     * email View
     * 
     * @return void
     */
    public function admin()
    {
        return view('login');
    }

   

}

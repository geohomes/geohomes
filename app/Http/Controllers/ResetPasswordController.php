<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
use Validator;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{

    public function admin()
    {
        return view('reset_password');
    }
}

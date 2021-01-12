<?php

namespace App\Http\Controllers\Doctor\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public  function register(){
        if (\View::exists('doctor.auth.register')){

            return view('doctor.auth.register');
        }
        abort(404);

    }
}

<?php

namespace App\Http\Controllers\Doctor\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class RegisterController extends Controller
{
    public  function register(){
        if (View::exists('doctor.auth.register')){

            return view('doctor.auth.register');
        }
        abort(404);

    }

    public function processRegister(Request $request){
        $request->validate([
            'name' =>'required',
            'email' =>'required|unique:doctors',
            'password' =>['required','strign','min:6','confirmed'],

//            'password' =>'required|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
//            'confirmed',
        ]);
    }


}

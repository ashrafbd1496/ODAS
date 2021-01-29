<?php

namespace App\Http\Controllers\Doctor\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\DoctorRegister;
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

    public function processRegister(DoctorRegister $request){
        return $request->validated();
    }


}

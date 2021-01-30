<?php

namespace App\Http\Controllers\Doctor\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\DoctorRegister;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
        Doctor::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>$request->input('password')
        ]);

        return redirect()->route('doctor.login');
//        return redirect()->action([LoginController::class, 'login']);

    }


}

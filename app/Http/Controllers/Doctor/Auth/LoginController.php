<?php

namespace App\Http\Controllers\Doctor\Auth;

use Illuminate\Http\Request;
use Facades\App\Helper\Helper;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Providers\RouteServiceProvider;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller
{   
    public function login()
    {
        if(View::exists('doctor.auth.login'))
        {
            return view('doctor.auth.login');
        }
        abort(Response::HTTP_NOT_FOUND);
    }

    public function processLogin(Request $request){
        $credentials = $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
       // return  $request->validate();
        if(Auth::guard('doctor')->attempt($credentials)){

            Doctor::whereEmail($request->email)->update([
                'last_login' =>now()
            ]);

            if(isDoctorActive($request->input('email'))){

            return redirect(RouteServiceProvider::DOCTOR);
            //    return redirect('doctor/home');
            }else{
                Auth::guard('doctor')->logout();
                return redirect()->back()->with('message','Your Status is Inactive.');
            }
        }else{
            return redirect()->back()->with('message','Not Match!');
        }
    }
}
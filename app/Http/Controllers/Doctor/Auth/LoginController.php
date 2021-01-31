<?php

namespace App\Http\Controllers\Doctor\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class LoginController extends Controller
{
   public function login(){
       if (View::exists('doctor.auth.login')){

           return view('doctor.auth.login');
       }
       abort(404);


   }

   public function processLogin(Request $request){

       $credentials = $request->validate([
           'email'=>'required',
           'password'=>'required',
       ]);

       if (Auth::guard('doctor')->attempt($credentials)){
           
           if (isDoctorActive($request->email)){

               //active doctor
               return 'active';
           }
           //inactive doctor
           return 'inactive';
       }

   }



}

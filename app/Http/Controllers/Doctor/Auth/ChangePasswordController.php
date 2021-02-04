<?php

namespace App\Http\Controllers\Doctor\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ChangePasswordController extends Controller
{
   public function index(){
       return view('doctor.auth.change_password');
   }

   public function change_password(Request $request){

       Auth::guard('doctor')->id();

    //    return Auth::guard('doctor')->user()->id;


   }



}//end of the class

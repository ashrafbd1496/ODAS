<?php

namespace App\Http\Controllers\Doctor\Auth;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
   public function index(Doctor $doctor){
       return $id = Auth::guard('doctor')->id();
       return view('doctor.profile.profile');
   }
}

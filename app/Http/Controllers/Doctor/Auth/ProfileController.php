<?php

namespace App\Http\Controllers\Doctor\Auth;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
   public function index(Doctor $doctor){

        $id = Auth::guard('doctor')->id();

       return view('doctor.profile.profile',[

            'doctor' =>$doctor::findOrFail($id),
       ]);
   }

   public function profile_update(Request $request,$id){
       $experience = array_filter($request->start_date, function($filter){
           return ! empty($filter);
       });

       $counter = sizeof($experience);

       for ($i = 0;$i <$counter;$i++){
           return $request->start_date[$i];
       }
   }
}

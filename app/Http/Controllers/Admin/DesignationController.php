<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function index(Designation $designation) {

        return view('admin.designation.index',[
            'designations'=>$designation->latest()->get(),
        ]);
}





}

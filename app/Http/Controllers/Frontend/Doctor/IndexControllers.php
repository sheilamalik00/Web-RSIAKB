<?php

namespace App\Http\Controllers\Frontend\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class IndexControllers extends Controller
{
    public function index()
    {
        $doctor = Doctor::all();
        return view('frontend.doctor.index',compact('doctor'));
    }
}

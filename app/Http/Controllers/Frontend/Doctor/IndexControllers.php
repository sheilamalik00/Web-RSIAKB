<?php

namespace App\Http\Controllers\Frontend\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Doctor;
use App\Models\SpecialistDoctor;
use Illuminate\Http\Request;

class IndexControllers extends Controller
{
    public function index()
    {
        $doctor = Doctor::all();
        $specialist = SpecialistDoctor::all();
        $blog = Blog::latest()->limit(2)->get();
        return view('frontend.doctor.index',compact('doctor','specialist','blog'));
        
        // return view('frontend.doctor.index',compact('doctor'));
    }
}

<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Doctor;
use App\Models\SpecialistDoctor;
use Illuminate\Http\Request;

class IndexControllers extends Controller
{
    public function index()
    {
        $blog = Blog::latest()->limit(2)->get();
        $doctor = Doctor::latest()->limit(3)->get();
        $doctors = Doctor::all();
        $specialist = SpecialistDoctor::all();
        return view('frontend.home.index',compact('blog','doctor','doctors','specialist'));
        // return view('frontend.home.index');
    }
}

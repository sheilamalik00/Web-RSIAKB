<?php

namespace App\Http\Controllers\Frontend\Schedule;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Doctor;
use App\Models\SpecialistDoctor;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $dokter = Doctor::with('get_specialist_doctor')->get();
        $blog = Blog::latest()->limit(2)->get();
        $doctor = Doctor::latest()->limit(3)->get();
        // $doctors = Doctor::all();
        $specialist = SpecialistDoctor::all();
        return view('frontend.schedule.index',compact('blog','doctor','dokter','specialist'));
        // return view('frontend.schedule.index', compact('dokter'));
        // return view('frontend.schedule.index');
    }
}

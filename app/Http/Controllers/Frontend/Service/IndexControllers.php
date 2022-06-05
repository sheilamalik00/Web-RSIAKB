<?php

namespace App\Http\Controllers\Frontend\Service;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Doctor;
use Illuminate\Http\Request;

class IndexControllers extends Controller
{
    public function index()
    {
        $blog = Blog::latest()->limit(2)->get();
        $doctor = Doctor::latest()->limit(3)->get();

        return view('frontend.service.index', compact('blog','doctor'));
        // return view('frontend.service.index');
    }
}

<?php

namespace App\Http\Controllers\Frontend\About;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Galeri;
use Illuminate\Http\Request;

class IndexControllers extends Controller
{
    public function index()
    {
        $blog = Blog::latest()->limit(2)->get();
        $gallery = Galeri::latest()->limit(6)->where('type','2')->get();
        return view('frontend.about.index', compact('blog','gallery'));
        // return view('frontend.about.index',compact('blog'));
    }
}

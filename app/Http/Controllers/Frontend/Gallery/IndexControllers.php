<?php

namespace App\Http\Controllers\Frontend\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Galeri;
use Illuminate\Http\Request;

class IndexControllers extends Controller
{
    public function index()
    {
        $galleryVideo = Galeri::where('type','1')->limit(8)->latest()->get();
        $galleryImage = Galeri::where('type','2')->limit(12)->latest()->get();
        $blog = Blog::latest()->limit(2)->get();
        return view('frontend.gallery.index', compact('galleryVideo','galleryImage','blog'));
        // return view('frontend.gallery.index',compact('gallery','blog'));
    }
}

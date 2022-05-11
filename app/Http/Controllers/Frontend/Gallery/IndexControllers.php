<?php

namespace App\Http\Controllers\Frontend\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;

class IndexControllers extends Controller
{
    public function index()
    {
        $gallery = Galeri::all();
        return view('frontend.gallery.index',compact('gallery'));
    }
}

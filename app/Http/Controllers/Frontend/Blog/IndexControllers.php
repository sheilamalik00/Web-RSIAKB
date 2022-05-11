<?php

namespace App\Http\Controllers\Frontend\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class IndexControllers extends Controller
{
    public function index()
    {
        $blog = Blog::all();
        return view('frontend.blog.index',compact('blog'));
    }
    public function show($id)
    {
        $blog = Blog::where('slug',$id)->first();
        return view('frontend.blog.show',compact('blog'));
        // return view('frontend.blog.show');
    }
}

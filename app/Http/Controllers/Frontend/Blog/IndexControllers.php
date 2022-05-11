<?php

namespace App\Http\Controllers\Frontend\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\CategoryBlog;
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
        $category = CategoryBlog::all();
        return view('frontend.blog.show',compact('blog','category'));
        // return view('frontend.blog.show',compact('blog'));
        // return view('frontend.blog.show');
    }
}

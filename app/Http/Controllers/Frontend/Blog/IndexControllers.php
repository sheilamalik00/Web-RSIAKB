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
        $blog = Blog::latest()->limit(2)->get();
        $blogList = Blog::latest()->paginate(15);
        $category = CategoryBlog::with('get_blog')->get();
        return view('frontend.blog.index', compact('blog','blogList','category'));
        // return view('frontend.blog.index',compact('blog','blogList'));
    }
    public function show($id)
    {
        $blog = Blog::latest()->limit(2)->get();
        $blogDetail = Blog::where('slug',$id)->first();
        $category = CategoryBlog::all();
        return view('frontend.blog.show',compact('blog','blogDetail','category'));

        // return view('frontend.blog.show',compact('blog'));
        // return view('frontend.blog.show');
    }
}

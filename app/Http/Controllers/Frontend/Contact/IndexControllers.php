<?php

namespace App\Http\Controllers\Frontend\Contact;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class IndexControllers extends Controller
{
    public function index()
    {
        $blog = Blog::latest()->limit(2)->get();
        return view('frontend.contact.index',compact('blog'));

    }
}

<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexControllers extends Controller
{
    public function index()
    {
        return view('frontend.home.index');
    }
}

<?php

namespace App\Http\Controllers\Frontend\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexControllers extends Controller
{
    public function index()
    {
        return view('frontend.contact.index');
    }
}

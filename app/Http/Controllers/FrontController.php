<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function blogPage(){

        return view('front.blog.index');

    }

    public function blogDetails(){

        return view('front.blog.details');

    }
}

<?php

namespace App\Http\Controllers\Website;

use App\Models\PostedJobs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home()
    {
        $postJobShow = PostedJobs::all();
        return view('frontend.pages.home',compact('postJobShow'));
    }
}

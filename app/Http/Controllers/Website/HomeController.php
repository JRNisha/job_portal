<?php

namespace App\Http\Controllers\Website;

use App\Models\PostedJobs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Employer;

class HomeController extends Controller
{
    public function home()
    {


        $count = Employer::count();
        // dd($count);
        $postJobShow = PostedJobs::all();
        return view('frontend.pages.home',compact('postJobShow','count'));
    }
}

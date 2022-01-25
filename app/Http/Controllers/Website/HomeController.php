<?php

namespace App\Http\Controllers\Website;

use App\Models\PostedJobs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Employer;
use App\Models\User;

class HomeController extends Controller
{
    public function home()
    {
        $countCandidate =  User::where('role', "Candidate")->count();
        $countCompany =  User::where('role', "company")->count();
        $countJob = PostedJobs::count();
        $count = Employer::count();
        // dd($count);
        $postJobShow = PostedJobs::all();
        return view('frontend.pages.home',compact('postJobShow','count','countJob','countCompany','countCandidate'));
    }
}

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
        $countMedicalJob = PostedJobs::where('category', "Medical")->count();
        $countWebJob = PostedJobs::where('category', "Web Development")->count();
        $countItJob = PostedJobs::where('category', "IT")->count();
        $countCleaningJob = PostedJobs::where('category', "Cleaning")->count();


        $countDigitalMarketingJob = PostedJobs::where('category', "Digital Marketing")->count();
        $countBankJob = PostedJobs::where('category', "Bank Job")->count();
        $countBusinessJob = PostedJobs::where('category', "Business")->count();
        $countPrivateTutorJob = PostedJobs::where('category', "Private Tutor")->count();
        $countGraphicsDesignerJob = PostedJobs::where('category', "GraphicsDesigner")->count();

        
        if(request()->category && request()->location ){
            $category=request()->category;
            $location=request()->location;
            $postJobShow=PostedJobs::Where('category','LIKE','%'.$category.'%')->orWhere('location','LIKE','%'.$location.'%')->get();
                                      return view('frontend.pages.home',compact('postJobShow','count','countJob','countCompany','countCandidate','countMedicalJob','countItJob','countWebJob','countCleaningJob','countBankJob','countDigitalMarketingJob','countBusinessJob','countPrivateTutorJob','countGraphicsDesignerJob'));

                                      dd($postJobShow);
            }

        // dd($count);
        $postJobShow = PostedJobs::all();
        return view('frontend.pages.home',compact('postJobShow','count','countJob','countCompany','countCandidate','countMedicalJob','countItJob',
        'countWebJob','countCleaningJob','countBankJob','countDigitalMarketingJob','countBusinessJob','countPrivateTutorJob','countGraphicsDesignerJob'));
    }
}

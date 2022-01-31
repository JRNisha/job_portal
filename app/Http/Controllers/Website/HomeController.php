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
        $today=date('Y-m-d');

        $countCandidate =  User::where('role', "Candidate")->count();
        $countCompany =  User::where('role', "company")->count();
        $countJob = PostedJobs::where('deadline','>=',$today)->count();
        $count = Employer::count();
        $countMedicalJob = PostedJobs::where('category', "Medical & Healths")-> where('deadline','>=',$today)->count();
        $countWebJob = PostedJobs::where('category', "Web Development")-> where('deadline','>=',$today)->count();
        $countItJob = PostedJobs::where('category', "IT")-> where('deadline','>=',$today)->count();
        $countCleaningJob = PostedJobs::where('category', "Cleaning")->
                                        where('deadline','>=',$today)->count();


        $countDigitalMarketingJob = PostedJobs::where('category', "Digital Marketing")-> where('deadline','>=',$today)->count();
        $countBankJob = PostedJobs::where('category', "Bank Jobs")-> where('deadline','>=',$today)->count();
        $countBusinessJob = PostedJobs::where('category', "Business")-> where('deadline','>=',$today)->count();
        $countPrivateTutorJob = PostedJobs::where('category', "Private Tutors")-> where('deadline','>=',$today)->count();
        $countGraphicsDesignerJob = PostedJobs::where('category', "Graphics Designer")-> where('deadline','>=',$today)->count();


        if(request()->category && request()->location ){
            $category=request()->category;
            $location=request()->location;
            $postJobShow=PostedJobs::Where('category','LIKE','%'.$category.'%')->orWhere('location','LIKE','%'.$location.'%')->where('deadline','>=',$today)->get();
                                      return view('frontend.pages.home',compact('postJobShow','count','countJob','countCompany','countCandidate','countMedicalJob','countItJob','countWebJob','countCleaningJob','countBankJob','countDigitalMarketingJob','countBusinessJob','countPrivateTutorJob','countGraphicsDesignerJob'));


            }

        // dd($count);

        $postJobShow = PostedJobs::where('deadline','>=',$today)->get();
        return view('frontend.pages.home',compact('postJobShow','count','countJob','countCompany','countCandidate','countMedicalJob','countItJob',
        'countWebJob','today','countCleaningJob','countBankJob','countDigitalMarketingJob','countBusinessJob','countPrivateTutorJob','countGraphicsDesignerJob'));
    }
}

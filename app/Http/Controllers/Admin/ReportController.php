<?php

namespace App\Http\Controllers\Admin;

use App\Models\PostedJobs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\JobApplication;

class ReportController extends Controller
{
    public function postedJobReport(){
        $postJobShow = PostedJobs::all();
        return view('backend.admin.pages.PostedJobReport',compact('postJobShow'));
    }


    public function searchreport(Request $request)
    {

        $postJobShow=PostedJobs::whereBetween('created_at',[$request->from,$request->to])->get();

;
        return view('backend.admin.pages.PostedJobReport',compact('postJobShow'));

    }



    public function jobApplicationReport(){
        $jobApplicationView = JobApplication::all();
        return view('backend.admin.pages.jobApplicationReport',compact('jobApplicationView'));
    }


    public function searchApplicationReport(Request $request)
    {

        $jobApplicationView=JobApplication::whereBetween('created_at',[$request->from,$request->to])->get();

;
        return view('backend.admin.pages.jobApplicationReport',compact('jobApplicationView'));

    }
}

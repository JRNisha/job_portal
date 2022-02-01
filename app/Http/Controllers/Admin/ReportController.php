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
        $request->validate([
            'from' => 'required',
            'to' => 'required|date|after_or_equal:from',
        ]);


        $postJobShow=PostedJobs::whereBetween('created_at',[$request->from,$request->to])->get();
// dd($postJobShow);
        return view('backend.admin.pages.PostedJobReport',compact('postJobShow'));

    }



    public function jobApplicationReport(){
        $jobApplicationView = JobApplication::all();
        return view('backend.admin.pages.jobApplicationReport',compact('jobApplicationView'));
    }


    public function searchApplicationReport(Request $request)
    {

            $request->validate([
                'from' => 'required',
                'to' => 'required|date|after_or_equal:from',
            ]);



        $jobApplicationView=JobApplication::whereBetween('created_at',[$request->from,$request->to])->get();
// dd($jobApplicationView);
        return view('backend.admin.pages.jobApplicationReport',compact('jobApplicationView'));

    }
}

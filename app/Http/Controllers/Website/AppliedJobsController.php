<?php

namespace App\Http\Controllers\Website;

use App\Models\PostedJobs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppliedJobsController extends Controller
{





//gettinng applied jobs
public function getAppliedJobs()
    {
       $postedJob= session()->get('appliedJobs');
       return view('frontend.pages.appliedJobs',compact('postedJob'));
    }


    //adding
    public function addToAppliedJobs($id){
        $postedJob=PostedJobs::find($id);
       if (!$postedJob){
           return redirect()->back()->with('error','No Jobs Found.');
       }
       $postedJobExist=session()->get('appliedJobs');

       if(!$postedJobExist) {
           //case 01: cart is empty.
           //  action: add product to cart
           $postedJobData = [
               $id => [
                   'job_id' => $id,
                   'job_title' => $postedJob->title,
                   'job_type' => $postedJob->type,
                   'job_salary' => $postedJob->salary,
                   'job_company_name'=>$postedJob->company,
                   'job_location'=>$postedJob->location ,
                   'job_qty' => 1,
               ]
           ];
           session()->put('appliedJobs', $postedJobData);
           return redirect()->back()->with('message', 'Applied to the job successfully');
    }


    }
}

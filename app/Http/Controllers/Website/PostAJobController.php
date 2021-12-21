<?php

namespace App\Http\Controllers\Website;

use Throwable;
use App\Models\PostedJobs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostAJobController extends Controller
{

    //job Details showing from website

    public function jobDetailsShow($job_id){
        //dd($job_id);
        $postedJob=PostedJobs::find($job_id);
        return view('frontend.pages.jobDetails',compact('postedJob'));
    }

    //Browsing jobs
    public function browseJobs(){
        return view('frontend.pages.browseJobs');
    }

//
    public function postJobShow(){
        $postJobShow = PostedJobs:: orderBy('id','desc')->paginate(5);
        return view('backend.admin.pages.PostedJob_list',compact('postJobShow'));
    }




    public function postJobForm(){
        return view('frontend.pages.PostAJobForm');
    }




    public function postJobStore(Request $request){
        // dd($request->all());
          $request->validate([
          'title'=>'required',
          'type'=>'required',


          ]);

   try{
    PostedJobs::create([

        'title'=>$request->title,
        'company'=>$request->company,
        'salary'=>$request->salary,
        'type'=>$request->type,
        'location'=>$request->location

       ]);
      return redirect()->route('post.job')->with('msg', 'Job list updated!');
    }
       catch(Throwable $throw){
        //    dd($throw);
        return redirect()->back()->with('error','Problem!');
       }
   }



}

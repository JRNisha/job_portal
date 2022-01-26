<?php

namespace App\Http\Controllers\Website;

use Throwable;
use Carbon\Carbon;
use App\Models\User;
use App\Models\PostedJobs;
use Illuminate\Http\Request;
use App\Models\JobApplication;
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
    public function browseJobs($job_id){
        $postedJob=PostedJobs::find($job_id);
        return view('frontend.pages.browseJobs',compact('postedJob'));
    }

//
    public function postJobShow(){

        $key=null;
        if(request()->search){
            $key=request()->search;

            $postJobShow=PostedJobs::where('title','LIKE','%'.$key.'%')->orWhere('company_id','LIKE','%'.$key.'%')->orWhere('salary','LIKE','%'.$key.'%')
                                      ->orWhere('type','LIKE','%'.$key.'%')->orWhere('location','LIKE','%'.$key.'%')->paginate(3);
                                      return view('backend.admin.pages.PostedJob_list',compact('postJobShow','key'));

                                    }

        $countJob = PostedJobs::count();
        $postJobShow = PostedJobs:: orderBy('id','desc')->paginate(3);
        return view('backend.admin.pages.PostedJob_list',compact('postJobShow','key','countJob'));
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
        'company_id'=>auth()->user()->id,
        'category'=>$request->category,
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
   //job categories
   public function jobCategories(){
    $countGraphicsDesignerJob = PostedJobs::where('category', "GraphicsDesigner")->count();
       $postJob=PostedJobs::all();
       return view('frontend.pages.jobCatergories',compact('postJob'));
   }
   //job categories private tutors
   public function jobCategoriesPrivateTutor(){
    $countPrivateTutorJob = PostedJobs::where('category', "Private Tutor")->count();
    $postJob=PostedJobs::all();
    return view('frontend.pages.jobCategoriesPrivateTutors',compact('postJob'));
}

   //job categories business group
   public function jobCategoriesBusinessGroup(){
    $countBusinessJob = PostedJobs::where('category', "Business")->count();
    $postJob=PostedJobs::all();
    return view('frontend.pages.jobCategoriesBusinessGroup',compact('postJob'));
}
   ////job categories bank jobs
   public function jobCategoriesBankJobs(){
    $countBankJob = PostedJobs::where('category', "Bank Job")->count();
    $postJob=PostedJobs::all();
    return view('frontend.pages.jobCategoriesBankJobs',compact('postJob'));
}
// //job categories digital marketing
public function jobCategoriesDigitalMarketing(){
    $countDigitalMarketingJob = PostedJobs::where('category', "Digital Marketing")->count();
    $postJob=PostedJobs::all();
    return view('frontend.pages.jobCategoriesDigitalMarketing',compact('postJob'));
}
//job categories cleaning services
public function jobCategoriesCleaningServices(){
    $countCleaningJob = PostedJobs::where('category', "Cleaning")->count();
    $postJob=PostedJobs::all();
    return view('frontend.pages.jobCategoriesCleaningServices',compact('postJob'));
}

//job categories webdevelopment
public function jobCategoriesWebDevelopment(){
    $countWebJob = PostedJobs::where('category', "Web Development")->count();
    $postJob=PostedJobs::all();
    return view('frontend.pages.jobCategoriesWebDevelopment',compact('postJob'));
}
// //job categories it/web
public function jobCategoriesIt(){
    $countItJob = PostedJobs::where('category', "IT")->count();
    $postJob=PostedJobs::all();
    return view('frontend.pages.jobCategoriesIt',compact('postJob'));
}
// //job categories medical
public function jobCategoriesMedical(){
    $countMedicalJob = PostedJobs::where('category', "Medical")->count();
    $postJob=PostedJobs::all();
    return view('frontend.pages.jobCategoriesMedical',compact('postJob'));
}



//job application
public function jobApplication($id){
    $post = PostedJobs::find($id);

   return view('frontend.pages.jobApplication',compact('post'));
}


public function jobApplicationShow(){


    if(auth()->user()->role=='company'){
        $jobApplicationView = JobApplication::with(['user','JobApplication'])
        ->where('company_id',auth()->user()->id)->orderBy('id','desc')->paginate(5);

    }else{
        $jobApplicationView = JobApplication::with(['user','JobApplication'])->orderBy('id','desc')->paginate(5);

    }

    return view('backend.admin.pages.jobApply',compact('jobApplicationView'));
}



public function jobApplicationStore(Request $request,$id){

$post = PostedJobs::find($id);
 try{
     JobApplication::create([
      'user_id'=>auth()->user()->id,
      'posted_job_id'=>$post->id,
      'date'=>Carbon::now(),
      'company_id' => $post->company_id,



     ]);
    return redirect()->route('website')->with('message', 'application updated!');
  }
     catch(Throwable $throw){

      return redirect()->back()->with('error','Problem!');
     }
 }

 //job applicant
 public function applicant($id){

    $jobapplication = jobApplication::with('user')->find($id);

     return view('backend.admin.pages.applicantDetails',compact('jobapplication'));
 }


 //hire

 public function hire($id){
     $hire=jobApplication::where('id',$id)->first();

     $hire->update([
        'status'=>'hired'
     ]);

     return redirect()->route('job.apply');


 }

 //reject
 public function reject($id){
    $reject=jobApplication::where('id',$id)->first();

    $reject->update([
       'status'=>'Rejected'
    ]);

    return redirect()->route('job.apply');


}
}

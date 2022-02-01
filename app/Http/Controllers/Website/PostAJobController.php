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


//delete
// public function postJobDelete($postJobShow)
// {
//  PostedJobs::find($postJobShow)->delete();
//  return redirect()->back()->with('success','Job has been deleted successfully');
// }


    public function postJobShow(){


        $today=date('Y-m-d');





        $key=null;
        if(request()->search){
            $key=request()->search;

            $postJobShow=PostedJobs::whereLike(['title', 'company.name','category','salary','type','location'],  $key)->paginate(3);

                                      return view('backend.admin.pages.PostedJob_list',compact('postJobShow','key'));

                                    }


        $countJob = PostedJobs::count();
        $postJobShow = PostedJobs::where('deadline','>=',$today)->orderBy('id','desc')->paginate(3);

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
        'location'=>$request->location,
        'deadline'=>$request->deadline

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
    $today=date('Y-m-d');
    $countGraphicsDesignerJob = PostedJobs::where('category', "Graphics Designer")->count();
       $postJob=PostedJobs::where('deadline','>=',$today)->get();
       return view('frontend.pages.jobCatergories',compact('postJob','today'));
   }
   //job categories private tutors
   public function jobCategoriesPrivateTutor(){
    $today=date('Y-m-d');
    $countPrivateTutorJob = PostedJobs::where('category', "Private Tutors")->count();
    $postJob=PostedJobs::where('deadline','>=',$today)->get();
    return view('frontend.pages.jobCategoriesPrivateTutors',compact('postJob','today'));
}

   //job categories business group
   public function jobCategoriesBusinessGroup(){
    $today=date('Y-m-d');
    $countBusinessJob = PostedJobs::where('category', "Business")->count();
    $postJob=PostedJobs::where('deadline','>=',$today)->get();
    return view('frontend.pages.jobCategoriesBusinessGroup',compact('postJob','today'));
}
   ////job categories bank jobs
   public function jobCategoriesBankJobs(){
    $today=date('Y-m-d');
    $countBankJob = PostedJobs::where('category', "Bank Jobs")->count();
    $postJob=PostedJobs::where('deadline','>=',$today)->get();
    return view('frontend.pages.jobCategoriesBankJobs',compact('postJob','today'));
}
// //job categories digital marketing
public function jobCategoriesDigitalMarketing(){
    $today=date('Y-m-d');
    $countDigitalMarketingJob = PostedJobs::where('category', "Digital Marketing")->count();
    $postJob=PostedJobs::where('deadline','>=',$today)->get();
    return view('frontend.pages.jobCategoriesDigitalMarketing',compact('postJob','today'));
}
//job categories cleaning services
public function jobCategoriesCleaningServices(){
    $today=date('Y-m-d');
    $countCleaningJob = PostedJobs::where('category', "Cleaning")->where('deadline','>=',$today)->count();
    $postJob=PostedJobs::all()->where('deadline','>=',$today)->get();
    return view('frontend.pages.jobCategoriesCleaningServices',compact('postJob','today'));
}

//job categories webdevelopment
public function jobCategoriesWebDevelopment(){
    $today=date('Y-m-d');
    $countWebJob = PostedJobs::where('category', "Web Development")->count();
    $postJob=PostedJobs::where('deadline','>=',$today)->get();
    return view('frontend.pages.jobCategoriesWebDevelopment',compact('postJob','today'));
}
// //job categories it/web
public function jobCategoriesIt(){
    $today=date('Y-m-d');
    $countItJob = PostedJobs::where('category', "IT")->count();
    $postJob=PostedJobs::where('deadline','>=',$today)->get();
    return view('frontend.pages.jobCategoriesIt',compact('postJob','today'));
}
// //job categories medical
public function jobCategoriesMedical(){
    $today=date('Y-m-d');
    $countMedicalJob = PostedJobs::where('category', "Medical & Healths")->count();
    $postJob=PostedJobs::where('deadline','>=',$today)->get();
    return view('frontend.pages.jobCategoriesMedical',compact('postJob','today'));
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

    $reject=jobApplication::where('id',$id)->first();
    $hiredEmployee = jobApplication::where('user_id',$reject->user_id)->where('status','Hired')->first();

    if($hiredEmployee){
        return redirect()->route('job.apply')->with('error', 'The Candidate is already Hired by another Company!');
    }
    if($reject->status == 'Rejected'){
        return redirect()->route('job.apply');
    }else{
    if($reject->status == 'pending' || $reject->status == 'Terminated'){
        jobApplication::find($id)->update([
            'status'=>'Hired'
         ]);

         return redirect()->route('job.apply')->with('success', 'The Candidate is Successfully Hired by your Company!');
    }
         return redirect()->route('job.apply');
    }



  }

 //reject
 public function reject($id){
    $reject=jobApplication::where('id',$id)->first();

    if($reject->status == 'Hired'){
        return redirect()->route('job.apply');
    }else{
        jobApplication::find($id)->update([
            'status'=>'Rejected'
         ]);

         return redirect()->route('job.apply')->with('error', 'The Candidate is rejected..');
    }
 }


 //terminate
 public function terminate($id){
    $reject=jobApplication::where('id',$id)->first();

    if($reject->status == 'Hired'){
        $reject->update([
            'status'=>'Terminated'
         ]);

         return redirect()->route('job.apply')->with('error', 'The Candidate is Terminated!');
    }
    return redirect()->route('job.apply')->with('error', 'The Candidate is Terminated!');
 }

}

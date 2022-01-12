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
    public function browseJobs($job_id){
        $postedJob=PostedJobs::find($job_id);
        return view('frontend.pages.browseJobs',compact('postedJob'));
    }

//
    public function postJobShow(){

        $key=null;
        if(request()->search){
            $key=request()->search;
            $postJobShow=PostedJobs::where('title','LIKE','%'.$key.'%')->orWhere('company','LIKE','%'.$key.'%')->orWhere('salary','LIKE','%'.$key.'%')
                                      ->orWhere('type','LIKE','%'.$key.'%')->orWhere('location','LIKE','%'.$key.'%')->paginate(3);
                                      return view('backend.admin.pages.PostedJob_list',compact('postJobShow','key'));
        }
        $postJobShow = PostedJobs:: orderBy('id','desc')->paginate(3);
        return view('backend.admin.pages.PostedJob_list',compact('postJobShow','key'));
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
       $postJob=PostedJobs::all();
       return view('frontend.pages.jobCatergories',compact('postJob'));
   }
   //job categories private tutors
   public function jobCategoriesPrivateTutor(){
    $postJob=PostedJobs::all();
    return view('frontend.pages.jobCategoriesPrivateTutors',compact('postJob'));
}
   
   //job categories business group
   public function jobCategoriesBusinessGroup(){
    $postJob=PostedJobs::all();
    return view('frontend.pages.jobCategoriesBusinessGroup',compact('postJob'));
}
   ////job categories bank jobs
   public function jobCategoriesBankJobs(){
    $postJob=PostedJobs::all();
    return view('frontend.pages.jobCategoriesBankJobs',compact('postJob'));
}
// //job categories digital marketing
public function jobCategoriesDigitalMarketing(){
    $postJob=PostedJobs::all();
    return view('frontend.pages.jobCategoriesDigitalMarketing',compact('postJob'));
}
//job categories cleaning services
public function jobCategoriesCleaningServices(){
    $postJob=PostedJobs::all();
    return view('frontend.pages.jobCategoriesCleaningServices',compact('postJob'));
}

//job categories webdevelopment
public function jobCategoriesWebDevelopment(){
    $postJob=PostedJobs::all();
    return view('frontend.pages.jobCategoriesWebDevelopment',compact('postJob'));
}
// //job categories it/web
public function jobCategoriesIt(){
    $postJob=PostedJobs::all();
    return view('frontend.pages.jobCategoriesIt',compact('postJob'));
}
// //job categories medical
public function jobCategoriesMedical(){
    $postJob=PostedJobs::all();
    return view('frontend.pages.jobCategoriesMedical',compact('postJob'));
}

}

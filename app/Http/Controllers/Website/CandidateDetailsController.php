<?php

namespace App\Http\Controllers\Website;

use Throwable;
use App\Models\Candidate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\JobApplication;

class CandidateDetailsController extends Controller
{

//delete
public function candidateProfileDelete($candidate)
{
 User::find($candidate)->delete();
 return redirect()->back()->with('success','Candidate has been deleted successfully');
}






    public function candidateProfileForm(){
      return view('frontend.pages.CreateCandidateProfile');
    }



    public function Profile(){
        $jobApplicationView = JobApplication::with(['user','JobApplication'])
        ->where('user_id',auth()->user()->id)->orderBy('id','desc')->paginate(15);
        return view('frontend.pages.candidateProfile',compact('jobApplicationView'));
    }



    public function candidateProfileShow(){



        $key=null;
        if(request()->search){
            $key=request()->search;

            $candidateProfileShow=User::Where('name','LIKE','%'.$key.'%')->orWhere('email','LIKE','%'.$key.'%')
                                      ->orWhere('mobile','LIKE','%'.$key.'%')->orWhere('address','LIKE','%'.$key.'%')->paginate(15);
                                      return view('backend.admin.pages.ShowCandidateProfile',compact('candidateProfileShow','key'));
        }



        $countCandidate =  User::where('role', "Candidate")->count();
        $candidateProfileShow = User:: orderBy('id','desc')->paginate(15);
        return view('backend.admin.pages.ShowCandidateProfile',compact('candidateProfileShow','countCandidate'));
    }



//update Candidate Profile
public function updateCandidate(Request $request,$candidate_id){


    $imagename = '';


if ($request->hasFile('image')) {
    $image = $request->file('image');
    $imagename = date('Ymdhms').'.'.$image->getClientOriginalExtension();
    $image->storeAs('/uploads/candidate/',$imagename);

}

$cvname = '';
if ($request->hasFile('cv')) {
    $cv = $request->file('cv');
    $cvname = date('Ymdhms').'.'.$cv->getClientOriginalExtension();
    $cv->storeAs('/uploads/cv/',$cvname);

}



    try{
        User::find($candidate_id)->update([

            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'mobile'=>$request->mobile,
            'address'=>$request->address,
            'image'=>$imagename,
            'cv'=>$cvname,
            'gender'=>$request->gender,
        ]);
       return redirect()->route('profile')->with('msg', 'Your Profile has been updated!');
     }
        catch(Throwable $throw){
         return redirect()->back()->with('error','Problem!');
        }


   }
   public function editCandidate($candidate_id){

      $candidate=User::find($candidate_id);

      return view('frontend.pages.updateCandidate',compact('candidate'));
   }

















public function candidateProfileStore(Request $request){
    //dd($request->all());
    $request->validate([
        'email'=>'required',
        'password'=>'required',
        'mobile'=>'required',
        'cv'=>'required',




        ]);
        $imagename = '';

            // for image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            // $cv = $request->file('cv');

            $imagename = date('Ymdhms').'.'.$image->getClientOriginalExtension();
            // $cvname = date('Ymdhms').'.'.$image->getClientOriginalExtension();
            // dd($cvname);
            $image->storeAs('/uploads/candidate/',$imagename);
            // $image->storeAs('/uploads/cv/',$cvname);

        }

        $cvname = '';
        // for cv
        if ($request->hasFile('cv')) {
            // $image = $request->file('image');
            $cv = $request->file('cv');

            // $imagename = date('Ymdhms').'.'.$image->getClientOriginalExtension();
            $cvname = date('Ymdhms').'.'.$cv->getClientOriginalExtension();
            // $image->storeAs('/uploads/candidate/',$imagename);
            $cv->storeAs('/uploads/cv/',$cvname);

        }

 try{
     User::create([

      'name'=>$request->name,
      'email'=>$request->email,
      'password'=>bcrypt($request->password),
      'mobile'=>$request->mobile,
      'address'=>$request->address,
      'image'=>$imagename,
      'cv'=>$cvname,
      'gender'=>$request->gender,

     ]);
    return redirect()->route('create.candidate.profile')->with('msg', 'candidate list updated!');
  }
     catch(Throwable $throw){
      return redirect()->back()->with('error','Problem!');
     }
 }

}

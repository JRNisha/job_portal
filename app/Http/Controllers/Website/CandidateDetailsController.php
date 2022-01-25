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
    public function candidateProfileForm(){
      return view('frontend.pages.CreateCandidateProfile');
    }



    public function Profile(){
        $jobApplicationView = JobApplication::with(['user','JobApplication'])
        ->where('user_id',auth()->user()->id)->orderBy('id','desc')->paginate(5);
        return view('frontend.pages.candidateProfile',compact('jobApplicationView'));
    }



    public function candidateProfileShow(){



        $key=null;
        if(request()->search){
            $key=request()->search;

            $candidateProfileShow=User::Where('name','LIKE','%'.$key.'%')->orWhere('email','LIKE','%'.$key.'%')
                                      ->orWhere('mobile','LIKE','%'.$key.'%')->orWhere('address','LIKE','%'.$key.'%')->paginate(3);
                                      return view('backend.admin.pages.ShowCandidateProfile',compact('candidateProfileShow','key'));
        }



        $countCandidate =  User::where('role', "Candidate")->count();
        $candidateProfileShow = User:: orderBy('id','desc')->paginate(5);
        return view('backend.admin.pages.ShowCandidateProfile',compact('candidateProfileShow','countCandidate'));
    }


public function candidateProfileStore(Request $request){
    //dd($request->all());
    $request->validate([
        'email'=>'required',
        'password'=>'required',
        'mobile'=>'required',


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
      'password'=>$request->password,
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

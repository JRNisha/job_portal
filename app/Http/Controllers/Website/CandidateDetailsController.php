<?php

namespace App\Http\Controllers\Website;

use Throwable;
use App\Models\Candidate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CandidateDetailsController extends Controller
{
    public function candidateProfileForm(){
      return view('frontend.pages.CreateCandidateProfile');
    }



    public function candidateProfileShow(){
        $candidateProfileShow = Candidate:: orderBy('id','desc')->paginate(5);
        return view('backend.admin.pages.ShowEmployerProfile',compact('candidateProfileShow'));
    }


public function candidateProfileStore(Request $request){
    //dd($request->all());
    $request->validate([
        'email'=>'required',
        'password'=>'required',
        'mobile'=>'required',


        ]);

 try{
     Candidate::create([

      'name'=>$request->name,
      'email'=>$request->email,
      'password'=>$request->password,
      'mobile'=>$request->mobile,
      'address'=>$request->address,
      'image'=>$request->image,
      'cv'=>$request->cv,
      'gender'=>$request->gender,

     ]);
    return redirect()->route('create.candidate.profile')->with('msg', 'candidate list updated!');
  }
     catch(Throwable $throw){
      return redirect()->back()->with('error','Problem!');
     }
 }

}







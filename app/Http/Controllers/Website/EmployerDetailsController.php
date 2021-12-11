<?php

namespace App\Http\Controllers\Website;

use Throwable;
use App\Models\Employer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployerDetailsController extends Controller
{



    public function employerProfileShow(){
        $employerProfileShow = Employer:: orderBy('id','desc')->paginate(5);
        return view('backend.admin.pages.ShowEmployerProfile',compact('employerProfileShow'));
    }
    public function employerProfileForm(){
        return view('frontend.pages.CreateEmployerProfile');
      }


      public function employerProfileStore(Request $request){
       // dd($request->all());
          $request->validate([
          'email'=>'required',
          'password'=>'required',
          'mobile'=>'required',

          ]);

   try{
       Employer::create([

        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>$request->password,
        'mobile'=>$request->mobile,
        'address'=>$request->address,

       ]);
      return redirect()->route('create.employer.profile')->with('msg', 'employer list updated!');
    }
       catch(Throwable $throw){
        return redirect()->back()->with('error','Problem!');
       }
   }

}

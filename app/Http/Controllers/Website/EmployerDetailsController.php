<?php

namespace App\Http\Controllers\Website;

use Throwable;
use App\Models\Employer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployerDetailsController extends Controller
{



    public function employerProfileShow(){
        $count = Employer::count(); 
// dd($employerCount);
        $employerProfileShow = Employer:: orderBy('id','desc')->paginate(5);
        return view('backend.admin.pages.ShowEmployerProfile',compact('employerProfileShow','count'));
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
        'password'=>bcrypt($request->password),
        'mobile'=>$request->mobile,
        'address'=>$request->address,

       ]);
      return redirect()->route('create.employer.profile')->with('msg', 'employer list updated!');
    }
       catch(Throwable $throw){
        return redirect()->back()->with('error','Problem!');
       }
   }


   //delete

   public function deleteEmployer($employer)
   {
    Employer::find($employer)->delete();
    return redirect()->back()->with('success','Employer has been deleted successfully');
   }



   public function updateEmployer(Request $request,$employer_id){


    try{
        Employer::find($employer_id)->update([

         'name'=>$request->name,
         'email'=>$request->email,
         'password'=>bcrypt($request->password),
         'mobile'=>$request->mobile,
         'address'=>$request->address,

        ]);
       return redirect()->route('create.employer.profile')->with('msg', 'employer list updated!');
     }
        catch(Throwable $throw){
         return redirect()->back()->with('error','Problem!');
        }


   }
   public function editEmployer($employer_id){
      $employer=Employer::find($employer_id);
      return view('frontend.pages.updateEmployer',compact('employer'));
   }

}

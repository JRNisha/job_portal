<?php

namespace App\Http\Controllers\Website;

use Throwable;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PostedJobs;

class CompanyDetailsController extends Controller
{

//delete
public function companyProfileDelete($company)
{
 User::find($company)->delete();
 return redirect()->back()->with('success','Company has been deleted successfully');
}



//update Company Profile
public function updateCompany(Request $request,$company_id){


    try{
        User::find($company_id)->update([

         'name'=>$request->name,
         'email'=>$request->email,
         'password'=>bcrypt($request->password),
         'company_type'=>$request->company_type,
         'address'=>$request->address,

        ]);
       return redirect()->route('create.company.profile')->with('msg', 'company list updated!');
     }
        catch(Throwable $throw){
         return redirect()->back()->with('error','Problem!');
        }


   }
   public function editCompany($company_id){
      $company=User::find($company_id);
    //   dd($company);
      return view('frontend.pages.updateCompany',compact('company'));
   }




//company profile
public function companyProfile(){
    $user= auth()->user()->id;
    // dd($user);
    $postJobShow = PostedJobs::where('company_id',$user)->get();
    // dd($postJobShow);
    return view('frontend.pages.companyProfile',compact('postJobShow'));
}








    public function companyProfileShow(){



        $key=null;
        if(request()->search){
            $key=request()->search;

            $companyProfileShow=User::Where('name','LIKE','%'.$key.'%')->orWhere('email','LIKE','%'.$key.'%')
                                      ->orWhere('mobile','LIKE','%'.$key.'%')->orWhere('address','LIKE','%'.$key.'%')->paginate(10);
                                      return view('backend.admin.pages.ShowCompanyProfile',compact('companyProfileShow','key'));
        }

        $countCompany =  User::where('role', "company")->count();
        $companyProfileShow = User::orderBy('id','desc')->paginate(10);

        return view('backend.admin.pages.ShowCompanyProfile',compact('companyProfileShow','countCompany'));
    }
    public function companyProfileForm(){
        return view('frontend.pages.CreateCompanyProfile');
      }


      public function companyProfileStore(Request $request){
        // dd($request->all());
          $request->validate([
          'email'=>'required',
          'password'=>'required',


          ]);

   try{
       User::create([

        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>bcrypt($request->password),
        'company_type'=>$request->company_type,
        'address'=>$request->address,
        'role'=>$request->role,

       ]);
      return redirect()->route('create.company.profile')->with('msg', 'company list updated!');
    }
       catch(Throwable $throw){
        return redirect()->back()->with('error','Problem!');
       }
   }
}

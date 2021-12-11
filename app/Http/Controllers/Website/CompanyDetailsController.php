<?php

namespace App\Http\Controllers\Website;

use Throwable;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompanyDetailsController extends Controller
{
    public function companyProfileShow(){
        $companyProfileShow = Company:: orderBy('id','desc')->paginate(5);
        return view('backend.admin.pages.ShowCompanyProfile',compact('companyProfileShow'));
    }
    public function companyProfileForm(){
        return view('frontend.pages.CreateCompanyProfile');
      }


      public function companyProfileStore(Request $request){
        //dd($request->all());
          $request->validate([
          'email'=>'required',
          'password'=>'required',


          ]);

   try{
       Company::create([

        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>$request->password,
        'type'=>$request->type,
        'address'=>$request->address,

       ]);
      return redirect()->route('create.company.profile')->with('msg', 'company list updated!');
    }
       catch(Throwable $throw){
        return redirect()->back()->with('error','Problem!');
       }
   }
}

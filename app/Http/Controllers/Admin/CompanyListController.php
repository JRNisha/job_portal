<?php

namespace App\Http\Controllers\Admin;

use Throwable;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompanyListController extends Controller
{
    public function companylist(){
        $companylist = Company:: orderBy('id','desc')->paginate(1);
        return view('backend.admin.pages.company-list', compact('companylist'));
    }
    public function aboutcompany(){
        return view('backend.admin.pages.about_company');
    }
    public function companyprofile(Request $request)
    {
        //dd($request->all());
        $request->validate([

            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'type'=>'required',

        ]);
        try{
            Company::create([
                'id'=>$request->id,
                'name'=>$request->name,
                'email'=>$request->email,
                'address'=>$request->address,
                'type'=>$request->type,
            ]);
            return redirect()->route('company.list')->with('msg', 'Company list updated!');
        }
        catch(Throwable $throw){
            return redirect()->back()->with('error','Problem!');
        }
    }
}

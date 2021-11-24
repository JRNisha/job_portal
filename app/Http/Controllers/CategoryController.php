<?php

namespace App\Http\Controllers;

use Throwable;
use App\Models\JobCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(){
        $jobcategories = JobCategory::orderBy('id','desc')->paginate(1);
        return view('backend.admin.pages.job_category', compact('jobcategories'));
       }
       public function categoryList(){
        return view('backend.admin.pages.job_category_list');
       }
       public function categoryShow(Request $request)
    {
        //dd($request->all());
        try{
            JobCategory::create([

                'name'=>$request->name,
                'type'=>$request->type,
            ]);
            return redirect()->route('company.list')->with('msg', 'Job Category list updated!');
        }
        catch(Throwable $throw){
            return redirect()->back()->with('error','Problem!');
        }
    }
}
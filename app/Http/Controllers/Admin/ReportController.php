<?php

namespace App\Http\Controllers\Admin;

use App\Models\PostedJobs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function postedJobReport(){
        $postJobShow = PostedJobs::all();
        return view('backend.admin.pages.PostedJobReport',compact('postJobShow'));
    }


    public function searchreport(Request $request)
    {

        $postJobShow=PostedJobs::whereBetween('created_at',[$request->from,$request->to])->get();

;
        return view('backend.admin.pages.PostedJobReport',compact('postJobShow'));

    }
}

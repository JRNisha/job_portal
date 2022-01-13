<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobApplyController extends Controller
{
    public function jobApply(){
        return view('backend.admin.pages.jobApply');
    }
}

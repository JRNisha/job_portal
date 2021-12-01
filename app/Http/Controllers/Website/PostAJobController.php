<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostAJobController extends Controller
{
    public function postJobForm(){
        return view('frontend.pages.PostAJobForm');
    }
}

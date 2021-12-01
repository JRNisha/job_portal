<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CandidateDetailsController extends Controller
{
    public function candidateProfileForm(){
      return view('frontend.pages.CreateCandidateProfile');
    }
}

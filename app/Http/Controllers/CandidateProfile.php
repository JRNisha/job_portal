<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidateProfile extends Controller
{
  public function create_candidate_profile(){
      return view('backend.admin.fixed.header');
  }
}

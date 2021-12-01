<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployerDetailsController extends Controller
{
    public function employerProfileForm(){
        return view('frontend.pages.CreateEmployerProfile');
      }
}

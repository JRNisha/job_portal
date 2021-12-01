<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyDetailsController extends Controller
{
    public function companyProfileForm()
    {
        return view('frontend.pages.CreateCompanyProfile');
    }
}

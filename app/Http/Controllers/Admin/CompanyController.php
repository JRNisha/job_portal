<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function companyCard(){
        return view('backend.admin.pages.companyListCard');
    }
}


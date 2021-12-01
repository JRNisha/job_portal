<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function employerCard(){
        return view('backend.admin.pages.employerListCard');
    }
   
}


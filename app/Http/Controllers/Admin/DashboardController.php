<?php

namespace App\Http\Controllers\Admin;

use App\Models\Employer;
use App\Models\PostedJobs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;

class DashboardController extends Controller
{
    public function dashboard(){


             $employer=Employer::count();
             $countCandidate =  User::where('role', "Candidate")->count();
            //  $countCompany =  User::where('role', "company")->count();
            //  $countJob = PostedJobs::count();

            // $count['order']=Order::all()->count();
            // $count['payment']=Payment::all()->count();
            // $count['user']=User::all()->count();
            // $count['message']=Homecontact::all()->count();
            // $count['delivery']=Delivery::all()->count();
            // $count['shipping']=ShippingDetail::all()->count();

            return view('backend.admin.pages.home',compact('employer','countCandidate'));
        }

}

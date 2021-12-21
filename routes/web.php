<?php

use App\Http\Controllers\Admin\CandidateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidateProfile;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\JobPostController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EmployerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Website\PostAJobController;
use App\Http\Controllers\Admin\CompanyListController;
use App\Http\Controllers\Website\CompanyDetailsController;
use App\Http\Controllers\Website\EmployerDetailsController;
use App\Http\Controllers\Website\CandidateDetailsController;
use App\Http\Controllers\Website\LoginController;
use App\Http\Controllers\Website\SigninController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//website
Route::get('/',[HomeController::class,'home']);

//posted jobs
Route::get('/post/job/form',[PostAJobController::class,'postJobForm'])->name('post.job');
Route::post('/posted/job/store',[PostAJobController::class,'postJobStore'])->name('post.job.store');
Route::get('/posted/job/show',[PostAJobController::class,'postJobShow'])->name('post.job.show');
//job details showing on website
Route::get('/job/details/{job_id}',[PostAJobController::class,'jobDetailsShow'])->name('job.details.show');
//Browse all jobs
Route::get('/browse/jobs/',[PostAJobController::class,'browseJobs'])->name('browse.jobs');
//Login
Route::get('/login',[LoginController::class,'login'])->name('login.form');
//Signin
Route::get('/signin',[SigninController::class,'signin'])->name('signin.form');
//company
Route::get('/create/company/profile',[CompanyDetailsController::class,'companyProfileForm'])->name('create.company.profile');
Route::post('/create/company/profile/store',[CompanyDetailsController::class,'companyProfileStore'])->name('store.company.profile');
Route::get('/create/company/profile/show',[CompanyDetailsController::class,'companyProfileShow'])->name('show.company.profile');


//candidate
Route::get('/create/candidate/profile',[CandidateDetailsController::class,'candidateProfileForm'])->name('create.candidate.profile');
Route::post('/create/candidate/profile/store',[CandidateDetailsController::class,'candidateProfileStore'])->name('store.candidate.profile');
Route::get('/create/candidate/profile/show',[CandidateDetailsController::class,'candidateProfileShow'])->name('show.candidate.profile');


//employer
Route::get('/create/employer/profile',[EmployerDetailsController::class,'employerProfileForm'])->name('create.employer.profile');
Route::post('/create/employer/profile/store',[EmployerDetailsController::class,'employerProfileStore'])->name('store.employer.profile');

Route::get('/create/employer/profile/show',[EmployerDetailsController::class,'employerProfileShow'])->name('show.employer.profile');


//admin
//  Route::group(['prefix'=>'admin'],function (){
//   Route::get('/', function () {
//       return view('backend.admin.pages.master');
//     })->name('home');



 Route::get('/admin', function () {
       return view('backend.admin.master');
  });
//company
    Route::get('/company_list',[CompanyListController::class,'companylist'])->name('company.list');
    Route::get('/about_company',[CompanyListController::class,'aboutcompany'])->name('about.company');
    Route::post('/company/profile',[CompanyListController::class,'companyprofile'])->name('company.profile');


//job category
    Route::get('/job/category',[CategoryController::class,'category'])->name('job.category');
    Route::get('/job/category/list',[CategoryController::class,'categoryList'])->name('job.category.list');
    Route::post('/job/category/show',[CategoryController::class,'categoryShow'])->name('job.category.show');
//Dashboard
Route::get('/admin',[DashboardController::class,'dashboard'])->name('dashboard');
//cards
Route::get('/company/list/card',[CompanyController::class,'companyCard'])->name('company.card');
Route::get('/employer/list/card',[EmployerController::class,'employerCard'])->name('employer.card');
Route::get('/candidate/list/card',[CandidateController::class,'candidateCard'])->name('candidate.card');
//  })
// ;

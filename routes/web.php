<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidateProfile;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\JobPostController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Website\PostAJobController;
use App\Http\Controllers\Admin\CompanyListController;
use App\Http\Controllers\Website\CompanyDetailsController;
use App\Http\Controllers\Website\EmployerDetailsController;
use App\Http\Controllers\Website\CandidateDetailsController;

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
Route::get('/post/job/form',[PostAJobController::class,'postJobForm'])->name('post.job');
Route::get('/create/company/profile',[CompanyDetailsController::class,'companyProfileForm'])->name('create.company.profile');
Route::get('/create/candidate/profile',[CandidateDetailsController::class,'candidateProfileForm'])->name('create.candidate.profile');
Route::get('/create/employer/profile',[EmployerDetailsController::class,'employerProfileForm'])->name('create.employer.profile');




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




//  })
// ;

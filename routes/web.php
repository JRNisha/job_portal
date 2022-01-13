<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidateProfile;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\JobPostController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\UserController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Website\LoginController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EmployerController;
use App\Http\Controllers\Admin\JobApplyController;
use App\Http\Controllers\Website\SigninController;
use App\Http\Controllers\Admin\CandidateController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Website\PostAJobController;
use App\Http\Controllers\Admin\CompanyListController;
use App\Http\Controllers\Website\AppliedJobsController;
use App\Http\Controllers\Website\CompanyDetailsController;
use App\Http\Controllers\Website\EmployerDetailsController;
use App\Http\Controllers\Website\CandidateDetailsController;
use App\Http\Controllers\Admin\UserController as AdminUserController;

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
Route::get('/',[HomeController::class,'home'])->name('website');

//posted jobs
Route::get('/post/job/form',[PostAJobController::class,'postJobForm'])->name('post.job');
Route::post('/posted/job/store',[PostAJobController::class,'postJobStore'])->name('post.job.store');
Route::get('/posted/job/show',[PostAJobController::class,'postJobShow'])->name('post.job.show');

//Applied Jobs
Route::group(['middleware'=>'web_auth'],function (){
    Route::get('/applied/jobs/{id}',[AppliedJobsController::class,'addToAppliedJobs'])->name('applied.jobs.add');
    Route::get('get/applied/jobs',[AppliedJobsController::class,'getAppliedJobs'])->name('applied.jobs.get');
    Route::get('/clear/job',[AppliedJobsController::class,'clearJob'])->name('cart.job');
    });

//job details showing on website
Route::get('/job/details/{job_id}',[PostAJobController::class,'jobDetailsShow'])->name('job.details.show');
//Browse all jobs
Route::get('/browse/jobs',[PostAJobController::class,'browseJobs'])->name('browse.jobs');
//job categories
Route::get('/job/Categories',[PostAJobController::class,'jobCategories'])->name('job.catergory');
Route::get('/job/Categories/web/development',[PostAJobController::class,'jobCategoriesWebDevelopment'])->name('job.category.WebDevelopment');
Route::get('/job/Categories/private/tutor',[PostAJobController::class,'jobCategoriesPrivateTutor'])->name('job.category.private.tutor');
Route::get('/job/Categories/business/group',[PostAJobController::class,'jobCategoriesBusinessGroup'])->name('job.category.business.group');
Route::get('/job/Categories/bank/jobs',[PostAJobController::class,'jobCategoriesBankJobs'])->name('job.category.bank.jobs');
Route::get('/job/Categories/cleaning/services',[PostAJobController::class,'jobCategoriesCleaningServices'])->name('job.category.cleaning.services');
Route::get('/job/Categories/digital/marketing',[PostAJobController::class,'jobCategoriesDigitalMarketing'])->name('job.category.DigitalMarketing');
Route::get('/job/Categories/it',[PostAJobController::class,'jobCategoriesIt'])->name('job.category.it');
Route::get('/job/Categories/medical',[PostAJobController::class,'jobCategoriesMedical'])->name('job.category.medical');
//job Application
Route::get('/job/application/{id}',[PostAJobController::class,'jobApplication'])->name('job.application');
Route::post('/job/application/store/{id}',[PostAJobController::class,'jobApplicationStore'])->name('store.job.application');
Route::get('/admin/job/apply',[PostAJobController::class,'jobApplicationShow'])->name('job.apply');
Route::get('/admin/job/applicant/details/{id}',[PostAJobController::class,'applicant'])->name('job.applicant');

//Login

//Signin
Route::get('/signin',[UserController::class,'signIn'])->name('signin.form');
Route::post('/signin/store',[UserController::class,'signInStore'])->name('signin.store');
Route::get('/sign/in/users',[UserController::class,'signInList'])->name('signed.users.list');
Route::Post('/login',[UserController::class,'login'])->name('login.form');
Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');


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
Route::patch('/Update/employer/profile{employer_id}',[EmployerDetailsController::class,'updateEmployer'])->name('update.employer.profile');
Route::get('/create/employer/profile/show',[EmployerDetailsController::class,'employerProfileShow'])->name('show.employer.profile');
Route::get('/delete/employer/profile/list/{employer_id}',[EmployerDetailsController::class,'deleteEmployer'])->name('delete.employer.profile');
Route::get('/Edit/employer/profile{employer_id}',[EmployerDetailsController::class,'editEmployer'])->name('edit.employer.profile');



//Login for admin
Route::get('/admin/login',[AdminUserController::class,'login'])->name('admin.login');
Route::post('/admin/do-login',[AdminUserController::class,'doLogin'])->name('admin.doLogin');
//admin
Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function (){
 Route::get('/', function () {
       return view('backend.admin.pages.home');
  })->name('home');

//admin logout
Route::get('/logout',[AdminUserController::class,'logout'])->name('admin.logout');

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
//job apply



 }) ;

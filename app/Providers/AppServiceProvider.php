<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Employer;
use Illuminate\View\View;
use App\Models\PostedJobs;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();


        // $countJob = PostedJobs::count();
        // View::share('countJob', $countJob);

    }



}

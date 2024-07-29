<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use App\Models\Job;
Use App\Models\User;
use Illuminate\Support\Facades\Gate;

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
        Model::preventlazyLoading();

       // Paginator::useBootstrapFive();
       /*
       Gate::define('edit-job',function(User $user, Job $job){
        return $job->employer->user->is($user);
            
    });
    */
    }


}

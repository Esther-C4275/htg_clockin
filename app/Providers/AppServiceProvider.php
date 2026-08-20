<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }

        Gate::define('admin-only', function (User $user) {
            
            
            return (int) $user->is_admin === 1;  //for handling authorization, to check if a particular user is allowed to do something
            
        });

        Paginator::useBootstrapFive();
    }
}

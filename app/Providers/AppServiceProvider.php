<?php

namespace App\Providers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\ServiceProvider;

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
        // Ensure all emails go to developer email if not production environment

        if ($this->app->environment() !== 'production') {
            Mail::alwaysTo(env('DEVELOPER_EMAIL', 'webmaster@bisontransport.com'));
        }
    }
}

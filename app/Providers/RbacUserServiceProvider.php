<?php

namespace App\Providers;

use App\Services\SimpleHasher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class RbacUserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Auth::provider('rbac_provider_driver', function ($app, array $config) {
            return new RbacUserProvider(new SimpleHasher, $config['model']);
        });
    }
}

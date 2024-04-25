<?php

namespace App\Providers;

use App\Services\RiotService;
use Illuminate\Support\ServiceProvider;

class RiotServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(RiotService::class, function ($app) {
            return new RiotService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

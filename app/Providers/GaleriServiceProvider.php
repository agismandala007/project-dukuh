<?php

namespace App\Providers;

use App\Service\GaleriService;
use App\Service\ServiceImpl\GaleriServiceImpl;
use Illuminate\Support\ServiceProvider;

class GaleriServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(GaleriService::class, GaleriServiceImpl::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

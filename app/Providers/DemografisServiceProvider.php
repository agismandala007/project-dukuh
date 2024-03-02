<?php

namespace App\Providers;

use App\Service\DemografisService;
use App\Service\ServiceImpl\DemografisServiceImpl;
use Illuminate\Support\ServiceProvider;

class DemografisServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(DemografisService::class, DemografisServiceImpl::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

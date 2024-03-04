<?php

namespace App\Providers;

use App\Service\BeritaService;
use Illuminate\Support\ServiceProvider;
use App\Service\ServiceImpl\BeritaServiceImpl;

class BeritaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(BeritaService::class, BeritaServiceImpl::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

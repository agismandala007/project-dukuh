<?php

namespace App\Providers;

use App\Service\AnggotaService;
use App\Service\ServiceImpl\AnggotaServiceImpl;
use Illuminate\Support\ServiceProvider;

class AnggotaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(AnggotaService::class, AnggotaServiceImpl::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

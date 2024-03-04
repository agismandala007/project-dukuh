<?php

namespace App\Providers;

use App\Service\AgendaService;
use App\Service\ServiceImpl\AgendaServiceImpl;
use Illuminate\Support\ServiceProvider;

class AgendaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(AgendaService::class, AgendaServiceImpl::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

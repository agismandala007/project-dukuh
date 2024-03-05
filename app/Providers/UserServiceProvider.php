<?php

namespace App\Providers;

use App\Service\UserService;
use Illuminate\Support\ServiceProvider;
use App\Service\ServiceImpl\UserServiceImpl;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(UserService::class, UserServiceImpl::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

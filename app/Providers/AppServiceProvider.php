<?php

namespace App\Providers;

use App\Services\CodigoCSVService;
use App\Services\CodigoCSVServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            CodigoCSVServiceInterface::class,
            CodigoCSVService::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

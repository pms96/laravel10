<?php

namespace App\Providers;

use App\Http\Controllers\UsuarioController;
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
        $this->app->bind(CodigoCSVServiceInterface::class, CodigoCSVService::class);

        $this->app->singleton(UsuarioController::class, function ($app) {
            $codigoCSVService = new CodigoCSVService();
            return new UsuarioController($codigoCSVService);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

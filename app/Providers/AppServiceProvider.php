<?php

namespace App\Providers;

use App\Services\CityService;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->singleton(CityService::class, function ($app) {
            return new CityService();
        });
    }


    /**
     * Bootstrap any application services.
     */
    public function boot()
{
    Blade::if('admin', function () {
        return auth()->check() && auth()->user()->is_admin;
    });

    Blade::if('user', function () {
        return auth()->check() && auth()->user()->role === 'user';
    });
    


    Paginator::defaultView('vendor.pagination.custom');


}
}

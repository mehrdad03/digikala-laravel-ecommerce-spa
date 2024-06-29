<?php

namespace App\Providers;

use App\Repositories\admin\AdminCategoryRepository;
use App\Repositories\admin\AdminCategoryRepositoryInterface;
use App\Repositories\admin\AdminCityRepository;
use App\Repositories\admin\AdminCityRepositoryInterface;
use App\Repositories\admin\AdminCountryRepository;
use App\Repositories\admin\AdminCountryRepositoryInterface;
use App\Repositories\admin\AdminProductRepository;
use App\Repositories\admin\AdminProductRepositoryInterface;
use App\Repositories\admin\AdminStateRepository;
use App\Repositories\admin\AdminStateRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(AdminProductRepositoryInterface::class,AdminProductRepository::class);
        $this->app->singleton(AdminCategoryRepositoryInterface::class,AdminCategoryRepository::class);
        $this->app->singleton(AdminCityRepositoryInterface::class,AdminCityRepository::class);
        $this->app->singleton(AdminCountryRepositoryInterface::class,AdminCountryRepository::class);
        $this->app->singleton(AdminStateRepositoryInterface::class,AdminStateRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

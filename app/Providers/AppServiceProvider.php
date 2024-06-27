<?php

namespace App\Providers;

use App\Repositories\admin\AdminCategoryRepository;
use App\Repositories\admin\AdminCategoryRepositoryInterface;
use App\Repositories\admin\AdminProductRepository;
use App\Repositories\admin\AdminProductRepositoryInterface;
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
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

<?php

namespace App\Providers;

use App\Repositories\admin\AdminCategoryRepository;
use App\Repositories\admin\AdminCategoryRepositoryInterface;
use App\Repositories\admin\AdminCityRepository;
use App\Repositories\admin\AdminCityRepositoryInterface;
use App\Repositories\admin\AdminCountryRepository;
use App\Repositories\admin\AdminCountryRepositoryInterface;
use App\Repositories\admin\AdminDeliveryRepository;
use App\Repositories\admin\AdminDeliveryRepositoryInterface;
use App\Repositories\admin\AdminOrderRepository;
use App\Repositories\admin\AdminOrderRepositoryInterface;
use App\Repositories\admin\AdminPaymentRepository;
use App\Repositories\admin\AdminPaymentRepositoryInterface;
use App\Repositories\admin\AdminProductRepository;
use App\Repositories\admin\AdminProductRepositoryInterface;
use App\Repositories\admin\AdminStateRepository;
use App\Repositories\admin\AdminStateRepositoryInterface;
use App\Repositories\admin\AdminTransactionRepository;
use App\Repositories\admin\AdminTransactionRepositoryInterface;
use App\Repositories\client\cart\ClientCartRepository;
use App\Repositories\client\cart\ClientCartRepositoryInterface;
use App\Repositories\client\ClientAuthRepository;
use App\Repositories\client\ClientAuthRepositoryInterface;
use App\Repositories\client\first_page\ClientFirstPageRepository;
use App\Repositories\client\first_page\ClientFirstPageRepositoryInterface;
use App\Repositories\client\product\ClientProductRepository;
use App\Repositories\client\product\ClientProductRepositoryInterface;
use App\Repositories\client\Shipping\ClientShippingRepository;
use App\Repositories\client\Shipping\ClientShippingRepositoryInterface;
use Carbon\Carbon;
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
        $this->app->singleton(AdminDeliveryRepositoryInterface::class,AdminDeliveryRepository::class);
        $this->app->singleton(AdminPaymentRepositoryInterface::class,AdminPaymentRepository::class);
        $this->app->singleton(AdminPaymentRepositoryInterface::class,AdminStateRepository::class);
        $this->app->singleton(AdminOrderRepositoryInterface::class,AdminOrderRepository::class);
        $this->app->singleton(AdminTransactionRepositoryInterface::class,AdminTransactionRepository::class);

        $this->app->singleton(ClientAuthRepositoryInterface::class, ClientAuthRepository::class);
        $this->app->singleton(ClientFirstPageRepositoryInterface::class, ClientFirstPageRepository::class);
        $this->app->singleton(ClientProductRepositoryInterface::class, ClientProductRepository::class);
        $this->app->singleton(ClientCartRepositoryInterface::class, ClientCartRepository::class);
        $this->app->singleton(ClientShippingRepositoryInterface::class, ClientShippingRepository::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Carbon::setLocale('fa');
    }
}

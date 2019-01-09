<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \App\Repositories\User\UserRepositoryInterface::class,
            \App\Repositories\User\UserEloquentRepository::class
        );

        $this->app->bind(
            \App\Repositories\Category\CategoryRepositoryInterface::class,
            \App\Repositories\Category\CategoryEloquentRepository::class
        );

        $this->app->bind(
            \App\Repositories\Product\ProductRepositoryInterface::class,
            \App\Repositories\Product\ProductEloquentRepository::class
        );

        $this->app->bind(
            \App\Repositories\Invoice\InvoiceRepositoryInterface::class,
            \App\Repositories\Invoice\InvoiceEloquentRepository::class
        );

        $this->app->bind(
            \App\Repositories\Paymethod\PaymethodRepositoryInterface::class,
            \App\Repositories\Paymethod\PaymethodEloquentRepository::class
        );

        $this->app->bind(
            \App\Repositories\NewRepository\NewRepositoryInterface::class,
            \App\Repositories\NewRepository\NewEloquentRepository::class
        );

        $this->app->bind(
            \App\Repositories\Role\RoleRepositoryInterface::class,
            \App\Repositories\Role\RoleEloquentRepository::class
        );
    }
}

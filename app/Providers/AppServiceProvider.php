<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Category;
use App\NewModel;

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
        view::composer(['frontend.layout.index', 'frontend.product-detail'], function ($view) {
            $categories = Category::all();
            $news = NewModel::where('hot_new', 1)->orderBy('id', 'desc')->take(6)->get();
            $listNew = NewModel::where('hot_new', 1)->orderBy('id', 'desc')->paginate(4);
            $cart = session()->has('cart') == true ? session('cart') : [];
            $view->with('cart', $cart);
            $view->with('categories', $categories);
            $view->with('news', $news);
            $view->with('listNew', $listNew);
        });
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

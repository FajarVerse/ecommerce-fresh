<?php

namespace App\Providers;

use App\Models\Chart;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();

        View::composer('*', function ($view) {
            $view->with('user', Auth::user());
        });

        View::composer('*', function ($view) {
            $view->with('cartItems', Chart::where('user_id', Auth::id())->get());
        });
    }
}

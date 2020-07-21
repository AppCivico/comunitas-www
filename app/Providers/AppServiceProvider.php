<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use App\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // view()->share('youVarName', [1, 2, 3]);
        view()->share(['search_categories', Category::all()]);
    }
}

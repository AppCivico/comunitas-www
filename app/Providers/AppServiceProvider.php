<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Content;
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
        view()->share('types', Content::select('type')->distinct()->get());
    }
}

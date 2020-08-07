<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Observers\GenericObserver;
use App\Webinar;
use App\Content;
use App\Event;
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
        // Webinar::observe(GenericObserver::class);

        view()->share('types', Content::select('type')->distinct()->get());

        \Event::listen(\TCG\Voyager\Events\BreadDataChanged::class, function($event){
            $indexableContents = array(
                'trails',
                'podcasts',
                'webinars',
                'guidelines',
                'interviews',
                'articles',
                'news'
            );

            if(in_array($event->dataType->name, $indexableContents)){
                Content::all()->searchable();
            }
        });
    }
}

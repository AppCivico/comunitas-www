<?php

namespace App\Providers;

use TCG\Voyager\Facades\Voyager;
use Illuminate\Events\Dispatcher;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

use Illuminate\Support\ServiceProvider;
use App\Observers\GenericObserver;
use App\Translation;
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
        Voyager::useModel('Translation', \App\Translation::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Content::observe(GenericObserver::class);

        // view()->share('types', Content::select('type')->distinct()->get());
        view()->share('types', ['lolo', 'lele', 'lili']);

        /**
         * Paginate a standard Laravel Collection.
         *
         * @param int $perPage
         * @param int $total
         * @param int $page
         * @param string $pageName
         * @return array
         */
        Collection::macro('paginate', function($perPage, $total = null, $page = null, $pageName = 'page') {
            $page = $page ?: LengthAwarePaginator::resolveCurrentPage($pageName);
            return new LengthAwarePaginator(
                $this->forPage($page, $perPage),
                $total ?: $this->count(),
                $perPage,
                $page,
                [
                    'path' => LengthAwarePaginator::resolveCurrentPath(),
                    'pageName' => $pageName,
                ]
            );
        });

        // \Event::listen(\TCG\Voyager\Events\BreadDataChanged::class, function($event){
        //     $indexableContents = array(
        //         'trails',
        //         'podcasts',
        //         'webinars',
        //         'guidelines',
        //         'interviews',
        //         'articles',
        //         'news'
        //     );
        //
        //     if(in_array($event->dataType->name, $indexableContents)){
        //         Content::all()->searchable();
        //     }
        // });
    }
}

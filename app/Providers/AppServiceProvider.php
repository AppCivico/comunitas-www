<?php

namespace App\Providers;

use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Event;

use App\Trail;
use App\Webinar;
use App\Podcast;
use App\Guideline;
use App\Interview;
use App\Article;
use App\News;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // view()->share('types', Content::select('type')->distinct()->get());
        $indexableContents = array(
            'trail',
            'podcast',
            'webinar',
            'guideline',
            'interview',
            'article',
            'new'
        );

        view()->share('types', $indexableContents);



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

        Event::listen(\TCG\Voyager\Events\BreadDataChanged::class, function($event){
            if($event->dataType->name === 'trails'){
                Trail::published()->searchable();
            }

            if($event->dataType->name === 'podcasts'){
                Podcast::published()->searchable();
            }

            if($event->dataType->name === 'webinars'){
                Webinar::published()->searchable();
            }

            if($event->dataType->name === 'guidelines'){
                Guideline::published()->searchable();
            }

            if($event->dataType->name === 'interviews'){
                Interview::published()->searchable();
            }

            if($event->dataType->name === 'articles'){
                Article::published()->searchable();
            }

            if($event->dataType->name === 'news'){
                News::published()->searchable();
            }
        });
    }
}

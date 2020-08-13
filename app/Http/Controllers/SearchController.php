<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Content;

use App\Trail;
use App\Webinar;
use App\Podcast;
use App\Guideline;
use App\Interview;
use App\Article;
use App\News;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $limit = 10;

        $page_info  = null;
        $page_name  = 'Busca';

        $searchTerm = $request->q;
        $contents = collect();

        if($request->type) {
            $type = $request->type;
        }

        if(isset($type)) {
            $trails = Trail::search($request->q)->where('type', $type)->where('status', 'published')->get();
            $webinars = Webinar::search($request->q)->where('type', $type)->where('status', 'published')->get();
            $podcasts = Podcast::search($request->q)->where('type', $type)->where('status', 'published')->get();
            $guidelines = Guideline::search($request->q)->where('type', $type)->where('status', 'published')->get();
            $interviews = Interview::search($request->q)->where('type', $type)->where('status', 'published')->get();
            $articles = Article::search($request->q)->where('type', $type)->where('status', 'published')->get();
            $news = News::search($request->q)->where('type', $type)->where('status', 'published')->get();
        } else {
            $trails = Trail::search($request->q)->where('status', 'published')->get();
            $webinars = Webinar::search($request->q)->where('status', 'published')->get();
            $podcasts = Podcast::search($request->q)->where('status', 'PUBLISHED')->get();
            $guidelines = Guideline::search($request->q)->where('status', 'PUBLISHED')->get();
            $interviews = Interview::search($request->q)->where('status', 'PUBLISHED')->get();
            $articles = Article::search($request->q)->where('status', 'PUBLISHED')->get();
            $news = News::search($request->q)->where('status', 'PUBLISHED')->get();

        }


        $contents = $contents->merge($trails);
        $contents = $contents->merge($webinars);
        $contents = $contents->merge($podcasts);
        $contents = $contents->merge($guidelines);
        $contents = $contents->merge($interviews);
        $contents = $contents->merge($articles);
        $contents = $contents->merge($news);
        $contents = $contents->paginate(Config('app.search_pagination_limit'));


        return view('search.index', compact('contents', 'page_info', 'page_name'));
    }
}

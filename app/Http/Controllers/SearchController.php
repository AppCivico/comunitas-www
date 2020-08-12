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

        $trails = Trail::search($request->q)->get();
        $webinars = Webinar::search($request->q)->get();
        $podcasts = Podcast::search($request->q)->get();
        $guidelines = Guideline::search($request->q)->get();
        $interviews = Interview::search($request->q)->get();
        $articles = Article::search($request->q)->get();
        $news = News::search($request->q)->get();

        $contents = $contents->merge($trails);
        $contents = $contents->merge($webinars);
        $contents = $contents->merge($podcasts);
        $contents = $contents->merge($guidelines);
        $contents = $contents->merge($interviews);
        $contents = $contents->merge($articles);
        $contents = $contents->merge($news);
        $contents = $contents->paginate(1);


        return view('search.index', compact('contents', 'page_info', 'page_name'));
    }
}

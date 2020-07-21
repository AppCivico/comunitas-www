<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Webinar;
use App\Podcast;
use App\Guideline;
use App\Interview;
use App\Article;
use App\News;
use App\Trail;
use App\Category;

class customContent {
    public function __construct()
    {
        $this->name = null;
        $this->data = null;
    }

};

class SearchController extends Controller
{
    public function index(Request $request)
    {
        // $contents->trails->data = Trail::search($request->q)->paginate($limit);

        $limit = 1;

        $contents = app()->make('stdClass');

        $contents->trails = new CustomContent;
        $contents->trails->name = 'Trilhas';
        $contents->trails->data = Trail::search($request->q)->paginate($limit);

        $contents->webinars = new CustomContent;
        $contents->webinars->name = 'Webinários';
        $contents->webinars->data = Webinar::search($request->q)->paginate($limit);

        $contents->podcasts = new CustomContent;
        $contents->podcasts->name = 'Podcasts';
        $contents->podcasts->data = Podcast::search($request->q)->paginate($limit);

        $contents->guidelines = new CustomContent;
        $contents->guidelines->name = 'Boas Práticas';
        $contents->guidelines->data = Guideline::search($request->q)->paginate($limit);

        $contents->interviews = new CustomContent;
        $contents->interviews->name = 'Entrevistas';
        $contents->interviews->data = Interview::search($request->q)->paginate($limit);

        $contents->articles = new CustomContent;
        $contents->articles->name = 'Biblioteca';
        $contents->articles->data = Article::search($request->q)->paginate($limit);

        $contents->news = new CustomContent;
        $contents->news->name = 'Notícias';
        $contents->news->data = News::search($request->q)->paginate($limit);

        // dd($contents);
        // foreach($contents as $contentGroup) {
        //     dd($contentGroup->name);
        //     foreach($contentGroup->data as $content) {
        //         dd($content->name);
        //     }
        // }

        $page_info  = null;
        $page_name  = 'Busca';

        return view('search.index', compact('contents', 'page_info', 'page_name'));
    }

}

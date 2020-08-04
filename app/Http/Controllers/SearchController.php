<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Content;

class CustomContent {
    public $name;
    public $data;

    public function __construct($name = null, $data = null)
    {
        $this->name = $name;
        $this->data = $data;
    }

};

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $limit = 1;

        $page_info  = null;
        $page_name  = 'Busca';

        $content = new Content;

        if($request->type) {
            $contents = Content::search($request->q)->where('type', $request->type)->paginate($limit);
        } else {
            $contents = Content::search($request->q)->paginate($limit);
        }

        return view('search.index', compact('contents', 'page_info', 'page_name'));
        // $contents->trails->data = Trail::search($request->q)->paginate($limit);


        // $contents = app()->make('stdClass');

        // $trails = new CustomContent('Trilhas', Trail::search($request->q)->paginate($limit));
        // $webinars = new CustomContent('Webinários', Webinar::search($request->q)->paginate($limit));
        // $podcasts = new CustomContent('Podcasts', Podcast::search($request->q)->paginate($limit));
        // $guidelines = new CustomContent('Boas Práticas', Guideline::search($request->q)->paginate($limit));
        // $interviews = new CustomContent('Entrevistas', Interview::search($request->q)->paginate($limit));
        // $articles = new CustomContent('Biblioteca', Article::search($request->q)->paginate($limit));
        // $news = new CustomContent('Notícias', News::search($request->q)->paginate($limit));

        // $contents = (object) [
        //     'trails' => $trails,
        //     'webinars' => $webinars,
        //     'podcasts' => $podcasts,
        //     'guidelines' => $guidelines,
        //     'interviews' => $interviews,
        //     'articles' => $articles,
        //     'news' => $news,
        // ];

    }

}

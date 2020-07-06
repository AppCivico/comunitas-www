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

class HomeController extends Controller
{
    public function index()
    {
        $trails = Trail::orderBy('order')->take(6)->get();
        $contents = [
            Webinar::first(),
            Podcast::first(),
            Guideline::first(),
            Interview::first(),
            Article::first(),
            News::first(),
            Trail::first(),
        ];

        return view('welcome', compact('trails', 'contents'));
    }
}

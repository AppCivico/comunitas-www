<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Webinar;
use App\WebinarContent;

use App\Podcast;
use App\PodcastContent;

use App\Guideline;
use App\GuidelineContent;

use App\Interview;
use App\InterviewContent;

use App\Article;
use App\ArticleContent;

use App\News;
use App\NewContent;

use App\Category;


class ContentController extends Controller
{
    public function webinars()
    {
        $contents    = Webinar::all();
        $page_info   = WebinarContent::first();
        $categories = Category::has('webinars')->get();
        $page_name = 'Webinários';

        return view('contents.index', compact('contents', 'page_info', 'categories', 'page_name'));
    }

    public function showWebinar(Webinar $webinar)
    {
        $related_contents = $webinar->relatedWebinarsByTag();

        return view('contents.show')
            ->with('content', $webinar)
            ->with('related_contents', $related_contents);
    }

    public function podcasts()
    {
        $contents   = Podcast::all();
        $page_info  = PodcastContent::first();
        $categories = Category::has('podcasts')->get();
        $page_name = 'Podcasts';

        return view('contents.index', compact('contents', 'page_info', 'categories', 'page_name'));
    }

    public function showPodcast(Podcast $podcast)
    {
        $related_contents = $podcast->relatedByTag();

        return view('contents.show')
            ->with('content', $podcast)
            ->with('related_contents', $related_contents);
    }

    public function guidelines()
    {
        $contents   = Guideline::all();
        $page_info  = GuidelineContent::first();
        $categories = Category::has('guidelines')->get();
        $page_name = 'Boas Práticas';

        return view('contents.index', compact('contents', 'page_info', 'categories', 'page_name'));
    }

    public function showGuideline(Guideline $guideline)
    {
        $related_contents = $guideline->relatedByTag();

        return view('contents.show')
            ->with('content', $guideline)
            ->with('related_contents', $related_contents);
    }

    public function interviews()
    {
        $contents   = Interview::all();
        $page_info  = InterviewContent::first();
        $categories = Category::has('interviews')->get();
        $page_name = 'Entrevistas';

        return view('contents.index', compact('contents', 'page_info', 'categories', 'page_name'));
    }

    public function showInterview(Interview $interview)
    {
        $related_contents = $interview->relatedByTag();

        return view('contents.show')
            ->with('content', $interview)
            ->with('related_contents', $related_contents);
    }

    public function articles()
    {
        $contents   = Article::all();
        $page_info  = ArticleContent::first();
        $categories = Category::has('articles')->get();
        $page_name = 'Biblioteca';

        return view('contents.index', compact('contents', 'page_info', 'categories', 'page_name'));
    }

    public function news()
    {
        $contents   = News::all();
        $page_info  = NewContent::first();
        $categories = Category::has('news')->get();
        $page_name = 'Notícias';

        return view('contents.index', compact('contents', 'page_info', 'categories', 'page_name'));
    }

}

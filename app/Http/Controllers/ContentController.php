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
    public function webinars(Category $category = null)
    {
        if($category) {
            $contents = Category::findOrFail($category->id)->webinars()->simplePaginate(Config('app.pagination_limit'));
        } else {
            $contents = Webinar::orderBy('order')->simplePaginate(Config('app.pagination_limit'));
        }
        $page_info  = WebinarContent::first();
        $categories = Category::has('webinars')->get();
        $page_name  = 'Webinários';

        return view('contents.index', compact('contents', 'page_info', 'categories', 'page_name'));
    }

    public function showWebinar(Webinar $webinar)
    {
        $related_contents = $webinar->relatedWebinarsByTag();

        return view('contents.show')
            ->with('content', $webinar)
            ->with('related_contents', $related_contents);
    }

    public function podcasts(Category $category = null)
    {
        if($category) {
            $contents = Category::findOrFail($category->id)->podcasts()->simplePaginate(Config('app.pagination_limit'));
        } else {
            $contents = Podcast::orderBy('order')->simplePaginate(Config('app.pagination_limit'));
        }
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

    public function guidelines(Category $category = null)
    {
        if($category) {
            $contents = Category::findOrFail($category->id)->guidelines()->simplePaginate(Config('app.pagination_limit'));
        } else {
            $contents = Guideline::orderBy('order')->simplePaginate(Config('app.pagination_limit'));
        }
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

    public function interviews(Category $category = null)
    {
        if($category) {
            $contents = Category::findOrFail($category->id)->interviews()->simplePaginate(Config('app.pagination_limit'));
        } else {
            $contents   = Interview::orderBy('order')->simplePaginate(Config('app.pagination_limit'));
        }
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

    public function articles(Category $category = null)
    {
        if($category) {
            $contents = Category::findOrFail($category->id)->articles()->simplePaginate(Config('app.pagination_limit'));
        } else {
            $contents = Article::orderBy('order')->simplePaginate(Config('app.pagination_limit'));
        }
        $page_info  = ArticleContent::first();
        $categories = Category::has('articles')->get();
        $page_name  = 'Biblioteca';
        $has_obs    = true;

        return view('contents.index', compact('contents', 'page_info', 'categories', 'page_name', 'has_obs'));
    }

    public function news(Category $category = null)
    {
        if($category) {
            $contents = Category::findOrFail($category->id)->news()->simplePaginate(Config('app.pagination_limit'));
        } else {
            $contents = News::orderBy('order')->simplePaginate(Config('app.pagination_limit'));
        }
        $page_info  = NewContent::first();
        $categories = Category::has('news')->get();
        $page_name = 'Notícias';

        return view('contents.index', compact('contents', 'page_info', 'categories', 'page_name'));
    }

}

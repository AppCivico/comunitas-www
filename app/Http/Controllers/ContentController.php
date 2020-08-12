<?php

namespace App\Http\Controllers;

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

use App\Trail;
use App\TrailContent;

use App\Category;


class ContentController extends Controller
{
    public function category(Category $category)
    {
        $page_name  = $category->name;
        $contents = collect();
        $page_info = collect();
        $page_info->image = $category->image;

        $trails     = Category::find($category->id)->trails()->get();
        $webinars   = Category::find($category->id)->webinars()->get();
        $podcasts   = Category::find($category->id)->podcasts()->get();
        $guidelines = Category::find($category->id)->guidelines()->get();
        $interviews = Category::find($category->id)->interviews()->get();
        $articles   = Category::find($category->id)->articles()->get();
        $news       = Category::find($category->id)->news()->get();

        $contents = $contents->merge($trails);
        $contents = $contents->merge($webinars);
        $contents = $contents->merge($podcasts);
        $contents = $contents->merge($guidelines);
        $contents = $contents->merge($interviews);
        $contents = $contents->merge($articles);
        $contents = $contents->merge($news);
        $contents = $contents->paginate(Config('app.pagination_limit'));

        return view('contents.index', compact('contents', 'page_name', 'category', 'page_info'));
    }

    public function webinars(Category $category = null)
    {
        if($category) {
            $contents = Category::findOrFail($category->id)->webinars()->simplePaginate(Config('app.pagination_limit'));
        } else {
            $contents = Webinar::published()->orderBy('order')->simplePaginate(Config('app.pagination_limit'));
        }
        $page_info  = WebinarContent::first();
        $categories = $contents->pluck('categories')->unique('id')->flatten();
        $page_name  = 'Webinários';

        return view('contents.index', compact('contents', 'page_info', 'categories', 'page_name', 'category'));
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
        $categories = $contents->pluck('categories')->unique('id')->flatten();
        $page_name = 'Podcasts';

        return view('contents.index', compact('contents', 'page_info', 'categories', 'page_name', 'category'));
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
        $categories = $contents->pluck('categories')->unique('id')->flatten();
        $page_name = 'Boas Práticas';

        return view('contents.index', compact('contents', 'page_info', 'categories', 'page_name', 'category'));
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
        $categories = $contents->pluck('categories')->unique('id')->flatten();
        $page_name = 'Entrevistas';

        return view('contents.index', compact('contents', 'page_info', 'categories', 'page_name', 'category'));
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
        $categories = $contents->pluck('categories')->unique('id')->flatten();
        $page_name  = 'Biblioteca';
        $has_obs    = true;

        return view('contents.index', compact('contents', 'page_info', 'categories', 'page_name', 'has_obs', 'category'));
    }

    public function news(Category $category = null)
    {
        if($category) {
            $contents = Category::findOrFail($category->id)->news()->simplePaginate(Config('app.pagination_limit'));
        } else {
            $contents = News::orderBy('order')->simplePaginate(Config('app.pagination_limit'));
        }
        $page_info  = NewContent::first();
        $categories = $contents->pluck('categories')->unique('id')->flatten();
        $page_name = 'Notícias';

        return view('contents.index', compact('contents', 'page_info', 'categories', 'page_name', 'category'));
    }

    public function trails(Category $category = null)
    {
        if($category) {
            $contents = Category::findOrFail($category->id)->trails()->simplePaginate(Config('app.pagination_limit'));
        } else {
            $contents   = Trail::orderBy('order')->simplePaginate(Config('app.pagination_limit'));
        }
        $page_info  = TrailContent::first();
        $categories = $contents->pluck('categories')->unique('id')->flatten();
        $page_name = 'Trilhas';
        $type = 'trails';

        return view('contents.index', compact('contents', 'page_info', 'categories', 'page_name', 'category', 'type'));
    }

    public function showTrail(Trail $trail)
    {
        $related_contents = $trail->relatedByTag();

        return view('contents.show')
            ->with('content', $trail)
            ->with('related_contents', $related_contents);
    }
}

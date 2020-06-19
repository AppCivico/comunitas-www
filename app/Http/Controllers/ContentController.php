<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Webinar;
use App\WebinarContent;

use App\Podcast;
use App\PodcastContent;

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
}

<?php

namespace App\Http\Controllers;

use App\Home;
use App\Webinar;
use App\Podcast;
use App\Guideline;
use App\Interview;
// use App\Article;
// use App\News;
use App\Trail;
use App\Banner;
use App\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $trails = Trail::orderBy('order')->take(4)->get();
        $contents = [
            Webinar::first(),
            Podcast::first(),
            Guideline::first(),
            Interview::first(),
            // Article::first(),
            // News::first(),
        ];

        $home = Home::first();
        $banner = Banner::first();
        $testimonials = Testimonial::orderBy('order')->get();

        return view('welcome', compact('trails', 'contents', 'banner', 'testimonials', 'home'));
    }
}

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
use App\Banner;
use App\Testimonial;
use App;

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
        $banner = Banner::first();

        $testimonials = Testimonial::orderBy('order')->get();
        // $testimonials = $testimonials->translate('en');

        return view('welcome', compact('trails', 'contents', 'banner', 'testimonials'));
    }
}

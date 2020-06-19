<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Webinar;
use App\WebinarContent;
use App\Category;

class WebinarController extends Controller
{
    public function index()
    {
        $contents    = Webinar::all();
        $page_info   = WebinarContent::first();
        $content_url = 'webinarios';
        $categories = Category::with('webinars')->get();

        return view('contents.index', compact('contents', 'page_info', 'content_url', 'categories'));
    }

    public function show(Webinar $webinar)
    {
        $related_contents = $webinar->relatedWebinarsByTag();

        return view('contents.show')
            ->with('content', $webinar)
            ->with('related_contents', $related_contents);
    }
}

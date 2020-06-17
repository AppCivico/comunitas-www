<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Webinar;
use App\WebinarContent;

class WebinarController extends Controller
{
    public function index()
    {
        // ->simplePaginate(1);
        $contents    = Webinar::all();
        $page_info   = WebinarContent::first();
        $content_url = 'webinarios';
        // return dd($page_info);

        // return $page_info;
        // return view('content', ['contents' => $contents]);

        return view('contents.index', compact('contents', 'page_info', 'content_url'));
    }

    public function show($slug) {
        $content = Webinar::where('slug', $slug)->firstOrFail();
        return view('contents.show')->with('content', $content);
    }
}

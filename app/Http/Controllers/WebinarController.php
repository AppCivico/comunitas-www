<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use App\Webinar;

class WebinarController extends Controller
{
    public function index()
    {
        $contents  = Content::webinar()->get();
        $page_info = Webinar::firstOrFail();
        // return $page_info;

        // return view('content', ['contents' => $contents]);

        return view('content', compact('contents', 'page_info'));
    }
}

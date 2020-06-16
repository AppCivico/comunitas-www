<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use App\Webinar;

class WebinarController extends Controller
{
    public function index()
    {
        // ->simplePaginate(1);
        $contents  = Content::webinar()->get();
        $page_info = Webinar::first();

        // return $page_info;
        // return view('content', ['contents' => $contents]);

        return view('content', compact('contents', 'page_info'));
    }
}

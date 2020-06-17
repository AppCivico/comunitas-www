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
        $contents  = Webinar::all();
        $page_info = WebinarContent::first();
        // return dd($page_info);

        // return $page_info;
        // return view('content', ['contents' => $contents]);

        return view('content', compact('contents', 'page_info'));
    }
}

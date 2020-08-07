<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Content;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $content = Content::first();
        $limit = 10;

        $page_info  = null;
        $page_name  = 'Busca';

        $content = new Content;

        if($request->type) {
            $contents = Content::search($request->q)->where('type', $request->type)->paginate($limit);
        } else {
            $contents = Content::search($request->q)->paginate($limit);
        }

        return view('search.index', compact('contents', 'page_info', 'page_name'));
    }

}

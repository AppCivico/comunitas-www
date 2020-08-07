<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Initiative;
use App\Support;
use App\Collaborator;

class AboutController extends Controller
{
    function index() {
        $content = About::first();
        $initiatives = Initiative::all();
        $supports = Support::all();
        $collaborators = Collaborator::all();

        return view('about.index', compact('content', 'initiatives', 'supports', 'collaborators'));
    }
}

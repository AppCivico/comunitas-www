<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class LanguageController extends Controller
{
    public function pt(Request $request)
    {
        session(['language' => 'pt']);
        return back();
    }

    public function es(Request $request)
    {
        session(['language' => 'es']);
        return back();
    }

    public function en(Request $request)
    {
        session(['language' => 'en']);
        return back();
    }

}

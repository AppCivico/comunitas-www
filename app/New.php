<?php

namespace App;
use App\Content;

class News extends Content
{
    public function relatedWebinarsByTag()
    {
        return News::whereHas('categories', function ($query) {
            $categoryIds = $this->categories()->pluck('categories.id')->all();
            $query->whereIn('categories.id', $categoryIds);
        })->where('id', '<>', $this->id)->get();
    }
}

<?php

namespace App;
use App\Content;

class Article extends Content
{

    protected $translatable = [
        'title',
        'seo_title',
        'image_alt',
    ];

    public function relatedWebinarsByTag()
    {
        return Article::whereHas('categories', function ($query) {
            $categoryIds = $this->categories()->pluck('categories.id')->all();
            $query->whereIn('categories.id', $categoryIds);
        })->where('id', '<>', $this->id)->get();
    }
}

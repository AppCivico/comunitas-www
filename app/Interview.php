<?php

namespace App;
use App\Content;

class Interview extends Content
{
    public function relatedWebinarsByTag()
    {
        return Interview::whereHas('categories', function ($query) {
            $categoryIds = $this->categories()->pluck('categories.id')->all();
            $query->whereIn('categories.id', $categoryIds);
        })->where('id', '<>', $this->id)->get();
    }
}

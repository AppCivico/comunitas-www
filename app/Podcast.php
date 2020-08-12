<?php

namespace App;

use App\Content;


class Podcast extends Content
{
    public function relatedByTag()
    {
        return Podcast::whereHas('categories', function ($query) {
            $categoryIds = $this->categories()->pluck('categories.id')->all();
            $query->whereIn('categories.id', $categoryIds);
        })->where('id', '<>', $this->id)->get();
    }
}

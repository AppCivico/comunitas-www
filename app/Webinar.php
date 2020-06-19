<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
use App\Author;

class Webinar extends Model
{
    use Resizable;

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function relatedWebinarsByTag()
    {
        return Webinar::whereHas('categories', function ($query) {
            $categoryIds = $this->categories()->pluck('categories.id')->all();
            $query->whereIn('categories.id', $categoryIds);
        })->where('id', '<>', $this->id)->get();

        //     $tagIds = $this->tags()->pluck('tags.id')->all();
        //     $query->whereIn('tags.id', $tagIds);
        // })->where('id', '<>', $this->id)->get();
    }
}

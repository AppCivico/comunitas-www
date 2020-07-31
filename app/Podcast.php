<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Translatable;
use Laravel\Scout\Searchable;
use App\Author;


class Podcast extends Model
{
    use Resizable;
    // use Searchable;
    use Translatable;

    protected $translatable = [
        'id',
        'title',
        'iframe',
        'seo_title',
        'excerpt',
        'body',
        'slug',
        'meta_description',
        'meta_keywords',
        'image_alt',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function relatedByTag()
    {
        return Webinar::whereHas('categories', function ($query) {
            $categoryIds = $this->categories()->pluck('categories.id')->all();
            $query->whereIn('categories.id', $categoryIds);
        })->where('id', '<>', $this->id)->get();
    }
}

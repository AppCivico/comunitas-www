<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
use TCG\Voyager\Traits\Resizable;
use App\Category;
use App\Author;


class Webinar extends Model
{
    use Resizable;
    use Translatable;

    protected $translatable = [
        'title',
        'slug',
        'seo_title',
        'excerpt',
        'body',
        'meta_description',
        'meta_keywords',
        'image_alt',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_content', 'content_id');
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
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
use TCG\Voyager\Traits\Resizable;
// use Laravel\Scout\Searchable;

class News extends Model
{
    use Resizable;
    use Translatable;

    protected $translatable = [
        'title',
        'seo_title',
        'external_link',
        'image_alt',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}

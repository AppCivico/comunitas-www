<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
use TCG\Voyager\Traits\Resizable;
use Laravel\Scout\Searchable;
use App\Person;

class Trail extends Model
{
    use Resizable;
    // use Searchable;
    use Translatable;

    protected $translatable = [
        'title',
        'body',
        'excerpt',
        'meta_description',
        'seo_title'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function person()
    {
        return $this->belongsToMany(Person::class);
    }

    public function modules()
    {
        return $this->hasMany(Module::class);
    }

    public function relatedByTag()
    {
        return Interview::whereHas('categories', function ($query) {
            $categoryIds = $this->categories()->pluck('categories.id')->all();
            $query->whereIn('categories.id', $categoryIds);
        })->where('id', '<>', $this->id)->get();
    }
}

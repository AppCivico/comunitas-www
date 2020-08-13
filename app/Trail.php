<?php

namespace App;

use TeamTNT\TNTSearch\Indexer\TNTIndexer;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
use TCG\Voyager\Traits\Resizable;
use Laravel\Scout\Searchable;

class Trail extends Model
{
    use Searchable;
    use Resizable;
    use Translatable;

    protected $translatable = [
        'title',
        'body',
        'excerpt',
        'meta_description',
        'seo_title'
    ];

    public function scopePublished($query)
    {
        return $query->where('status', 'PUBLISHED');
    }

    public function toSearchableArray()
    {
        return [
            'id' => $this->id,

            'name' => $this->name,
            'nameNgrams' => utf8_encode((new TNTIndexer)->buildTrigrams($this->name)),
            'name_es' => $this::getTranslatedAttribute('name', 'es'),
            'name_en' => $this::getTranslatedAttribute('name', 'en'),

            'body' => $this->body,
            'body_es' => $this::getTranslatedAttribute('body', 'es'),
            'body_en' => $this::getTranslatedAttribute('body', 'en'),

            'category' => $this->categories->implode('name', '')

        ];
    }

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

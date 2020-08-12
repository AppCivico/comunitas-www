<?php

namespace App;

use TeamTNT\TNTSearch\Indexer\TNTIndexer;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
use TCG\Voyager\Traits\Resizable;
use Laravel\Scout\Searchable;


class Content extends Model
{
    use Searchable;
    use Translatable;
    use Resizable;


    protected $translatable = [
            'duration',
			'title',
            'iframe',
			'seo_title',
			'excerpt',
			// 'external_link',
			'body',
			'meta_description',
			'image_alt',
    ];

    public function toSearchableArray()
    {
        return [
            'id' => $this->id,

            'title' => $this->title,
            'titleNgrams' => utf8_encode((new TNTIndexer)->buildTrigrams($this->title)),
            'title_es' => $this::getTranslatedAttribute('title', 'es'),
            'title_en' => $this::getTranslatedAttribute('title', 'en'),

            'body' => $this->body,
            'body_es' => $this::getTranslatedAttribute('body', 'es'),
            'body_en' => $this::getTranslatedAttribute('body', 'en'),

            'category' => $this->categories->implode('name', '')

        ];
    }

    public function scopePublished($query)
    {
        return $query->where('status', 'PUBLISHED');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}

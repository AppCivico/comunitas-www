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
			'external_link',
			'body',
			'slug',
			'meta_description',
			'image_alt',
    ];

    public function toSearchableArray()
    {
        return [
            // 'title_pt' => $this::getTranslatedAttribute('title', 'pt_br'),
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'category' => $this->categories->implode('name', ''),
            'nameNgrams' => utf8_encode((new TNTIndexer)->buildTrigrams($this->title))
        ];
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

<?php

namespace App;

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
            'id' => $this->id,
            'title' => $this->title,
            // 'body' => $this->body,
            'category' => $this->categories->implode('name', ''),
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

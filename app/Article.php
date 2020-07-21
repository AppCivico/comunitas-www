<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
use Laravel\Scout\Searchable;

class Article extends Model
{
    use Resizable;
    use Searchable;

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}

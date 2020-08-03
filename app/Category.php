<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
use TCG\Voyager\Traits\Resizable;

class Category extends Model
{
    use Resizable;
    use Translatable;

    protected $translatable = [
        'name'
    ];

    public function contents()
    {
        return $this->belongsToMany(Content::class);
    }
}

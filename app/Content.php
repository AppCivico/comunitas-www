<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Content extends Model
{
    use Resizable;

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function scopeWebinar($query)
    {
        return $query->where('type_id', 2);
    }
}

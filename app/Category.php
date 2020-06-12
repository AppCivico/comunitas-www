<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Content;

class Category extends Model
{
    public function contents()
    {
        return $this->belongsToMany(Content::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Webinar;

class Category extends Model
{
    public function contents()
    {
        return $this->belongsToMany(Webinar::class);
    }
}

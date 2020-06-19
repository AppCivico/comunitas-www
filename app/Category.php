<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Webinar;
use App\Podcast;

class Category extends Model
{
    public function webinars()
    {
        return $this->belongsToMany(Webinar::class);
    }

    public function podcasts()
    {
        return $this->belongsToMany(Podcast::class);
    }
}

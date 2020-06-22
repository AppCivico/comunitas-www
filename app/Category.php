<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Webinar;
use App\Podcast;
use App\Guideline;

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

    public function guidelines()
    {
        return $this->belongsToMany(Guideline::class);
    }
}

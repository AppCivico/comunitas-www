<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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

    public function interviews()
    {
        return $this->belongsToMany(Interview::class);
    }

    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}

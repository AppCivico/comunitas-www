<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Category extends Model
{
    use Resizable;

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

    public function news()
    {
        return $this->belongsToMany(News::class);
    }
}

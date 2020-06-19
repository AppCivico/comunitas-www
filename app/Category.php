<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Webinar;

class Category extends Model
{
    public function webinars()
    {
        return $this->hasMany(Webinar::class);
    }
}

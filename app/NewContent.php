<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class NewContent extends Model
{
    use Translatable;

    protected $translatable = [
        'title',
        'body',
        'seo_title',
        'meta_description',
    ];
}

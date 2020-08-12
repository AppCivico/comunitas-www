<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
use TCG\Voyager\Traits\Resizable;

class Support extends Model
{
    use Resizable;
    use Translatable;

    protected $translatable = [
        'title',
    ];
}

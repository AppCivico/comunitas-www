<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
use TCG\Voyager\Traits\Resizable;

class Initiative extends Model
{
    use Resizable;
    use Translatable;

    protected $translatable = [
        'title',
    ];
}

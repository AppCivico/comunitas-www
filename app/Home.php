<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Home extends Model
{
    use Resizable;
    protected $table = 'home';
}

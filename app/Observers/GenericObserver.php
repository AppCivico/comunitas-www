<?php

namespace App\Observers;
use App\Webinar;
use App\Content;

class GenericObserver
{
    public function saving(Webinar $webinar)
    {
        foreach ($webinar->translations as $translation) {
            $translation->table_name = 'contents';
        }
    }
}

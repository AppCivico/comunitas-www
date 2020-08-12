<?php

namespace App\Observers;
// use App\Translation;
use App\Content;

class GenericObserver
{
    public function saving(Content $content)
    {
        // dd($content);
        // foreach ($translation->translations as $translation) {
        //     $translation['table_name'] = 'contents';
            // dd($translation);
        // }
    }
}

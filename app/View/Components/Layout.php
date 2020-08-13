<?php

namespace App\View\Components;

use Illuminate\View\Component;

class layout extends Component
{
    public $pageInfo;

    public function __construct($pageInfo = null)
    {
        $this->pageInfo = $pageInfo;
    }

    public function render()
    {
        return view('components.layout');
    }
}

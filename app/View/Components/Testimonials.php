<?php

namespace App\View\Components;

use Illuminate\View\Component;

class testimonials extends Component
{
    public $testimonials;
    public $image;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($testimonials, $image)
    {
        $this->testimonials = $testimonials;
        $this->image = $image;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.testimonials');
    }
}

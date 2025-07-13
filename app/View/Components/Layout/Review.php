<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Review extends Component
{

    public object|null  $reviews;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->reviews = \App\Models\Review::query()
            ->where('published' , 1)
            ->orderBy('sorting' , 'desc')
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        return view('components.layout.review');
    }
}

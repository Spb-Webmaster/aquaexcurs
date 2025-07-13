<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CurrentInformation extends Component
{

    public string|null $title;
    public string|null $desc;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
       $this->title  = config2('moonshine.home.b_title');
       $this->desc  = config2('moonshine.home.b_desc');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.current-information');
    }
}

<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PrivateExcursions extends Component
{

    public string|null $title1;
    public string|null $title2;
    public string|null $title3;
    public string|null $block1;
    public string|null $block2;
    public string|null $block3;
    public string|null $block4;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->title1  = config2('moonshine.home.c_title');
        $this->title2  = config2('moonshine.home.c_title2');
        $this->title3  = config2('moonshine.home.c_title3');
        $this->block1  = config2('moonshine.home.c_block');
        $this->block2  = config2('moonshine.home.c_block2');
        $this->block3  = config2('moonshine.home.c_block3');
        $this->block4  = config2('moonshine.home.c_block4');

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.private-excursions');
    }
}

<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AboutCompany extends Component
{
    public string|null $d_title;
    public string|null $d_subtitle;
    public string|null $d_desc1;
    public string|null $d_desc2;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->d_title =config2('moonshine.home.d_title');
        $this->d_subtitle =config2('moonshine.home.d_subtitle');
        $this->d_desc1 =config2('moonshine.home.d_desc');
        $this->d_desc2 =config2('moonshine.home.d_desc2');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.about-company');
    }
}

<?php

namespace App\View\Components\Layout;

use Closure;
use Domain\SiteNew\ViewModels\SiteNewViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LastNews extends Component
{
    /**
     * Create a new component instance.
     */

    public $last_news;
    public function __construct()
    {
        $this->last_news = SiteNewViewModel::make()->site_news(2);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.last-news');
    }
}

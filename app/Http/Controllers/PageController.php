<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Вывод страницы
     */
    public function page(Page $page)
    {

        if($page->slug == 'home') {
            return redirect(route('home'));
        }

        if(!$page) {
            abort(404);
        }

        return view('pages.page',
            [
                'item' => $page,
            ]);
    }


}

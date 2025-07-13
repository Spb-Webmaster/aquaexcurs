<?php

namespace App\Http\Controllers\SiteNew;

use App\Http\Controllers\Controller;
use Domain\Institute\ViewModels\InstituteViewModel;
use Domain\SiteNew\ViewModels\SiteNewViewModel;

class SiteNewController extends Controller
{
    public  function site_news() {
        $items = SiteNewViewModel::make()->site_news_paginate();


        return view('pages.site_news.site_news', [
            'items' => $items
        ]);
    }
    public  function site_new($slug) {
        $item = SiteNewViewModel::make()->site_new($slug);


        return view('pages.site_news.site_new', [
            'item' => $item
        ]);
    }
}

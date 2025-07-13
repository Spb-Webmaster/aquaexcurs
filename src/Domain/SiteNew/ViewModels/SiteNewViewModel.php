<?php

namespace Domain\SiteNew\ViewModels;


use App\Models\Institute;
use App\Models\SiteNew;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Support\Traits\Makeable;

class SiteNewViewModel
{
    use Makeable;

    public function site_news($limit = null)
    {

        $limit = ($limit)??100;
        $q =  SiteNew::query();
            $q->where('published', 1)
            ->orderBy('created_at', 'desc')
            ->limit($limit);
            $items = $q->get();


        if($items) {
            return $items;
        }
        return [];
    }

    public function site_news_paginate()
    {

        $items =  SiteNew::query()
            ->where('published', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(config('site.constants.paginate'));


        if($items) {
            return $items;
        }
        return [];
    }



    public function site_new($slug)
    {
       return SiteNew::query()
            ->where('published', 1)
            ->where('slug', $slug)
            ->first();

    }




}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteNew extends Model
{
    protected $table = 'site_news';

    protected $fillable = [
        'title',
        'slug',
        'subtitle',

        'short_desc',
        'desc',

        'img',

        'img2',
        'desc2',

        'published',
        'params',

        'metatitle',
        'description',
        'keywords',
        'sorting'];


    protected $casts = [
        'params' => 'collection',
    ];


    /*
        public function getArrayModulesAttribute()
        {

        }*/

    protected static function boot()
    {
        parent::boot();

        # Проверка данных  перед сохранением
        #  static::saving(function ($Moonshine) {   });


        static::created(function () {
            cache_clear();
        });

        static::updated(function () {
            cache_clear();
        });

        static::deleted(function () {
            cache_clear();
        });


    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'pages';

    protected $fillable = [
        'title',
        'slug',
        'subtitle',

        'img',
        'desc',
        'img2',
        'desc2',

        'published',
        'params',

        'metatitle',
        'description',
        'keywords',
    ];


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

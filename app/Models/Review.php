<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';

    protected $fillable = [
        'title',
        'slug',
        'subtitle',

        'img',

       'published',
        'sorting',

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

<?php

namespace App\Models;

use Domain\Contact\QueryBuilders\ContactQueryBuilder;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $table = "contacts";

    protected $fillable  = [
        'title',
        'address',
        'yandex_map',
        'data_phone',
        'data_email',
        'text',
        'email',
        'published',
        'sorting',
        'metatitle',
        'description',
        'keywords',

    ];
    protected $casts = [
        'data_phone' => 'collection',
        'data_email' => 'collection',
    ];


    //   protected $with = ['city'];
    /**
     * Вывод для moonshine, и для ArticleController
     */
    /*    public function city():BelongsTo
        {
            return $this->belongsTo(City::class);
        }*/

    /*
        public function getFormatPhoneAttribute()
        {
            return  format_phone($this->phone);
        }*/


    /**
     * Создание метода вывода со своим ContactQueryBuilder
     */
    public function newEloquentBuilder($query):ContactQueryBuilder
    {
        return new ContactQueryBuilder($query);
    }



    protected static function boot()
    {
        parent::boot();

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

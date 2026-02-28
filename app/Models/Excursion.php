<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Excursion extends Model
{

    protected $table = 'excursions';

    protected $fillable = [
        'sku',
        'title',
        'slug',
        'subtitle',
        'short_desc',
        'desc',
        'desc2',
        'img',
        'gallery',
        'yandex_map',
        'route',
        'price',
        'price_desc',

        'price_pier',
        'price_advantage',
        'price_advantage_desc',
        'price_child',
        'price_child_desc',

        'place',
        'list_points',

        'pier',
        'departure_time',
        'departure_time_desc',
        'privilege',
        'count_ticket',
        'real_ticket',

        'metatitle',
        'description',
        'keywords',
        'params',

        'price_hide',
        'time_route',

        'published',
        'sorting',
        'teaser',
        'dont_register',
        'dont_register_prefix_price',
        'dont_register_price',
        'dont_register_desc',
        'dont_register_button',
        'dont_register_form',
        'series',
        'rent_text',
        'html',
        'closed_date',
        'open_date'
    ];


    protected $casts = [
        'params' => 'collection',
        'teaser' => 'collection',
        'gallery' => 'collection',
        'list_points' => 'collection',
        'route' => 'collection',
        'closed_date' => 'collection',
    ];

    //
    public function FleetSpeedboat(): BelongsToMany
    {
        return $this->belongsToMany(FleetSpeedboat::class)->where('published', 1)->orderBy('sorting', 'desc');

    }

    public function FleetShip(): BelongsToMany
    {
        return $this->belongsToMany(FleetShip::class)->where('published', 1)->orderBy('sorting', 'desc');

    }

    public function FleetSchoolboy(): BelongsToMany
    {
        return $this->belongsToMany(FleetSchoolboy::class)->where('published', 1)->orderBy('sorting', 'desc');

    }

    public function getTeaserImgAttribute(): string
    {
        if ($this->img) {

            return asset(intervention('384x238', $this->img, 'excursion/intervention'));
        }

        return '';
    }

    public function getFullImgAttribute(): string
    {
        if ($this->img) {

            return asset(intervention('662x410', $this->img, 'excursion/intervention'));
        }

        return '';
    }

    public function getFancyImgAttribute(): string
    {
        if ($this->img) {

            return asset(intervention('1000x619', $this->img, 'excursion/intervention'));
        }

        return '';
    }

    public function getRemainingTicketsAttribute(): string
    { // remaining tickets - остаток билетов

        return '';
    }

    public function get_gallery(): array
    {
        if (count($this->gallery)) {

            $img = [];
            foreach ($this->gallery as $k => $gallery) {
                $img[$k]['url'] = asset(intervention('1000x619', $gallery['json_gallery_text'], 'excursion/intervention'));
                $img[$k]['alt'] = $gallery['json_gallery_label'];
            }

            return $img;

        }

        return [];
    }

    public function getDatesAttribute(): array
    {
        if ($this->closed_date) {
            $formatedDate = [];
            foreach ($this->closed_date as $j_date) {
                $date = Carbon::createFromFormat('Y-m-d', $j_date['json_date']); // Создаем объект Carbon из строки
                $formatedDate[] = $date->format('d.m.Y'); // Форматируем дату в нужном формате
            }
            return $formatedDate;

        }

        return [];
    }

    protected static function boot(): void
    {
        parent::boot();


        static::deleted(function () {
            cache_clear();
        });

        # Выполняем действия после сохранения
        static::saved(function () {
            cache_clear();

        });

    }

}

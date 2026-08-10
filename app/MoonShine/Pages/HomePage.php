<?php

declare(strict_types=1);

namespace App\MoonShine\Pages;

use App\Models\Excursion;
use Illuminate\Support\Facades\Storage;
use MoonShine\Laravel\Pages\Page;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Support\Enums\FormMethod;
use MoonShine\TinyMce\Fields\TinyMce;
use MoonShine\UI\Components\Collapse;
use MoonShine\UI\Components\FormBuilder;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Components\Layout\Column;
use MoonShine\UI\Components\Layout\Divider;
use MoonShine\UI\Components\Layout\Grid;
use MoonShine\UI\Components\Tabs;
use MoonShine\UI\Components\Tabs\Tab;
use MoonShine\UI\Fields\Json;
use MoonShine\UI\Fields\Select;
use MoonShine\UI\Fields\Switcher;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;


class HomePage extends Page
{

    public function getBreadcrumbs(): array
    {
        return [
            '#' => $this->getTitle()
        ];
    }

    public function setting()
    {

        if (Storage::disk('config')->exists('moonshine/home.php')) {
            $result = include(storage_path('app/public/config/moonshine/home.php'));
        } else {
            $result = null;
        }

        return (is_array($result)) ? $result : null;

    }

    public function getTitle(): string
    {
        return $this->title ?: 'Главная';
    }

    /**
     * @return list<ComponentContract>
     */
    protected function components(): iterable
    {
        if (!is_null($this->setting())) {
            extract($this->setting());
        }

        return [
            FormBuilder::make('/moonshine/home', FormMethod::POST)
                ->fields([

                    Tabs::make([

                        Tab::make(__('Главная'), [


                            Grid::make([


                                Column::make([
                                    Divider::make('Заголовок/Алиас'),

                                    Box::make([
                                        Text::make('Заголовок', 'title')->unescape()->default((isset($title)) ? $title : ''),
                                        Text::make('Подзаголовок', 'subtitle')->unescape()->default((isset($subtitle)) ? $subtitle : ''),
                                    ]),
                                    Box::make([
                                        Text::make('Наши экскурсии', 'title_exc')->unescape()->default((isset($title_exc)) ? $title_exc : ''),
                                        Text::make('Выберите маршрут', 'ci_title')->unescape()->default((isset($ci_title)) ? $ci_title : ''),
                                        Text::make('Судоходная компания «Аква-экскурс»', 'ci_subtitle')->unescape()->default((isset($ci_subtitle)) ? $ci_subtitle : ''),
                                    ]),

                                ])->columnSpan(6),


                                Column::make([
                                    Divider::make('Метаданные'),

                                    Box::make([
                                        Text::make('Мета тэг (title) ', 'metatitle')->unescape()->default((isset($metatitle)) ? $metatitle : ''),
                                        Text::make('Мета тэг (description) ', 'description')->unescape()->default((isset($description)) ? $description : ''),
                                        Text::make('Мета тэг (keywords) ', 'keywords')->unescape()->default((isset($keywords)) ? $keywords : ''),
                                    ]),

                                ])->columnSpan(6),
                            ]),
                            Grid::make([


                                Column::make([
                                    Divider::make('Описание'),

                                    Box::make([
                                        TinyMce::make('Описание', 'desc')->default((isset($desc)) ? $desc : ''),
                                    ]),


                                ])->columnSpan(12),
                            ]),

                        ]),

                        Tab::make(__('Баннер'), [

                            Grid::make([

                                Column::make([
                                    Divider::make('Баннер экскурсии'),

                                    Box::make([
                                        Switcher::make('Показывать баннер', 'banner_active')
                                            ->default((isset($banner_active)) ? (bool)$banner_active : true),
                                    ]),
                                ])->columnSpan(12),
                            ]),

                            Grid::make([

                                Column::make([
                                    Divider::make('Тексты'),

                                    Box::make([
                                        Text::make('Надзаголовок (сезон, даты)', 'banner_badge')->unescape()
                                            ->default((isset($banner_badge)) ? $banner_badge : 'Осенний сезон · с 10 августа по 10 октября'),
                                        Text::make('Заголовок', 'banner_title')->unescape()
                                            ->default((isset($banner_title)) ? $banner_title : 'По Золотому кольцу'),
                                        Text::make('Акцент заголовка (жёлтым)', 'banner_title_accent')->unescape()
                                            ->default((isset($banner_title_accent)) ? $banner_title_accent : 'в золотую осень!'),
                                        Text::make('Подзаголовок', 'banner_subtitle')->unescape()
                                            ->default((isset($banner_subtitle)) ? $banner_subtitle : 'Прогулка по рекам и каналам Петербурга на небольшом катере — до 10 гостей'),
                                    ]),

                                ])->columnSpan(6),

                                Column::make([
                                    Divider::make('Цены, кнопка, ссылка'),

                                    Box::make([
                                        Select::make('Экскурсия (источник цен)', 'banner_excursion_id')
                                            ->options(
                                                ['' => '— не выбрана —']
                                                + Excursion::query()
                                                    ->where('published', 1)
                                                    ->orderBy('sorting', 'desc')
                                                    ->pluck('title', 'id')
                                                    ->toArray()
                                            )
                                            ->default((isset($banner_excursion_id)) ? $banner_excursion_id : '')
                                            ->hint('Цены берутся из экскурсии, только если поля цен ниже пустые'),
                                        Text::make('Цена — взрослый', 'banner_price_adult')->unescape()
                                            ->default((isset($banner_price_adult)) ? $banner_price_adult : '900 ₽')
                                            ->hint('Если заполнено — приоритетнее экскурсии'),
                                        Text::make('Цена — детский', 'banner_price_child')->unescape()
                                            ->default((isset($banner_price_child)) ? $banner_price_child : '500 ₽')
                                            ->hint('Если заполнено — приоритетнее экскурсии'),
                                        Text::make('Текст кнопки', 'banner_button')->unescape()
                                            ->default((isset($banner_button)) ? $banner_button : 'Подробнее об экскурсии'),
                                        Text::make('Ссылка кнопки', 'banner_url')->unescape()
                                            ->default((isset($banner_url)) ? $banner_url : '/excursions/po-zolotomu-koltsu-v-zolotuyu-osen'),
                                        Text::make('Изображение (путь от корня сайта)', 'banner_image')->unescape()
                                            ->default((isset($banner_image)) ? $banner_image : '/images/banners/zolotoe-koltso-osen.jpg'),
                                    ]),

                                ])->columnSpan(6),
                            ]),

                        ]),


                    ]),


                ])->submit(label: 'Сохранить', attributes: ['class' => 'btn-primary'])
        ];
    }
}

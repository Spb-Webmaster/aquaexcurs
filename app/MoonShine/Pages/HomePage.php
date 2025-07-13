<?php

declare(strict_types=1);

namespace App\MoonShine\Pages;

use App\MoonShine\Fields\Home1;
use App\MoonShine\Fields\Home2;
use App\MoonShine\Fields\Home3;
use App\MoonShine\Fields\Home4;
use App\MoonShine\Fields\Home5;
use App\MoonShine\Fields\Home6;
use App\MoonShine\Fields\Home7;
use App\MoonShine\Fields\Home8;
use Illuminate\Support\Facades\Storage;
use MoonShine\Laravel\Pages\Page;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Support\Enums\FormMethod;
use MoonShine\TinyMce\Fields\TinyMce;
use MoonShine\UI\Components\Collapse;
use MoonShine\UI\Components\FormBuilder;
use MoonShine\UI\Components\Layout\Column;
use MoonShine\UI\Components\Layout\Divider;
use MoonShine\UI\Components\Layout\Grid;
use MoonShine\UI\Components\Tabs;
use MoonShine\UI\Components\Tabs\Tab;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;


class HomePage extends Page
{
    /**
     * @return array<string, string>
     */
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
        return $this->title ?: 'Главная страница сайта';
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

                        Tab::make(__('Главная страница сайта'), [

                            Grid::make([
                                Column::make([
                                    Collapse::make('Описание', [
                                        Text::make('Для меню', 'title_menu')->default((isset($title_menu)) ? $title_menu : ''),

                                    ]),
                                ])->columnSpan(6),

                                Column::make([
                                    Collapse::make('Методанные', [

                                        Text::make('Мета тэг (title) ', 'metatitle')->default((isset($metatitle)) ? $metatitle : ''),
                                        Text::make('Мета тэг (description) ', 'description')->default((isset($description)) ? $description : ''),
                                        Text::make('Мета тэг (keywords) ', 'keywords')->default((isset($keywords)) ? $keywords : ''),
                                    ]),

                                ])->columnSpan(6),

                                Column::make([
                                    Divider::make('Банер'),

                                    Collapse::make('Описание', [

                                        Home1::make(''),
                                        Text::make('Заголовок 1', 'title1')->default((isset($title1)) ? $title1 : ''),
                                        Text::make('Заголовок 2', 'title2')->default((isset($title2)) ? $title2 : ''),
                                        Text::make('Заголовок 3', 'title3')->default((isset($title3)) ? $title3 : ''),
                                        Textarea::make('Подзаголовок', 'subtitle')->default((isset($subtitle)) ? $subtitle : ''),
                                    ]),

                                ])->columnSpan(12),

                                Column::make([
                                    Divider::make('Текущая информация'),

                                    Collapse::make('Описание', [

                                        Home2::make(''),
                                        Text::make('Заголовок', 'b_title')->default((isset($b_title)) ? $b_title : ''),
                                        Textarea::make('Текущая информация', 'b_desc')->default((isset($b_desc)) ? $b_desc : ''),
                                    ]),

                                ])->columnSpan(12),

                                Column::make([
                                    Divider::make('Индивидуальные экскурсии'),

                                    Collapse::make('Описание', [


                                        Text::make('Заголовок 1', 'c_title')->default((isset($c_title)) ? $c_title : ''),
                                        Text::make('Заголовок 2', 'c_title2')->default((isset($c_title2)) ? $c_title2 : ''),
                                        Text::make('Заголовок 3', 'c_title3')->default((isset($c_title3)) ? $c_title3 : ''),

                                        Text::make('Блок 1', 'c_block')->default((isset($c_block)) ? $c_block : ''),
                                        Text::make('Блок 2', 'c_block2')->default((isset($c_block2)) ? $c_block2 : ''),
                                        Text::make('Блок 3', 'c_block3')->default((isset($c_block3)) ? $c_block3 : ''),
                                        Text::make('Блок 4', 'c_block4')->default((isset($c_block4)) ? $c_block4 : ''),

                                    ]),

                                ])->columnSpan(12),


                                Column::make([
                                    Divider::make('Текст на главной странице'),

                                    Collapse::make('Описание', [
                                        Text::make('Заголовок', 'd_title')->default((isset($d_title)) ? $d_title : ''),
                                        Text::make('Подзаголовок', 'd_subtitle')->default((isset($d_subtitle)) ? $d_subtitle : ''),
                                        TinyMce::make('HTML', 'd_desc')->default((isset($d_desc)) ? $d_desc : ''),
                                        TinyMce::make('HTML 2', 'd_desc2')->default((isset($d_desc2)) ? $d_desc2 : ''),

                                    ]),


                                ])->columnSpan(12),
                            ]),
                        ]),


                    ]),


                ])->submit(label: 'Сохранить', attributes: ['class' => 'btn-primary'])
        ];
    }
}

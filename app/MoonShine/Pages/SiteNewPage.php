<?php

declare(strict_types=1);

namespace App\MoonShine\Pages;

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


class SiteNewPage extends Page
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

        if (Storage::disk('config')->exists('moonshine/site_new.php')) {
            $result = include(storage_path('app/public/config/moonshine/site_new.php'));
        } else {
            $result = null;
        }

        return (is_array($result)) ? $result : null;

    }

    public function getTitle(): string
    {
        return $this->title ?: 'Новости';
    }

    /**
     * @return list<ComponentContract>
     */
    protected function components(): iterable
    {
        if(!is_null($this->setting())) {
            extract($this->setting());
        }

        return [
            FormBuilder::make('/moonshine/site_new', FormMethod::POST)
                ->fields([

                    Tabs::make([

                        Tab::make(__('Главная страница Новостией Сайта'), [


                            Grid::make([


                                Column::make([


                                    Collapse::make('Описание', [
                                        Text::make('Заголовок', 'title')->default((isset($title))? $title :''),
                                        Text::make('Для меню', 'title_menu')->default((isset($title_menu))? $title_menu :''),
                                        Text::make('Подзаголовок', 'subtitle')->default((isset($subtitle))? $subtitle :''),

                                    ]),
                                ])->columnSpan(6),
                                Column::make([
                                    Collapse::make('Методанные', [

                                        Text::make('Мета тэг (title) ', 'metatitle')->default((isset($metatitle))? $metatitle :''),
                                        Text::make('Мета тэг (description) ', 'description')->default((isset($description))? $description :''),
                                        Text::make('Мета тэг (keywords) ', 'keywords')->default((isset($keywords))? $keywords :''),
                                    ]),

                                ])->columnSpan(6),
                                Column::make([
                                    Divider::make('Текст на странице списка институтов'),

                                    Collapse::make('Описание', [

                                        TinyMce::make('HTML', 'desc')->default((isset($desc)) ? $desc : ''),
                                        TinyMce::make('HTML', 'desc2')->default((isset($desc2)) ? $desc2 : ''),

                                    ]),


                                ])->columnSpan(12),
                            ]),
                        ]),


                    ]),


                ])->submit(label: 'Сохранить', attributes: ['class' => 'btn-primary'])
        ];
    }
}

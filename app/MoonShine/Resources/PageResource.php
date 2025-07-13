<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Page;

use MoonShine\Laravel\Enums\Action;
use MoonShine\Laravel\Fields\Slug;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Support\Enums\ClickAction;
use MoonShine\Support\ListOf;
use MoonShine\TinyMce\Fields\TinyMce;
use MoonShine\UI\Components\Collapse;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Components\Layout\Column;
use MoonShine\UI\Components\Layout\Divider;
use MoonShine\UI\Components\Layout\Grid;
use MoonShine\UI\Fields\Date;
use MoonShine\UI\Fields\ID;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Switcher;
use MoonShine\UI\Fields\Text;

/**
 * @extends ModelResource<Page>
 */
class PageResource extends ModelResource
{
    protected string $model = Page::class;

    protected string $title = 'Страницы';


    protected string $column = 'created_at';

    protected string $sortColumn = 'created_at';

    protected ?ClickAction $clickAction = ClickAction::EDIT;

    public function search(): array
    {
        return ['title'];
    }
    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Image::make(__('Изображение'), 'img'),
            Text::make('Название', 'title'),
            Switcher::make('Публикация', 'published')->updateOnPreview(),
            Date::make(__('Дата создания'), 'created_at')

                ->format("d.m.Y")
                ->default(now()->toDateTimeString())
                ->sortable(),



        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Box::make([
                ID::make(),
                Divider::make('Страница без меню'),
                Grid::make([
                    Column::make([

                        Collapse::make('Заголовок/Алиас', [
                            Text::make('Заголовок', 'title')->required(),
                            Slug::make('Алиас', 'slug')
                                ->from('title')->unique(),
                            Text::make('Подзаголовок', 'subtitle'),

                        ]),



                    ])->columnSpan(6),
                    Column::make([
                        Collapse::make('Методанные', [

                            Text::make('Мета тэг (title) ', 'metatitle')->unescape(),
                            Text::make('Мета тэг (description) ', 'description')->unescape(),
                            Text::make('Мета тэг (keywords) ', 'keywords')->unescape(),
                        ]),
                        Collapse::make('Настройки', [
                            Switcher::make('Публикация', 'published')->default(1),

                            Date::make(__('Дата создания'), 'created_at')
                                ->format("d.m.Y")
                                ->default(now()->toDateTimeString())
                                ->sortable(),


                        ]),
                    ])->columnSpan(6),


                ]),
                Grid::make([
                    Column::make([

                        Collapse::make('', [
                            Image::make(__('Изображение'), 'img')
                                ->dir('site_new')
                                ->allowedExtensions(['jpg', 'png', 'jpeg', 'gif', 'svg'])
                                ->removable(),
                            TinyMce::make('Описание', 'desc'),
                            Image::make(__('Изображение'), 'img2')
                                ->dir('site_new')
                                ->allowedExtensions(['jpg', 'png', 'jpeg', 'gif', 'svg'])
                                ->removable()->hint('Во всю ширину'),
                            TinyMce::make('Описание', 'desc2'),

                        ]),



                    ])->columnSpan(12),
                ]),

            ]),
        ];
    }





    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            ID::make(),
        ];
    }


    protected function rules(mixed $item): array
    {
        return [
            'metatitle' => 'max:1024',
            'description' => 'max:1024',
            'keywords' => 'max:1024',
        ];
    }

    protected function activeActions(): ListOf
    {
        return parent::activeActions()
            ->except(Action::VIEW, /*Action::MASS_DELETE, Action::DELETE, Action::CREATE*/)// ->only(Action::VIEW)
            ;
    }
}

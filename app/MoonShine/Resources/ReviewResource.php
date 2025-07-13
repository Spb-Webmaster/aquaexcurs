<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Review;

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
 * @extends ModelResource<Review>
 */
class ReviewResource extends ModelResource
{
    protected string $model = Review::class;

    protected string $title = 'Reviews';

    protected string $sortColumn = 'sorting';

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

            Number::make('Сортировка','sorting'),

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
                            Text::make('Краткое описание изображения', 'subtitle'),

                        ]),



                    ])->columnSpan(6),
                    Column::make([

                        Collapse::make('Настройки', [
                            Switcher::make('Публикация', 'published')->default(1),

                            Date::make(__('Дата создания'), 'created_at')
                                ->format("d.m.Y")
                                ->default(now()->toDateTimeString())
                                ->sortable(),
                            Number::make('Сортировка','sorting')->buttons()->default(999),


                        ]),
                    ])->columnSpan(6),


                ]),
                Grid::make([
                    Column::make([

                        Collapse::make('', [
                            Image::make(__('Изображение'), 'img')
                                ->dir('review')
                                ->allowedExtensions(['jpg', 'png', 'jpeg', 'gif', 'svg'])
                                ->removable(),


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
        ];
    }

    protected function activeActions(): ListOf
    {
        return parent::activeActions()
            ->except(Action::VIEW, /*Action::MASS_DELETE, Action::DELETE, Action::CREATE*/)// ->only(Action::VIEW)
            ;
    }
}

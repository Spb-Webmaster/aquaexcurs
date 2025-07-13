<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\MoonShine\Fields\Node;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contact;


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
use MoonShine\UI\Fields\Json;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Switcher;
use MoonShine\UI\Fields\Text;

/**
 * @extends ModelResource<Contact>
 */
class ContactResource extends ModelResource
{
    protected string $model = Contact::class;

    protected string $title = 'Контакты';

    protected string $column = 'sorting';

    protected string $sortColumn = 'sorting';

    protected ?ClickAction $clickAction = ClickAction::EDIT;

    /**
     * @return list<FieldContract>
     */


    public function search(): array
    {
        return ['title', 'email', 'phone', 'address'];
    }

    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Название', 'title'),
            Switcher::make('Публикация', 'published')->updateOnPreview(),
            Number::make('Сортировка', 'sorting'),


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
                Divider::make('Категория'),
                Grid::make([
                    Column::make([

                        Collapse::make('Заголовок/Страна', [
                            Text::make('Страна', 'title')->required(),
                        ]),

                        Collapse::make('', [
                            Text::make('Карта', 'yandex_map'),
                        ]),

                    ])->columnSpan(6),
                    Column::make([
                        Collapse::make('Методанные', [



                            Node::make('', 'node')
                        ]),

                        Collapse::make('Настройки', [
                            Switcher::make('Публикация', 'published')->default(1),
                            Number::make('Сортировка', 'sorting')->buttons()->default(999),
                            Date::make(__('Дата создания'), 'created_at')
                                ->format("d.m.Y")
                                ->default(now()->toDateTimeString())
                                ->sortable(),
                        ]),

                    ])->columnSpan(6),


                ]),
                Grid::make([
                    Column::make([


                        Collapse::make('Контактные данные', [
                            Text::make('Адрес', 'address'),
                            Text::make('Email', 'email'),

                            Grid::make([
                                Column::make([
                                    Json::make('Телефоны', 'data_phone')->fields([
                                        Text::make('Номер', 'phone')

                                    ])->vertical()->creatable(limit: 15)
                                        ->removable(),
                                ])->columnSpan(6),
                                Column::make([
                                    Json::make('Emails', 'data_email')->fields([
                                        Text::make('Email', 'email')

                                    ])->vertical()->creatable(limit: 15)
                                        ->removable(),

                                ])->columnSpan(6),
                            ]),


                        ]),
                        Collapse::make('', [
                            TinyMce::make('Описание', 'text'),

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

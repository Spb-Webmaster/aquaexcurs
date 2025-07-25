<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\MoonShine\Fields\FormParams;
use Illuminate\Database\Eloquent\Model;
use App\Models\SiteFormEmail;


use MoonShine\Laravel\Enums\Action;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Support\ListOf;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Components\Layout\Column;
use MoonShine\UI\Components\Layout\Grid;
use MoonShine\UI\Fields\Date;
use MoonShine\UI\Fields\ID;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\Json;
use MoonShine\UI\Fields\Switcher;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;

/**
 * @extends ModelResource<SiteFormEmail>
 */
class SiteFormEmailResource extends ModelResource
{
    protected string $model = SiteFormEmail::class;

    protected string $title = 'SiteFormEmails';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Date::make(__('Дата создания'), 'created_at')
                ->format("d.m.Y - H:i")
                ->default(now()->toDateTimeString())
                ->sortable(),
            Switcher::make('Отработанная заявка', 'worked'),
            Switcher::make('Пометка', 'message'),

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
                Grid::make([
                    Column::make([

                        FormParams::make('', 'params')

                    ])->columnSpan(6),
                    Column::make([

                        Box::make('Пометки',[
                            Textarea::make('Записать для себя', 'message'),
                            Switcher::make('Заявка отработана', 'worked')->default(0),

                        ]),


                        ])->columnSpan(6),

                ]),
            ])
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

    protected function activeActions(): ListOf
    {
        return parent::activeActions()
            ->except(Action::VIEW /*Action::MASS_DELETE, Action::DELETE, Action::CREATE*/)// ->only(Action::VIEW)
            ;
    }
}

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
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Components\Layout\Column;
use MoonShine\UI\Components\Layout\Divider;
use MoonShine\UI\Components\Layout\Grid;
use MoonShine\UI\Components\Tabs;
use MoonShine\UI\Components\Tabs\Tab;
use MoonShine\UI\Fields\Json;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;


class SettingPage extends Page
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

        if (Storage::disk('config')->exists('moonshine/setting.php')) {
            $result = include(storage_path('app/public/config/moonshine/setting.php'));
        } else {
            $result = null;
        }

        return (is_array($result)) ? $result : null;

    }

    public function getTitle(): string
    {
        return $this->title ?: 'Настройки';
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
            FormBuilder::make('/moonshine/setting', FormMethod::POST)
                ->fields([

                    Tabs::make([

                        Tab::make(__('Настройки'), [


                            Grid::make([


                                Column::make([
                                    Divider::make('Константы'),

                                    Box::make([
                                        Text::make('Название', 'title')->default((isset($title)) ? $title : ''),

                                        Text::make('Название в логотипе', 'title_logo')->default((isset($title_logo)) ? $title_logo : ''),
                                        Textarea::make('Слоган', 'slogan')->default((isset($slogan)) ? $slogan : ''),
                                        Textarea::make('Полный Адрес', 'address')->default((isset($address)) ? $address : ''),
                                        Text::make('Адрес по частям', 'address_light1')->default((isset($address_light1)) ? $address_light1 : ''),
                                        Text::make('Адрес по частям', 'address_light2')->default((isset($address_light2)) ? $address_light2 : ''),


                                    ]),
                                    Divider::make('Соц.сети'),

                                    Box::make([
                                        Text::make('Vk', 'vk')->default((isset($vk)) ? $vk : ''),
                   /*                     Text::make('FaceBook', 'facebook')->default((isset($facebook)) ? $facebook : ''),
                                        Text::make('YouTube', 'youtube')->default((isset($youtube)) ? $youtube : ''),
                                        Text::make('Instagram', 'instagram')->default((isset($instagram)) ? $instagram : ''),
                                        Text::make('WhatsApp', 'whatsapp')->default((isset($whatsapp)) ? $whatsapp : ''),
                                        Text::make('Telegram', 'telegram')->default((isset($telegram)) ? $telegram : ''),*/
                                    ]),


                                ])->columnSpan(6),


                                Column::make([
                                    Divider::make('Контакты'),

                                    Box::make([


                                        Text::make('Copyright', 'contact_copy')->default((isset($contact_copy)) ? $contact_copy : ''),

                                        Text::make(__('Телефон'), 'phone1')->default((isset($phone1)) ? $phone1 : ''),
                                        Text::make(__('Телефон 2'), 'phone2')->default((isset($phone2)) ? $phone2 : ''),
                                        Text::make(__('Email'), 'email')->default((isset($email)) ? $email : ''),
                                    ]),


                                ])->columnSpan(6),
                            ]),
                        ]),


                        Tab::make(__('Email получателя системных сообщений'), [

                            Divider::make('Опции'),
                            Grid::make([
                                Column::make([

                                    Box::make([
                                        Json::make('Электронная почта', 'json_emails')->fields([

                                            Text::make('', 'json_email')->hint('Владелец этого email будет получать все уведомления (изменения) при редактировании личных кабинетов пользователями.'),

                                        ])->vertical()->creatable(limit: 3)
                                            ->removable()->default((isset($json_emails)) ? $json_emails : ''),


                                    ]),

                                ])->columnSpan(12),


                            ])


                        ]),


                    ]),


                ])->submit(label: 'Сохранить', attributes: ['class' => 'btn-primary'])
        ];
    }

}

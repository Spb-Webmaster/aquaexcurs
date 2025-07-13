<?php

declare(strict_types=1);

namespace App\MoonShine\Layouts;

use App\MoonShine\Pages\AccreditationPage;
use App\MoonShine\Pages\DiplomPage;
use App\MoonShine\Pages\HomePage;
use App\MoonShine\Pages\InstitutePage;
use App\MoonShine\Pages\ServicePage;
use App\MoonShine\Pages\SettingPage;
use App\MoonShine\Pages\SiteNewPage;
use App\MoonShine\Pages\TrainingPage;
use App\MoonShine\Resources\MoonShineUserResource;

use MoonShine\Laravel\Layouts\AppLayout;
use MoonShine\ColorManager\ColorManager;
use MoonShine\Contracts\ColorManager\ColorManagerContract;
use MoonShine\Laravel\Components\Layout\{Locales, Notifications, Profile, Search};
use MoonShine\UI\Components\{Breadcrumbs,
    Components,
    Layout\Flash,
    Layout\Div,
    Layout\Body,
    Layout\Burger,
    Layout\Content,
    Layout\Footer,
    Layout\Head,
    Layout\Favicon,
    Layout\Assets,
    Layout\Meta,
    Layout\Header,
    Layout\Html,
    Layout\Layout,
    Layout\Logo,
    Layout\Menu,
    Layout\Sidebar,
    Layout\ThemeSwitcher,
    Layout\TopBar,
    Layout\Wrapper,
    When};
use MoonShine\MenuManager\MenuGroup;
use MoonShine\MenuManager\MenuItem;
use App\MoonShine\Resources\InstituteResource;
use App\MoonShine\Resources\InstituteProgramResource;
use App\MoonShine\Resources\InstituteAcreditProgramResource;
use App\MoonShine\Resources\SiteNewResource;
use App\MoonShine\Resources\ContactResource;
use App\MoonShine\Resources\TimetableResource;
use App\MoonShine\Resources\TimetableCityResource;
use App\MoonShine\Resources\TimetableLessonResource;
use App\MoonShine\Resources\TimetableMonthResource;
use App\MoonShine\Resources\DiplomResource;
use App\MoonShine\Resources\DiplomSubjectResource;
use App\MoonShine\Resources\ServiceResource;
use App\MoonShine\Resources\ServiceModuleResource;
use App\MoonShine\Resources\FAQModuleResource;
use App\MoonShine\Resources\TrainingCategoryResource;
use App\MoonShine\Resources\TrainingResource;
use App\MoonShine\Resources\TrainingModuleResource;
use App\MoonShine\Resources\InstituteModuleResource;
use App\MoonShine\Resources\PageResource;
use App\MoonShine\Resources\UserQualificationResource;
use App\MoonShine\Resources\UserRegionResource;
use App\MoonShine\Resources\UserRoleResource;
use App\MoonShine\Resources\UserSpecializationResource;
use App\MoonShine\Resources\UserWorkExperienceResource;
use App\MoonShine\Resources\UserResource;
use App\MoonShine\Resources\ManagerResource;
use App\MoonShine\Resources\ROPResource;
use App\MoonShine\Resources\UserAccreditationResource;
use App\MoonShine\Resources\ReviewResource;

final class AxeldLayout extends AppLayout
{

    protected function assets(): array
    {
        return [
            ...parent::assets(),
        ];
    }

    protected function menu(): array
    {
        return [
            MenuGroup::make('Пользователи', [
                MenuItem::make('Админ', MoonShineUserResource::class, 'user'),

                // MenuItem::make('Роль', MoonShineUserRoleResource::class, 'hashtag'),
            ]),

            MenuGroup::make('Страницы', [
                MenuItem::make('Главная', HomePage::class, 'building-library'),
                MenuItem::make('Статичные страницы', PageResource::class, 'document-chart-bar'),
                MenuItem::make('Контакты', ContactResource::class, 'phone-arrow-down-left'),
            ]),

            MenuGroup::make(static fn() => __('Настройки'), [
                MenuItem::make('Настройки', SettingPage::class, 'adjustments-vertical'),

            ]),


            MenuGroup::make('Новости', [
                MenuItem::make('Главная', SiteNewPage::class, 'sun'),
                MenuItem::make('Новости', SiteNewResource::class, 'calendar-days'),
            ]),

            MenuGroup::make('Отзывы', [
                MenuItem::make('Отзывы', ReviewResource::class, 'chat-bubble-oval-left-ellipsis'),
            ]),



        ];
    }

    /**
     * @param ColorManager $colorManager
     */
    protected function colors(ColorManagerContract $colorManager): void
    {
        parent::colors($colorManager);

        // $colorManager->primary('#00000');
    }
    public function build(): Layout
    {
        return Layout::make([
            Html::make([
                Head::make([
                    Meta::make()->customAttributes([
                        'name' => 'csrf-token',
                        'content' => csrf_token(),
                    ]),
                    Favicon::make()->bodyColor($this->getColorManager()->get('body')),
                    Assets::make(),
                ])
                    ->bodyColor($this->getColorManager()->get('body'))
                    ->title($this->getPage()->getTitle()),
                Body::make([
                    Wrapper::make([
                        Sidebar::make([
                            Div::make([
                                Div::make([
                                    Logo::make(
                                        $this->getHomeUrl(),
                                        $this->getLogo(),
                                        $this->getLogo(small: true),
                                    )->minimized(),
                                ])->class('menu-heading-logo'),

                                Div::make([
                                    Div::make([
                                        ThemeSwitcher::make(),
                                    ])->class('menu-heading-mode'),

                                    Div::make([
                                        Burger::make(),
                                    ])->class('menu-heading-burger'),
                                ])->class('menu-heading-actions'),
                            ])->class('menu-heading'),

                            Div::make([
                                Menu::make(),
                                When::make(
                                    fn(): bool => $this->isAuthEnabled(),
                                    static fn(): array => [Profile::make(withBorder: true)],
                                ),
                            ])->customAttributes([
                                'class' => 'menu',
                                ':class' => "asideMenuOpen && '_is-opened'",
                            ]),
                        ])->collapsed(),

                        Div::make([
                            Flash::make(),
                            Header::make([
                                Breadcrumbs::make($this->getPage()->getBreadcrumbs())->prepend(
                                    $this->getHomeUrl(),
                                    icon: 'home',
                                ),
                                Search::make(),
                                When::make(
                                    fn(): bool => $this->isUseNotifications(),
                                    static fn(): array => [Notifications::make()],
                                ),
                                Locales::make(),
                            ]),

                            Content::make([
                                Components::make(
                                    $this->getPage()->getComponents(),
                                ),
                            ]),

                            Footer::make()
                                ->copyright(static fn(): string
                                => sprintf(
                                    <<<'HTML'
                                        &copy; %d  ❤️  <a href="https://t.me/AxeldMaster" target="_blank">@AxeldMaster</a>
                                        HTML,
                                    now()->year,
                                ))
                                ->menu([
                                    config('app.app_url') => 'Website',
                                ]),
                        ])->class('layout-page'),
                    ]),
                ])->class('theme-minimalistic'),
            ])
                ->customAttributes([
                    'lang' => $this->getHeadLang(),
                ])
                ->withAlpineJs()
                ->withThemes(),
        ]);
    }

}

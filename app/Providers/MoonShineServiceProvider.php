<?php

declare(strict_types=1);

namespace App\Providers;

use App\MoonShine\Pages\HomePage;
use App\MoonShine\Pages\SettingPage;
use App\MoonShine\Pages\SiteNewPage;
use Illuminate\Support\ServiceProvider;
use MoonShine\Contracts\Core\DependencyInjection\ConfiguratorContract;
use MoonShine\Contracts\Core\DependencyInjection\CoreContract;
use MoonShine\Laravel\DependencyInjection\MoonShine;
use MoonShine\Laravel\DependencyInjection\MoonShineConfigurator;
use App\MoonShine\Resources\MoonShineUserResource;
use App\MoonShine\Resources\MoonShineUserRoleResource;
use App\MoonShine\Resources\PageResource;
use App\MoonShine\Resources\ContactResource;
use App\MoonShine\Resources\SiteNewResource;
use App\MoonShine\Resources\ReviewResource;
use App\MoonShine\Resources\SiteFormEmailResource;

class MoonShineServiceProvider extends ServiceProvider
{
    /**
     * @param  MoonShine  $core
     * @param  MoonShineConfigurator  $config
     *
     */
    public function boot(CoreContract $core, ConfiguratorContract $config): void
    {
        $core
            ->resources([
                MoonShineUserResource::class,
                MoonShineUserRoleResource::class,
                PageResource::class,
                ContactResource::class,
                SiteNewResource::class,
                ReviewResource::class,
                SiteFormEmailResource::class,
            ])
            ->pages([
                ...$config->getPages(),
                SiteNewPage::class,
                HomePage::class,
                SettingPage::class,
            ])
        ;
    }
}

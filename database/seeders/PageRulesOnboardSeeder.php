<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\Page;
use Illuminate\Database\Seeder;

/**
 * Материал «Правила поведения на борту».
 * Вёрстка блока с иконками лежит в database/seeders/stubs/pravila-povedeniya-na-bortu.html
 * и целиком пишется в поле html (Textarea в админке), поле text не используется.
 */
class PageRulesOnboardSeeder extends Seeder
{
    public function run(): void
    {
        $html = file_get_contents(__DIR__ . '/stubs/pravila-povedeniya-na-bortu.html');

        $page = Page::query()->updateOrCreate(
            ['slug' => 'pravila-povedeniya-na-bortu'],
            [
                'title' => 'Правила поведения на борту',
                'subtitle' => null,
                'html' => $html,
                'text' => null,
                'html2' => null,
                'text2' => null,
                'metatitle' => 'Правила поведения на борту теплохода',
                'description' => 'Правила поведения на борту',
                'keywords' => 'Правила',
                'gallery' => [],
                'faq' => [],
                'faq_title' => null,
                'published' => 1,
                // между «Оплата и возврат билетов» (999) и «Часто задаваемые вопросы» (980):
                // подменю сортируется по sorting desc
                'sorting' => 990,
            ]
        );

        // пункт подменю в разделе «Пассажирам»
        $menu = Menu::query()->where('title', 'Пассажирам')->first();

        if ($menu) {
            $menu->Page()->syncWithoutDetaching([$page->id]);
        }

        cache_clear();
    }
}

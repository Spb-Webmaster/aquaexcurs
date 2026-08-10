<?php

namespace App\View\Components\Banner;

use App\Models\Excursion;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ExcursionBannerComponent extends Component
{
    public array $banner = [];

    public function __construct()
    {
        $config = config2_array('moonshine.home') ?? [];

        [$priceAdult, $priceChild] = $this->prices($config);

        $this->banner = [
            'active' => $this->setting('banner_active', '1') == '1',
            'url' => $this->setting('banner_url', '/excursions/po-zolotomu-koltsu-v-zolotuyu-osen'),
            'image' => $this->setting('banner_image', '/images/banners/zolotoe-koltso-osen.jpg'),
            'badge' => $this->setting('banner_badge', 'Осенний сезон · с 10 августа по 10 октября'),
            'title' => $this->setting('banner_title', 'По Золотому кольцу'),
            'title_accent' => $this->setting('banner_title_accent', 'в золотую осень!'),
            'subtitle' => $this->setting('banner_subtitle', 'Прогулка по рекам и каналам Петербурга на небольшом катере — до 10 гостей'),
            'price_adult' => $priceAdult,
            'price_child' => $priceChild,
            'button' => $this->setting('banner_button', 'Подробнее об экскурсии'),
        ];
    }

    /**
     * Цены баннера: поля «взрослый»/«детский» приоритетны; если оба пустые —
     * цены берутся из выбранной экскурсии; если и там нет — не выводим.
     */
    private function prices(array $config): array
    {
        // настройки ещё ни разу не сохранялись — дефолтные цены
        if (!array_key_exists('banner_price_adult', $config) && !array_key_exists('banner_price_child', $config)) {
            return ['900 ₽', '500 ₽'];
        }

        $adult = trim((string)($config['banner_price_adult'] ?? ''));
        $child = trim((string)($config['banner_price_child'] ?? ''));

        if ($adult !== '' || $child !== '') {
            return [$adult, $child];
        }

        $excursionId = (int)($config['banner_excursion_id'] ?? 0);

        if ($excursionId) {
            $excursion = Excursion::query()->find($excursionId);

            if ($excursion) {
                return [
                    $excursion->price ? number_format((float)$excursion->price, 0, '', ' ') . ' ₽' : '',
                    $excursion->price_child ? number_format((float)$excursion->price_child, 0, '', ' ') . ' ₽' : '',
                ];
            }
        }

        return ['', ''];
    }

    private function setting(string $key, string $default): string
    {
        $value = config2('moonshine.home.' . $key);

        return ($value === '' || is_null($value)) ? $default : $value;
    }

    public function render(): View|Closure|string
    {
        return view('components.banner.excursion-banner-component');
    }
}

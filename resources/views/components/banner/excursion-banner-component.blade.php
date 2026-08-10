@if($banner['active'])
<div class="excursion-banner">
    <div class="excursion-banner__bg" style="background-image: url('{{ $banner['image'] }}')"></div>
    <div class="excursion-banner__overlay"></div>
    <div class="block relative">
        <div class="excursion-banner__content">
            <div class="excursion-banner__badge">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/></svg>
                <span>{{ $banner['badge'] }}</span>
            </div>

            <div class="excursion-banner__title">
                {{ $banner['title'] }} <span class="accent">{{ $banner['title_accent'] }}</span>
            </div>

            <div class="excursion-banner__subtitle">
                {{ $banner['subtitle'] }}
            </div>

            <div class="excursion-banner__bottom">
                @if($banner['price_adult'] !== '' || $banner['price_child'] !== '')
                <div class="excursion-banner__prices">
                    @if($banner['price_adult'] !== '')
                    <div class="excursion-banner__price">
                        <span class="value">{{ $banner['price_adult'] }}</span>
                        <span class="label">взрослый</span>
                    </div>
                    @endif
                    @if($banner['price_child'] !== '')
                    <div class="excursion-banner__price">
                        <span class="value">{{ $banner['price_child'] }}</span>
                        <span class="label">детский</span>
                    </div>
                    @endif
                </div>
                @endif
                <a href="{{ $banner['url'] }}" class="excursion-banner__btn">
                    <span>{{ $banner['button'] }}</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m13 6 6 6-6 6"/></svg>
                </a>
            </div>
        </div>
    </div>
</div>
@endif

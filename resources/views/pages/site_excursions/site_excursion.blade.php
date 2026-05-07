@extends('layouts.layout')
<x-seo.meta
    title="{{ ($item->metatitle) ? : $item->title }}"
    description="{{ ($item->description) ? : '' }}"
    keywords="{{ ($item->keywords) ? : '' }}"
/>
@section('content')

<main class="excursion">
<section>
    <div class="block relative item_customer_info">
        <x-current-information.info-component/>
    </div>
</section>

<section class="relative">
    <div class="block relative">
        <div class="excursion__title">
        <h1 class="h1">
            {{ $item->title }}
        </h1>
        @if($item->subtitle)
            <div class="subtitle">{!! $item->subtitle  !!}</div>
        @endif
        </div>
       {{-- <x-excursion.item :item="$item" />--}}












<div class="fleet__html">

        <h2>Аренда теплохода для проведения праздника на борту</h2>
        <div class="desc"><p><strong>Вариант ПРЕМИУМ.</strong> Предлагаем отметить Ваш юбилей, свадьбу, выпускной вечер, встречу друзей или провести корпоративное мероприятие, официальную встречу или кофе – брейк на борту теплохода «Златоуст».</p></div>

        <div class="fl__table">
            <div class="fl__tr">
                <div class="fl__td flw_60">
                    <img src="/storage/fleet/zlatoust.jpg" alt="Златоуст" />
                    <br/><br/>
                    <div class="__buy">
                        <a class="btn open-fancybox"
                           data-form="order_excursion"
                           data-transfer='{"excursion_id": 9}'
                           href="#"><span>Заказать аренду теплохода</span>
                        </a>
                    </div>
                </div>
                <div class="fl__td flw_40">
                    <div class="fl__price_text">Преимущества</div>
                    <div class="desc">
                        <ul>
                            <li>Новый теплоход постройки 2025 года.</li>
                            <li>Повышенная пассажировместимость до 60 человек.</li>
                            <li>Салон с современным дизайном, мягкой мебелью, видео панелями и аудиосистемой Hi-Fi.</li>
                            <li>Удобный санузел большого размера, с современным дизайном.</li>
                            <li>Просторная открытая палуба для проведения фотосессии.</li>
                            <li>Маршрут строится по желанию заказчика и оговаривается заранее.</li>
                            <li>Организация праздничного ужина/обеда/фуршета/кофе-брейка любой сложности профессиональной кейтеринговой компанией.</li>
                            <li>Любая форма оплаты: наличный расчет/ карта/ безналичный расчет для юридических компаний.</li>
                            <li>Возможность предварительного визита на борт теплохода для знакомства с интерьерами.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="fl__tr reverse">
                <div class="fl__td w_800">
                    <div class="fl__sub">Новый теплоход премиум класса</div>
                    <div class="fl__ships">т/х «Златоуст»</div>
                </div>
                <div class="fl__td">
                    <div class="fl__sub center" >Стоимость аренды теплохода (без учета питания)</div>
                    <div class="table_price">
                        <div class="t100">Цены сезона 2026 до 15 июня с 15 августа</div>
                        <div class="t_flex">
                            <div class="t50">
                                <div class="top">с 08:00 до 21:00<br></div>
                                <div class="bottom">20 000 р. в час</div>
                            </div>
                            <div class="t50">
                                <div class="top">с 22:00 до 02:00 <br>(Минимальный заказ 2 часа)</div>
                                <div class="bottom">22 000 р. в час</div>
                            </div>
                        </div>

                    </div>
                    <div class="table_price radius_0">
                        <div class="t100">Цены сезона 2026 с 15 июня до 15 августа</div>
                        <div class="t_flex">
                            <div class="t50">
                                <div class="top">с 08:00 до 21:00<br></div>
                                <div class="bottom">20 000 р. в час</div>
                            </div>
                            <div class="t50">
                                <div class="top">с 22:00 до 02:00 <br>(Минимальный заказ 2 часа)</div>
                                <div class="bottom">25 000 р. в час</div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>

        <div class="fl__grey">*Организация питания на борту оплачивается отдельно по согласованию с кейтеринговой компанией.<br>*Уборка после мероприятия оплачивается отдельно.
        </div>

        <div class="desc"><p><strong>Вариант СТАНДАРТ.</strong> Предлагаем отметить встречу друзей или провести корпоративное мероприятие, официальную встречу в формате «фуршет» или кофе – брейк на борту теплохода класса «Мойка».</p></div>

        <div class="fl__table">
            <div class="fl__tr">
                <div class="fl__td flw_60">
                    <img src="/storage/fleet/suzdal.jpg" alt="Суздаль" />
                    <br/><br/>
                    <div class="__buy">
                        <a class="btn open-fancybox"
                           data-form="order_excursion"
                           data-transfer='{"excursion_id": 9}'
                           href="#"><span>Заказать аренду теплохода</span>
                        </a>
                    </div>
                    <br/>
                </div>
                <div class="fl__td flw_40">
                    <div class="fl__price_text">Преимущества</div>
                    <div class="desc">
                        <ul>
                            <li>Комфортабельный теплоход с теплым салоном и просторной открытой палубой.</li>
                            <li>Пассажировместимость при фуршете до 30 человек.</li>
                            <li>Санузел (стандарт).</li>
                            <li>Просторная открытая палуба для проведения фотосессии.</li>
                            <li>Маршрут строится по стандартному варианту «Золотое кольцо Петербурга» с учетом пожеланий заказчика и оговаривается заранее. </li>
                            <li>Любая форма оплаты: наличный расчет/ карта/ безналичный расчет для юридических компаний.</li>
                            <li>Возможность предварительного визита на борт теплохода для знакомства с интерьерами.</li>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="fl__tr reverse">
                <div class="fl__td w_800">
                    <div class="fl__sub">Комфортабельные теплоходы класса «Мойка» с открытой палубой и теплым салоном </div>

                    <div class="fl__ships">т/х «Углич», т/х «Владимир», т/х «Смоленск»,  т/х «Палех»,
                        т/х «Муром», т/х «Выборг», т/х «Ярославль», т/х «Китеж»,
                        т/х «Суздаль»
                    </div>
                </div>
                <div class="fl__td">
                    <div class="fl__sub center" >Стоимость аренды теплохода с экскурсоводом</div>
                    <div class="table_price">
                        <div class="t100">Цены сезона 2026 до 15 июня с 15 августа</div>
                        <div class="t_flex">
                            <div class="t50">
                                <div class="top">с 08:00 до 21:00<br></div>
                                <div class="bottom">18 000 р. в час</div>
                            </div>
                            <div class="t50">
                                <div class="top">с 22:00 до 02:00 <br>(Минимальный заказ 2 часа)</div>
                                <div class="bottom">22 000 р. в час<br><span>Музыкальное сопровождение</span></div>
                            </div>
                        </div>

                    </div>
                    <div class="table_price radius_0">
                        <div class="t100">Цены сезона 2026 с 15 июня до 15 августа</div>
                        <div class="t_flex">
                            <div class="t50">
                                <div class="top">с 08:00 до 21:00<br></div>
                                <div class="bottom">20 000 р. в час</div>
                            </div>
                            <div class="t50">
                                <div class="top">с 22:00 до 02:00 <br>(Минимальный заказ 2 часа)</div>
                                <div class="bottom">25 000 р. в час<br><span>Музыкальное сопровождение</span></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="fl__grey">*Для проведения фуршета предоставляется мебель и аудиосистема.<br>*Уборка оплачивается отдельно
        </div>


        <div class="desc"><p><strong>Вариант ЛАЙТ.</strong> Предлагаем отметить встречу друзей или провести небольшое корпоративное мероприятие, официальную встречу в формате «фуршет» или кофе – брейк на борту теплохода класса «Касатик».</p></div>

        <div class="fl__table">
            <div class="fl__tr">
                <div class="fl__td flw_60">
                    <img src="/storage/fleet/light-kasatik.jpg" alt="Касатик" />
                    <br/><br/>
                    <div class="__buy">
                        <a class="btn open-fancybox"
                           data-form="order_excursion"
                           data-transfer='{"excursion_id": 9}'
                           href="#"><span>Заказать аренду теплохода</span>
                        </a>
                    </div>
                    <br/>
                </div>
                <div class="fl__td flw_40">
                    <div class="fl__price_text">Преимущества</div>
                    <div class="desc">
                        <ul>
                            <li>Небольшой комфортабельный теплоход с теплым салоном и открытой палубой.</li>
                            <li>Пассажировместимость при фуршете до 10 человек.</li>
                            <li>Открытая палуба для проведения фотосессии.</li>
                            <li>Маршрут строится по стандартному варианту «Золотое кольцо Петербурга» с учетом пожеланий заказчика и оговаривается заранее.</li>
                            <li>Любая форма оплаты: наличный расчет/ карта/ безналичный расчет для юридических компаний. </li>

                        </ul>
                    </div>
                </div>
            </div>


    <div class="fl__tr reverse">
        <div class="fl__td w_800">

                    <div class="fl__sub">Комфортабельные теплоходы класса «Касатик» с открытой палубой и теплым салоном вместимостью </div>

                    <div class="fl__ships">т/х «Касатик -1», т/х «Касатик -2», т/х «Касатик -3»,
                        т/х «Касатик -4»

                    </div>
                </div>

        <div class="fl__td">
            <div class="fl__sub center" >Стоимость аренды теплохода формат «фуршет»</div>
            <div class="table_price">
                <div class="t100">Цены сезона 2026 года</div>
                <div class="t_flex">
                    <div class="t50">
                        <div class="top">с 08:00 до 21:00<br></div>
                        <div class="bottom">18 000 р. в час</div>
                    </div>
                    <div class="t50">
                        <div class="top">с 22:00 до 02:00 </div>
                        <div class="bottom">20 000 р. в час</div>
                    </div>
                </div>

            </div>
        </div>



    </div>
        </div>

        <div class="fl__grey">*Для проведения фуршета предоставляется мебель и аудиосистема.<br>*Уборка оплачивается отдельно</div>
        <br>
        <h2>Для проведения экскурсий для организованных групп мы предлагаем:</h2>

        <div class="fl__table">
            <div class="fl__tr reverse">
                <div class="fl__td w_800">
                    <div class="fl__sub">Комфортабельные теплоходы класса «Мойка» с открытой палубой и теплым салоном
                        вместимостью до 45 человек
                    </div>

                    <div class="fl__ships">т/х «Углич», т/х «Владимир», т/х «Смоленск», т/х «Палех»,
                        т/х «Муром», т/х «Выборг», т/х «Ярославль», т/х «Китеж»,
                        т/х «Суздаль», т/х «Ярославль»
                    </div>
                </div>
                <div class="fl__td">
                    <div class="fl__sub center" >Стоимость аренды теплохода с экскурсоводом</div>
                    <div class="table_price">
                        <div class="t100">Цены сезона 2026 до 15 июня с 15 августа</div>
                        <div class="t_flex">
                            <div class="t50">
                                <div class="top">с 08:00 до 21:00<br></div>
                                <div class="bottom">18 000 р. в час</div>
                            </div>
                            <div class="t50">
                                <div class="top">с 22:00 до 02:00 <br>(Минимальный заказ 2 часа)</div>
                                <div class="bottom">22 000 р. в час<br><span>Музыкальное сопровождение</span></div>
                            </div>
                        </div>

                    </div>
                    <div class="table_price radius_0">
                        <div class="t100">Цены сезона 2026 с 15 июня до 15 августа</div>
                        <div class="t_flex">
                            <div class="t50">
                                <div class="top">с 08:00 до 21:00<br></div>
                                <div class="bottom">20 000 р. в час</div>
                            </div>
                            <div class="t50">
                                <div class="top">с 22:00 до 02:00 <br>(Минимальный заказ 2 часа)</div>
                                <div class="bottom">25 000 р. в час<br><span>Музыкальное сопровождение</span></div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="fl__table">
            <div class="fl__tr reverse">
                <div class="fl__td w_800">
                    <div class="fl__sub">Комфортабельные теплоходы класса «Касатик» с открытой палубой и застекленным салоном вместимостью до 35 человек.
                    </div>

                    <div class="fl__ships">т/х «Касатик -1», т/х «Касатик -2», т/х «Касатик -3», т/х «Касатик -4»
                    </div>
                </div>
                <div class="fl__td">
                    <div class="fl__sub center" >Стоимость аренды теплохода без экскурсовода/ с экскурсоводом
                    </div>
                    <div class="table_price">
                        <div class="t100">Цены сезона 2026 года</div>
                        <div class="t_flex">
                            <div class="t50">
                                <div class="top">с 08:00 до 21:00<br></div>
                                <div class="bottom">15 000 р. в час</div>
                            </div>
                            <div class="t50">
                                <div class="top">с 22:00 до 02:00 </div>
                                <div class="bottom">20 000 р. в час</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

</div>








    </div>
</section>

{{ Breadcrumbs::render('site_excursion', $item) }}

</main>
@endsection


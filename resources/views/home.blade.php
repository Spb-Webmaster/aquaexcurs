@extends('layouts.layout')
<x-seo.meta
    title="{{ config2('moonshine.home.metatitle') }}"
    description="{{ config2('moonshine.home.description') }}"
    keywords="{{ config2('moonshine.home.keywords') }}"
/>
@section('content')

    <section class="relative pt-6">
       <x-layout.current-information />
    </section>

    <section class="relative py-18 max-sm:pt-22 max-sm:pb-6 ">
        <div class="custom-block ">

            <div class="flex flex-wrap justify-between">

                <div class="w-[49%] max-md:w-full mb-6">
                    <div class="custom-card p-0!">
                        <a href="">
                            <div style="background-image: url({{ Storage::url('images/items/1.jpg') }})"
                                 class="bg-no-repeat bg-cover bg-center rounded-t-lg  min-h-[364px] max-sm:min-h-[264px] "></div>

                            <div
                                class="min-h-[50px] bg-gradient-to-r from-[#1B5CB4] via-[#1B5CB4] to-[#03a9f4] text-white p-2 text-sm flex flex-wrap items-center">
                                Река Мойка - Зимняя канавка - река Нева - река Фонтанка - Крюков канал - река Мойка
                            </div>
                        </a>

                        <div class="pt-6 pr-6 pb-8 pl-6 ">
                            <h2 class="">
                                <a class="text-lg font-bold uppercase text-[#02356A] hover:text-[#1B5CB4]" href="#">Золотое
                                    кольцо Санкт-Петербурга</a>
                            </h2>
                            <div class="text-sm">
                                <p class="pt-3"><span class="font-bold">Причал:</span> наб. Мойки 44, наб. Мойки46, наб.
                                    Мойки 98 <br>
                                    Отправление каждые 30 минут</p>
                                <p class="p-1">Теплоход с открытой палубой и теплым салоном, Экскурсия на русском языке
                                </p>
                            </div>

                            <div class="flex justify-start items-center">
                                <div class="w-1/2 xl:w-1/3 pt-5 pb-5">
                                    <div
                                        class="text-[#1B5CB4] text-3xl font-bold">{{ price(1000) }} {{ config('currency.currency.RUB') }}</div>
                                    <div class="custom-grey text-[13px] font-thin">На
                                        причале {{ price(1500) }} {{ config('currency.currency.RUB') }}</div>
                                </div>

                                <div class="w-1/2 pt-5 pb-5">
                                    <div class="text-green-600 text-3xl font-bold">100</div>
                                    <div class="custom-grey text-[13px] font-thin">Осталось мест</div>
                                </div>
                            </div>

                            <div class="flex justify-start items-center relative">

                                <a href="#" class="w-1/2 xl:w-1/3 h-auto block"><span
                                        class="inline-block text-white bg-[#1B5CB4] transition-all ease-in-out duration-200 hover:bg-[#03a9f4]   font-light rounded-lg text-sm px-7 py-2.5 text-center max-sm:px-4 ">Купить билет</span></a>

                                <a href="#" class="w-1/2 h-auto block"><span
                                        class="inline-block  bg-[#88d220] transition-all ease-in-out duration-200 hover:bg-green-600  hover:text-white   font-light rounded-lg text-sm px-7 py-2.5 text-center max-sm:px-4">Узнать больше</span></a>

                            </div>

                        </div>

                    </div>
                </div>

                <div class="w-[49%] max-md:w-full mb-6">
                    <div class="custom-card p-0!">
                        <a href="">
                            <div style="background-image: url({{ Storage::url('images/items/2.jpg') }})"
                                 class="bg-no-repeat bg-cover bg-center rounded-t-lg  min-h-[364px] max-sm:min-h-[264px]"></div>

                            <div
                                class="min-h-[50px] bg-gradient-to-r from-[#1B5CB4] via-[#1B5CB4] to-[#03a9f4] text-white p-2 text-sm flex flex-wrap items-center">
                                Река Мойка - Зимняя канавка - река Нева - река Фонтанка - Крюков канал - река Мойка
                            </div>
                        </a>

                        <div class="pt-6 pr-6 pb-8 pl-6 ">
                            <h2 class="">
                                <a class="text-lg font-bold uppercase text-[#02356A] hover:text-[#1B5CB4]" href="#">Золотое
                                    кольцо Санкт-Петербурга</a>
                            </h2>
                            <div class="text-sm">
                                <p class="pt-3"><span class="font-bold">Причал:</span> наб. Мойки 44, наб. Мойки46, наб.
                                    Мойки 98 <br>
                                    Отправление каждые 30 минут</p>
                                <p class="p-1">Теплоход с открытой палубой и теплым салоном, Экскурсия на русском языке
                                </p>
                            </div>

                            <div class="flex justify-start items-center">
                                <div class="w-1/2 xl:w-1/3 pt-5 pb-5">
                                    <div
                                        class="text-[#1B5CB4] text-3xl font-bold">{{ price(1000) }} {{ config('currency.currency.RUB') }}</div>
                                    <div class="custom-grey text-[13px] font-thin">На
                                        причале {{ price(1500) }} {{ config('currency.currency.RUB') }}</div>
                                </div>

                                <div class="w-1/2 pt-5 pb-5">
                                    <div class="text-green-600 text-3xl font-bold">100</div>
                                    <div class="custom-grey text-[13px] font-thin">Осталось мест</div>
                                </div>
                            </div>

                            <div class="flex justify-start items-center relative">


                                <a href="" class="w-1/2 xl:w-1/3 h-auto block"><span
                                        class="inline-block text-white bg-[#1B5CB4] transition-all ease-in-out duration-200 hover:bg-[#03a9f4]   font-light rounded-lg text-sm px-7 py-2.5 text-center max-sm:px-4">Купить билет</span></a>

                                <a href="" class="w-1/2 h-auto block"><span
                                        class="inline-block  bg-[#88d220] transition-all ease-in-out duration-200 hover:bg-green-600   hover:text-white  font-light rounded-lg text-sm px-7 py-2.5 text-center max-sm:px-4">Узнать больше</span></a>

                            </div>

                        </div>

                    </div>
                </div>

                <div class="w-[49%] max-md:w-full mb-6">
                    <div class="custom-card p-0!">
                        <a href="">
                            <div style="background-image: url({{ Storage::url('images/items/3.jpg') }})"
                                 class="bg-no-repeat bg-cover bg-center rounded-t-lg  min-h-[364px] max-sm:min-h-[264px]"></div>

                            <div
                                class="min-h-[50px] bg-gradient-to-r from-[#1B5CB4] via-[#1B5CB4] to-[#03a9f4] text-white p-2 text-sm flex flex-wrap items-center">
                                Река Мойка - Зимняя канавка - река Нева - река Фонтанка - Крюков канал - река Мойка
                            </div>
                        </a>

                        <div class="pt-6 pr-6 pb-8 pl-6 ">
                            <h2 class="">
                                <a class="text-lg font-bold uppercase text-[#02356A] hover:text-[#1B5CB4]" href="#">Золотое
                                    кольцо Санкт-Петербурга</a>
                            </h2>
                            <div class="text-sm">
                                <p class="pt-3"><span class="font-bold">Причал:</span> наб. Мойки 44, наб. Мойки46, наб.
                                    Мойки 98 <br>
                                    Отправление каждые 30 минут</p>
                                <p class="p-1">Теплоход с открытой палубой и теплым салоном, Экскурсия на русском языке
                                </p>
                            </div>

                            <div class="flex justify-start items-center">
                                <div class="w-1/2 xl:w-1/3 pt-5 pb-5">
                                    <div
                                        class="text-[#1B5CB4] text-3xl font-bold">{{ price(1000) }} {{ config('currency.currency.RUB') }}</div>
                                    <div class="custom-grey text-[13px] font-thin">На
                                        причале {{ price(1500) }} {{ config('currency.currency.RUB') }}</div>
                                </div>

                                <div class="w-1/2 pt-5 pb-5">
                                    <div class="text-green-600 text-3xl font-bold">100</div>
                                    <div class="custom-grey text-[13px] font-thin">Осталось мест</div>
                                </div>
                            </div>

                            <div class="flex justify-start items-center relative">

                                <a href="" class="w-1/2 xl:w-1/3 h-auto block"><span
                                        class="inline-block text-white bg-[#1B5CB4] transition-all ease-in-out duration-200 hover:bg-[#03a9f4]   font-light rounded-lg text-sm px-7 py-2.5 text-center max-sm:px-4">Купить билет</span></a>

                                <a href="" class="w-1/2 h-auto block"><span
                                        class="inline-block  bg-[#88d220] transition-all ease-in-out duration-200 hover:bg-green-600  hover:text-white   font-light rounded-lg text-sm px-7 py-2.5 text-center max-sm:px-4">Узнать больше</span></a>


                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>


    </section>
    <section>
        <x-layout.private-excursions/>
    </section>
    <section>
        <x-layout.about-company/>
    </section>
    <section>
        <x-layout.review />
    </section>

@endsection

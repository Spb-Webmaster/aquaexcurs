    <div class="custom-block">
        <div class="flex pt-5 pb-5 max-sm:justify-between">
            <div class="w-1/3 relative flex items-center max-sm:order-2 max-sm:justify-end max-sm:w-1/2 ">
                <div class="custom-home-contacts">
                    <a class="custom-green block text-lg max-lg:text-sm hover:text-[#FF9F37]"
                       href="tel:{{ config2('moonshine.setting.phone1') }}">{{ config2('moonshine.setting.phone1') }}</a>
                    <span class="font-rambla text-lg text-white max-sm:text-sm">{{ config2('moonshine.setting.email') }}</span>
                </div>
            </div>
            <div class="w-1/3 flex items-center justify-center max-sm:order-1 max-sm:w-1/2 max-sm:justify-start">
                <x-layout.logo class="max-sm:w-[162px]!"/>
            </div>
            <div class="w-1/3 relative flex items-center justify-end max-sm:hidden">
                <x-layout.visually_impaired/>
            </div>
        </div>

    </div>
    <div class="custom-block max-lg:hidden">
        <div class="border-t border-white border-b min-h-14 text-white ">
            <x-menu.top_menu/>
        </div>
    </div>
    <div class="custom-block">
        <div class="max-w-3xl m-auto pt-8 pb-4">
            <h1 class="text-white text-center uppercase text-4xl/12 tracking-wider max-md:text-3xl/9 max-sm:text-2xl">
                <span class="font-rubik">{{ config2('moonshine.home.title1') }}</span> <span class="font-rubik custom-green">{{ config2('moonshine.home.title2') }}</span><br>
                <span class="font-roboto font-extralight">{{ config2('moonshine.home.title3') }}</span>
            </h1>
        </div>
    </div>

    <div class="custom-block">
        <div class="max-w-3xl m-auto pt-2 pb-2">
            <div class="text-center text-white text-sm/6 uppercase max-md:text-sm max-sm:text-xs/5">{{ config2('moonshine.home.subtitle') }}</div>
        </div>
    </div>


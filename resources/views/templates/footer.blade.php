<div class="relative w-full min-h-[150px] bg-gradient-to-r from-[#02356A] via-[#1B5CB4] to-[#2a6cc5] text-white">
    <div class="custom-block">

        <div class="flex pt-11 w-full max-sm:block">

            <div class="w-[30%] pr-8 max-xl:w-[60%] max-lg:w-[50%] max-sm:w-[100%]">
                <div class="relative">
                    <x-layout.logo w="150" h="56" class="max-w-[156px] h-auto"/>
                </div>

                <div class="text-sm/6 py-9 ">
                     {{ config2('moonshine.setting.slogan') }}
                </div>
            </div>
            <div class="w-[42%] pr-19  max-xl:hidden">

                <div class="h1-rubik pb-6 pt-3  text-lg/6 text-[#ffffff] ">Последние новости</div>

          <x-layout.last-news />

            </div>
            <div class="w-[28%] pl-6  max-xl:w-[40%] max-lg:w-[50%] max-sm:w-[100%] max-sm:pl-0 ">
                <div class="h1-rubik pb-6 pt-3   text-lg/6 text-[#ffffff]">Контакты</div>

                <div class="py-6 max-sm:pt-1 max-sm:pb-3">
                <div class="pb-3 text-base/7">
                    {{ config2('moonshine.setting.address_light1') }}<br class="max-sm:hidden">  {{ config2('moonshine.setting.address_light2') }}
                </div>
                <div class="flex w-full items-center gap-8">
                    <div class="text-base/7">
                        <div class="">{{ config2('moonshine.setting.email') }}</div>
                        <div class="tel:{{ config2('moonshine.setting.phone1') }}">{{ config2('moonshine.setting.phone1') }}</div>
                    </div>
                    <div class="">
                        <a href="{{ config2('moonshine.setting.vk') }}"><img alt="{{ config2('moonshine.setting.vk') }}" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzUiIGhlaWdodD0iMjEiIHZpZXdCb3g9IjAgMCAzNSAyMSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0zMy4zNDEzIDEuMzkwNUMzMi44NjY3IDMuNTkxIDI4LjMyIDEwLjA3OTEgMjguMzIgMTAuMDc5MUMyNy45MjI3IDEwLjcxOSAyNy43NjUzIDExLjA0MDMgMjguMzIgMTEuNzYxMkMyOC43MTQ3IDEyLjMyMjggMzAuMDE4NyAxMy40NDMzIDMwLjg5MDcgMTQuNDg1NUMzMi40OTMzIDE2LjMxMDcgMzMuNzAxMyAxNy44NTI0IDM0LjA0IDE4LjkxMzVDMzQuMzQ2NyAxOS45OCAzMy44MTMzIDIwLjUyIDMyLjc0NjcgMjAuNTJIMjkuMDEzM0MyNy41ODkzIDIwLjUyIDI3LjE3MzMgMTkuMzY5OCAyNC42NCAxNi44MDc1QzIyLjQyNjcgMTQuNjQ0OCAyMS40NzczIDE0LjM2NCAyMC45MjI3IDE0LjM2NEMyMC4xNzA3IDE0LjM2NCAxOS45NDY3IDE0LjU4IDE5Ljk0NjcgMTUuNjZWMTkuMDUxMkMxOS45NDY3IDE5Ljk4IDE5LjY1MzMgMjAuNTIgMTcuMjggMjAuNTJDMTMuMzI1MyAyMC41MiA4Ljk3ODY3IDE4LjA5IDUuODkzMzMgMTMuNjAyNkMxLjI2NjY3IDcuMDM2MiAwIDIuMDcwOSAwIDEuMDY5MkMwIDAuNTA3NiAwLjIxMzMzMyAwIDEuMjggMEg1LjAxMzMzQzUuOTY4IDAgNi4zMjUzMyAwLjQyMzkgNi42ODUzMyAxLjQ2ODhDOC41MDkzMyA2Ljg1NTMgMTEuNTg5MyAxMS41NjE0IDEyLjg1MzMgMTEuNTYxNEMxMy4zMjggMTEuNTYxNCAxMy41NDY3IDExLjM0IDEzLjU0NjcgMTAuMTE5NlY0LjU1MjJDMTMuNDA4IDEuOTg5OSAxMi4wNjQgMS43NzkzIDEyLjA2NCAwLjg2OTRDMTIuMDY0IDAuNDQ1NSAxMi40MjEzIDAgMTMuMDEzMyAwSDE4Ljg4QzE5LjY3MiAwIDE5Ljk0NjcgMC40MjkzIDE5Ljk0NjcgMS4zOTA1VjguODc3NkMxOS45NDY3IDkuNjc5NSAyMC4yOTA3IDkuOTYwMyAyMC41MjggOS45NjAzQzIxLjAwMjcgOS45NjAzIDIxLjM5NzMgOS42Nzk1IDIyLjI2NjcgOC43OTkzQzI0Ljk1NzMgNS43NTM3IDI2Ljg1NiAxLjA2OTIgMjYuODU2IDEuMDY5MkMyNy4wOTMzIDAuNTA3NiAyNy41MzA3IDAgMjguNDggMEgzMi4yMTMzQzMzLjM0MTMgMCAzMy41Nzg3IDAuNTg4NiAzMy4zNDEzIDEuMzkwNVoiIGZpbGw9IndoaXRlIi8+Cjwvc3ZnPgo="></a>
                    </div>
                </div>
                </div>

            </div>

        </div>

    </div>


</div>

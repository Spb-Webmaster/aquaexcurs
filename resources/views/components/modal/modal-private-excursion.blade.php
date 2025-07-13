@props([
    'id' => $id,
    'title' => $title,
    'subtitle' => $subtitle,
])
<div id="{{ $id }}"
     class="bg-[#000000]/75 hs-overlay hidden size-full fixed top-0 start-0 z-80 overflow-x-hidden overflow-y-auto pointer-events-none"
     role="dialog" tabindex="-1" aria-labelledby="book-modal-label">

    <div
        class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-56px)] flex items-center">
        <div
            class="w-full flex flex-col bg-white border border-gray-200 shadow-2xs rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">

            <div
                class="flex justify-between items-center py-4 px-4 border-b border-gray-200 dark:border-neutral-700 rounded-xl bg-gray-50">
                <div class="py-3">
                    <h3 class="h1-rubik pb-0 max-sm:text-lg">{{ $title }}</h3>
                    <h4 class="custom-grey text-base/5">{{ $subtitle }}</h4>
                </div>

                <x-form.close id="book-modal"/>

            </div>

            <div class="p-4 overflow-y-auto">


                <div class="w-full py-2">

                    <div class="relative mb-5">
                        <x-form.input name="name" :need="true" title="Имя"/>
                    </div>

                    <div class="relative mb-5">
                        <x-form.input name="phone" :need="true" title="Телефон"/>

                    </div>

                    <div class="relative mb-5">
                        <x-form.input name="email" :need="true" type="email" title="Email"/>

                    </div>

                    <div class="relative mb-5">
                        <x-form.input name="quantity"  title="Количество человек"/>

                    </div>

                    <div class="relative mb-5">
                        <x-form.textarea name="message"  title="Примечание"/>

                    </div>

                    <div class="relative">
                        <x-form.input name="flatpickr-date"   title="Выбрать дату"/>
                    </div>




                </div>

            </div>

            <div
                class="flex justify-end items-center gap-x-2 py-7 px-4 border-t border-gray-200 dark:border-neutral-700 bg-gray-50 rounded-xl">

                <x-form.button type="button">
                    Отправить
                </x-form.button>

            </div>
        </div>
    </div>
</div>


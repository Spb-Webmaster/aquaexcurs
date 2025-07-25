@props([
    'id' => $id,
    'title' => $title,
    'subtitle' => $subtitle,
    'title_response' => $titleresponse,
    'subtitle_response' => $subtitleresponse,
])
<div id="{{ $id }}"
     class="bg-[#000000]/75 hs-overlay hidden size-full fixed top-0 start-0 z-80 overflow-x-hidden overflow-y-auto pointer-events-none"
     role="dialog" tabindex="-1" aria-labelledby="book-modal-label">

    <div
        class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-56px)] flex items-center">
        <div
            class="w-full flex flex-col bg-white border border-gray-200 shadow-2xs rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">


           @livewire('form.private-excursion', ['title' => $title, 'subtitle' => $subtitle, 'title_response' => $title_response, 'subtitle_response' => $subtitle_response])



        </div>
    </div>
</div>


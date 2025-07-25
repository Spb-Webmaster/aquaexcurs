@props([
    'type' => 'button'
])
<button type="{{ $type }}"
        class="cursor-pointer inline-block text-white bg-[#1B5CB4] transition-all ease-in-out duration-200 hover:bg-[#03a9f4]   font-light rounded-lg text-lg px-8 py-2.5 text-center max-sm:px-4">
 {{  $slot  }}
</button>

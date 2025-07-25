@props([

    'name' => $name,
    'need' => false,
    'type' => 'text',
    'title' => $title

])
<input type="{{ $type }}" id="input-{{ $name }}"
       name="{{ $name }}"
       class="custom-input peer"
       placeholder="">

<label for="input-{{ $name }}" class="custom-label">{{ $title }}   @if($need)<span class="text-red-700">*</span>@endif</label>

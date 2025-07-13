@props([

    'name' => $name,
    'need' => false,
    'type' => 'text',
    'title' => $title

])
<textarea type="{{ $type }}" id="input-{{ $name }}"
       name="{{ $name }}"
       class="custom-input peer"
       placeholder=""></textarea>

<label for="input-{{ $name }}" class="custom-label">{{ $title }}   @if($need)<span class="text-red-700">*</span>@endif</label>

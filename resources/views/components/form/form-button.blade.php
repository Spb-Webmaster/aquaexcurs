@props([
    'url' => '/',
    'class' => '',
    'type' => '',
    'yandexmetrica' => ''
])
@if($type)
    <input @if($yandexmetrica) {!! html_entity_decode($yandexmetrica) !!}@endif class="btn btn-big app_form_button {{ $class }}" type="submit" value="{{ $slot }}" />
@else
    <div  @if($yandexmetrica) {!! html_entity_decode($yandexmetrica) !!}@endif  class="btn btn-big app_form_button {{ $class }}" data-url="{{ $url }}">{!! $slot !!}</div>

@endif

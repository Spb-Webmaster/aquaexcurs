@extends('html.email.layouts.layout_default_mail')
@section('title', 'Тестовое письмо')
@section('description')
    {{ $item['title'] }}<br>
@endsection
@section('content')
    <p style="word-wrap: break-word; color: #282828"><b>{{__('Тестовое письмо:')}}</b>
    </p>
    <hr style=" margin-top: 1rem; margin-bottom: 1.4rem;  border: 0; border-top: 1px solid rgba(0, 0, 0, 0.1);">
@endsection



@extends('html.email.layouts.layout_default_mail')
@section('title', 'Письмо')
@section('description')
    Письмо2<br>
@endsection
@section('content')
    <p style="word-wrap: break-word; color: #282828">
        @foreach($data['form'] as $d)

            <b>{{ $d[0] }}</b> {{ $d[1] }}<br>

        @endforeach

    </p>
    <hr style=" margin-top: 1rem; margin-bottom: 1.4rem;  border: 0; border-top: 1px solid rgba(0, 0, 0, 0.1);">

    <p style="word-wrap: break-word;"> Все письма сохранены на сервере-  <span style=" color: #29abe2"> - </span></p>
@endsection


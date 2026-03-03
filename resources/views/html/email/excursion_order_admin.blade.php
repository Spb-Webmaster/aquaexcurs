@extends('html.email.layouts.layout_default_mail')
@section('title', 'Заказ экскурсии')
@section('description')
    <span class="" style="padding-bottom: 7px; display: block; color: #00306B">
        <span style="font-size: 22px; font-weight: 600;">{{ $order->series }}  {{ $order->number }}</span> Дата: {{ rusdate3($order->excursion_date) }}</span>
    <span class="" style="display: block">
    {{ config('app.name') }} создан заказ</span><br>
@endsection
@section('content')

    @foreach($order->order['items'] as $item)

        <div class="" style="color: #282828">
            <div class="">{{ $item['human'] }} <a style="color: #3BA3D0" target="_blank" href="{{ asset(route('site_excursion', ['slug' => $order->order['slug']])) }}">{{ $order->order['title'] }}</a>
            </div>

            <div>
                <span class="">{{ $item['price'] }}</span> {{ config('currency.currency.RUB') }} x <span class="">{{ $item['count'] }}</span> чел.
            </div>

            <div class="ci_item_2"><span class="">{{ $item['total_price'] }}</span> {{ config('currency.currency.RUB') }}
            </div>
        </div>
        <div style="border-bottom: 1px dashed rgba(0, 0, 0, 0.1); width: 100%; height: 2px; margin: 5px 0 8px 0"></div>


    @endforeach
    <div class="" style="color: #282828; font-size: 19px; padding: 10px 0 16px 0" >Итого: <span>{{ $order->price }} {{ config('currency.currency.RUB') }}</span></div>
    <a target="_blank" href="{{asset(Storage::url('orders/pdf/files/'. ticketFilePDFName($order->number, $order->created_at)))}}" class="" style="    padding: 4px 16px;     color: #fff;     background: #dd3733;     font-weight: 600;    border-radius: 4px;     font-size: 19px;    margin-bottom: 20px;     display: inline-block;">Скачать PDF</a>

@endsection

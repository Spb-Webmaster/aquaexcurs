@extends('layouts.layout')
<x-seo.meta
    title="Личный кабинет"
    description="Личный кабинет"
    keywords="Личный кабинет"
/>
@section('content')
    <main class="auth">

        <section>
            <div class="block block_content ">

                <div class="window_white_wrap">
                    <div class="window_white">
                        <div class="window_white__padding">
                            <div class="window_white__title">
                                <h1 class="h1">Личный кабинет</h1>
                                <p class="_subtitle">Ваши личные данные</p>
                            </div>

                            <div class="desc">
                                <ul>
                                    <li><strong>ФИО:</strong> {{ $user->name }}</li>
                                    @if($user->username)
                                        <li><strong>Логин:</strong> {{ $user->username }}</li>
                                    @endif
                                    <li><strong>Email:</strong> {{ $user->email }}</li>
                                    @if($user->phone)
                                        <li><strong>Телефон:</strong> {{ $user->phone }}</li>
                                    @endif
                                </ul>
                            </div>

                            <x-form action="{{ route('logout') }}">
                                <div class="input-button ">
                                    <x-form.form-button class="w_100_important" type="submit">Выход</x-form.form-button>
                                </div>
                            </x-form>

                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main>
@endsection

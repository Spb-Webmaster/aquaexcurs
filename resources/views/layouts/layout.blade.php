<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="csrf-token" content="{{{ csrf_token() }}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite([
    'resources/css/app.css',
    'resources/js/app.js',
    ])
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <title>@yield('title', config('seo.seo.title'))</title>
    <meta name="description" content="@yield('description',  config('seo.seo.description'))"/>
    <meta name="keywords" content="@yield('keywords',  config('seo.seo.keywords'))"/>


</head>
<body>
<div class="flex flex-col h-screen {{route_name()}}">
    <x-message.message/>
    <x-message.message_error/>
    <header>
    @include('templates.header')
    </header>
    <main class="flex-grow">
        @yield('content')
    </main>
    <footer>
        @include('templates.footer')
    </footer>
</div>
<script src="/uhpv/js/uhpv.js" defer></script>

</body>
</html>


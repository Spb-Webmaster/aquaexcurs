<!doctype html>
<html lang="en">
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
</head>
<body>
<div class="container mx-auto relative">



<h1 class="text-center text-orange-400 text-3xl font-bold mt-15 p-4 px-0">
    Hello world!
</h1>
<button type="submit" class=" bg-orange-700 transition-colors ease-in-out
duration-200 hover:bg-amber-400 hover:animate-ping  block mx-auto rounded-2xl px-4 text-white
border border-red-600 border-solid">Click</button>
<div class="w-[100%] h-auto h-min-20 bg-pink-300 md:bg-orange-700 lg:bg-amber-950  xl:bg-[#000000]  text-white mt-10 p-6">Это размеры

<h2 class="text-white font-bold py-4 px-0  after:content-['Привет_вафля']">Content: </h2>
</div>

{{--    <div class="fixed flex items-center justify-center bg-black/50 backdrop-blur inset-0">
        <div class="absolute bg-white/80 w-1/2 p-5 rounded-2xl">
            <h1 class="text-black font-semibold">Modal window</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto at consequuntur eius enim est magni
                minima molestiae mollitia, perspiciatis unde.</p>
        </div>
    </div>--}}

</div>
</body>
</html>

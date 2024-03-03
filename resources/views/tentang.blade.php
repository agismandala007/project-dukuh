<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile Pantog Kulon</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('components/header')
    <div class="flex flex-row bg-[#f5f5f5] p-2 mx-10 text-sm items-center text-[#999999] rounded-md">
        <a href="{{ route('home') }}" class="mr-2">
            <img src="{{ asset('img/home.svg') }}" alt="" class="w-4 h-auto"></a>
        <p class="mr-2">/</p>
        <a href="{{ route('tentang') }}">Tentang Kami</a>
    </div>

    <div>
        <h2 class="text-3xl font-bold">Tentang Pantog Kulon</h2>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus sed nam expedita exercitationem hic aperiam eum rerum qui nisi reiciendis aut, quis dignissimos molestias culpa architecto itaque nulla nostrum aliquid.
        </p>
    </div>

</body>

</html>
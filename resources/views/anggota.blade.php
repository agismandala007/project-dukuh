<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('img/logo-dukuh.png') }}">
    <title>Anggota Pantog Kulon</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('components/header')

    <div class="min-h-[800px] mx-10">
        <div class="flex flex-row bg-[#f5f5f5] p-2 text-sm items-center text-[#999999] rounded-md">
            <a href="{{ route('home') }}" class="mr-2">
                <img src="{{ asset('img/home.svg') }}" alt="" class="w-4 h-auto"></a>
            <p class="mr-2">/</p>
            <a href="{{ route('anggota') }}">Stuktur Padukuhan</a>
        </div>

        <div>
            <h1 class="font-semibold text-xl lg:text-2xl mt-5">Stuktur Padukuhan</h1>
            <div class="bg-[#0088cc] rounded-md h-1 my-2 lg:my-3"></div>
        </div>

        <div class="flex flex-wrap h-fit">
            @foreach ($data as $item)
            <a href="{{ route('anggota.show', ['id' => $item->id]) }}" class="aspect-square w-60 mx-auto lg:ml-0 lg:mr-5 mb-5 hover:bg-slate-200 hover:ring-2 relative">
                <img src="{{ asset('storage/' . $item->gambar) }}"
                    class="h-full w-full object-center object-cover rounded-md" alt="">
                <p
                    class="absolute bottom-0 text-xs truncate lg:text-base font-bold w-full bg-[#0276cf] text-white text-center p-1 lg:p-3 rounded-md">
                    {{$item->nama}}</p>
            </a>
            @endforeach

        </div>

    </div>

    @include('components/footer')
</body>

</html>
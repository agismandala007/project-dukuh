<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('img/logo-dukuh.png') }}">
    <title>{{ $data[0]->nama }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('components/header')

    <div class="min-h-[800px] mx-10">
        <div class="flex flex-row bg-[#f5f5f5] p-2 text-sm items-center text-[#999999] rounded-md">
            <a href="{{ route('home') }}" class="mr-2">
                <img src="{{ asset('img/home.svg') }}" alt="" class="w-4 h-auto"></a>
            <p class="mr-2">/</p>
            <a href="{{ route('berita') }}" class="mr-2">Berita</a>
            <p class="mr-2">/</p>
            <a href="{{ route('berita.show', ['id' => $data[0]->id]) }}">{{ $data[0]->judul }}</a>
        </div>

        <div class="flex flex-col my-5 h-fit">
            <div class="grid grid-cols-1 lg:grid-cols-[3fr_1fr] w-full">
                <h2 class="font-semibold text-2xl lg:text-3xl">{{ $data[0]->judul }}</h2>
                <div class="flex flex-row justify-end items-center">
                    <p class="font-extralight">dibuat pada: {{ $data[0]->created_at }}</p>
                </div>
            </div>
            
            <img src="{{ asset('storage/' . $data[0]->gambar) }}" class="h-auto w-full object-center object-cover my-4"
                alt="{{ $data[0]->judul }}">
            <p class="text-justify indent-9 break-all">{{ $data[0]->deskripsi }}</p>
        </div>

    </div>

    @include('components/footer')
</body>

</html>
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

    @php
    use Carbon\Carbon;
    @endphp


    <div class="min-h-[800px] mx-10">
        <div class="flex flex-row bg-[#f5f5f5] p-2 text-sm items-center text-[#999999] rounded-md">
            <a href="{{ route('home') }}" class="mr-2">
                <img src="{{ asset('img/home.svg') }}" alt="" class="w-4 h-auto"></a>
            <p class="mr-2">/</p>
            <a href="{{ route('agenda') }}" class="mr-2">Agenda Kegiatan</a>
            <p class="mr-2">/</p>
            <a href="{{ route('agenda.show', ['id' => $data[0]->nama]) }}">{{ $data[0]->nama }}</a>
        </div>

        <div class="flex flex-col my-5 h-fit">
            <h2 class="font-semibold text-2xl lg:text-3xl mb-4">{{ $data[0]->nama }}</h2>
            <div class="flex flex-row justify-between lg:justify-normal text-sm lg:text-base my-3">
                <div class="flex grid-cols-2 border">
                    <img src="{{ asset('img/location.svg') }}" alt="lokasi-icon" class="mr-1 h-5 w-auto">
                    <p>{{ $data[0]->lokasi }}</p>
                </div>

                <div class="flex flex-row ml-5">
                    <img src="{{ asset('img/clock.svg') }}" alt="jam-icon" class="mr-1 h-5 w-auto">
                    <p>{{ Carbon::parse($data[0]->tanggal_kegiatan)->format('Y M d') }}</p>
                </div>
            </div>
            <p class="text-justify indent-9 break-all">{{ $data[0]->deskripsi }}</p>
        </div>

    </div>

    @include('components/footer')
</body>

</html>
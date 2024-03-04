<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agenda Kegiatan</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('components/header')

    <div class="min-h-[800px] mx-10">
        <div class="flex flex-row bg-[#f5f5f5] p-2 text-sm items-center text-[#999999] rounded-md">
            <a href="{{ route('home') }}" class="mr-2">
                <img src="{{ asset('img/home.svg') }}" alt="" class="w-4 h-auto"></a>
            <p class="mr-2">/</p>
            <a href="{{ route('agenda') }}">Agenda Kegiatan</a>
        </div>

        <div class="my-5">
            <h1 class="font-semibold text-xl lg:text-2xl">Agenda Kegiatan</h1>
            <div class="bg-[#0088cc] rounded-md h-1 my-2 lg:my-3"></div>

            <div class="grid grid-cols-1 gap-5 h-fit">
                @foreach ($data as $item)
                <a href="{{ route('agenda.show', ['id' => $item->id]) }}" class="hover:bg-slate-100 rounded-lg p-3">
                    <h2 class="font-semibold text-xl lg:text-2xl mb-2">{{ $item->nama }}</h2>
                    <div class="flex flex-row justify-between lg:justify-normal text-sm lg:text-base">
                        <div class="flex flex-row">
                            <img src="{{ asset('img/location.svg') }}" alt="" class="mr-1">
                            <p>{{ $item->lokasi }}</p>
                        </div>

                        <div class="flex flex-row ml-5">
                            <img src="{{ asset('img/clock.svg') }}" alt="" class="mr-1">
                            <p>{{ $item->tanggal_kegiatan }}</p>
                        </div>
                    </div>
                    <p class="text-justify indent-9 break-all">{{ $item->deskripsi }}</p>
                </a>
                @endforeach
            </div>

            <div class="my-5">
                {{ $data }}
            </div>
        </div>

    </div>

    @include('components/footer')
</body>

</html>
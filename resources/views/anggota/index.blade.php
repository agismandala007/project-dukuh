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
            <a href="{{ route('anggota') }}" class="mr-2">Stuktur Padukuhan</a>
            <p class="mr-2">/</p>
            <a href="{{ route('anggota.show', ['id' => $data[0]->id]) }}">{{ $data[0]->nama }}</a>
        </div>

        <div class="flex flex-col my-5 h-fit">
            <h2 class="font-semibold text-2xl lg:text-3xl">{{ $data[0]->nama }}</h2>

            <div class="grid grid-cols-[1fr_2fr] gap-5 py-4">
                <img src="{{ asset('storage/' . $data[0]->gambar) }}" class="h-auto w-full object-center object-cover"
                alt="{{ $data[0]->judul }}">
                <div>
                    <table class="border">
                        <tr class="border-b">
                            <td class="py-3 px-3">Nama</td>
                            <td class="py-3 px-3">:</td>
                            <td class="py-3 px-3 w-full">{{$data[0]->nama}}</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3 px-3">NIP</td>
                            <td class="py-3 px-3">:</td>
                            <td class="py-3 px-3 w-full">{{$data[0]->nip}}</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3 px-3">Jabatan</td>
                            <td class="py-3 px-3">:</td>
                            <td class="py-3 px-3 w-full">{{$data[0]->jabatan}}</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-3"><div class="h-9"></div></td>
                        </tr>
                        <tr class="bg-slate-200 w-full font-light text-sm">
                            <td colspan="3" class="py-3 px-3">*)last updated: {{$data[0]->updated_at}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="flex flex-col my-5 h-fit">
            <div class="grid grid-cols-1 lg:grid-cols-[3fr_1fr] w-full">
                
                <div class="flex flex-row justify-end items-center">
                    
                </div>
            </div>
            
            
            
        </div>

    </div>

    @include('components/footer')
</body>

</html>
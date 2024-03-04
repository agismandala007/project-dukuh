<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berita Pantog Kulon</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('components/header')

    <div class="min-h-[800px] mx-10">
        <div class="flex flex-row bg-[#f5f5f5] p-2 text-sm items-center text-[#999999] rounded-md">
            <a href="{{ route('home') }}" class="mr-2">
                <img src="{{ asset('img/home.svg') }}" alt="" class="w-4 h-auto"></a>
            <p class="mr-2">/</p>
            <a href="{{ route('berita') }}">Berita</a>
        </div>

        <div class="my-5">
            <h1 class="font-semibold text-xl lg:text-2xl">Berita Terkini</h1>
            <div class="bg-[#0088cc] rounded-md h-1 my-2 lg:my-3"></div>
  
            <div class="grid grid-cols-[144px_1fr] gap-5 h-fit mt-5">
              <img src="{{ asset('img/village-3.png') }}" class="h-auto w-36 object-center object-cover" alt="">
              <div>
                <h2 class="font-semibold text-base lg:text-1xl">Judul</h2>
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto rem nesciunt esse
                  ab ratione! Nobis
                  soluta dignissimos qui esse molestias beatae minus, amet eos debitis voluptatem assumenda earum totam.
                  Dolorum!</p>
              </div>
            </div>
  
            <div class="grid grid-cols-[144px_1fr] gap-5 h-fit mt-5">
              <img src="{{ asset('img/village-3.png') }}" class="h-auto w-36 object-center object-cover" alt="">
              <div>
                <h2 class="font-semibold text-base lg:text-1xl">Judul</h2>
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto rem nesciunt esse
                  ab ratione! Nobis
                  soluta dignissimos qui esse molestias beatae minus, amet eos debitis voluptatem assumenda earum totam.
                  Dolorum!</p>
              </div>
            </div>
          </div>

    </div>

    @include('components/footer')
    
</body>
</html>
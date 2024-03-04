<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galeri</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('components/header')

    <div class="min-h-[800px] mx-10">
        <div class="flex flex-row bg-[#f5f5f5] p-2 text-sm items-center text-[#999999] rounded-md">
            <a href="{{ route('home') }}" class="mr-2">
                <img src="{{ asset('img/home.svg') }}" alt="" class="w-4 h-auto"></a>
            <p class="mr-2">/</p>
            <a href="{{ route('galeri') }}">Galeri</a>
        </div>

        <div>
            <h1 class="font-semibold text-xl lg:text-2xl mt-5">Galeri & Foto</h1>
            <div class="bg-[#0088cc] rounded-md h-1 my-2 lg:my-3"></div>
          </div>
  
          <div class="flex flex-wrap h-fit">
            <img src="{{ asset('img/village-3.png') }}" class="h-auto w-60 object-center object-cover mx-auto lg:ml-0 lg:mr-5 mb-5 rounded-md" alt="">
            <img src="{{ asset('img/village-3.png') }}" class="h-auto w-60 object-center object-cover mx-auto lg:ml-0 lg:mr-5 mb-5 rounded-md" alt="">
            <img src="{{ asset('img/village-3.png') }}" class="h-auto w-60 object-center object-cover mx-auto lg:ml-0 lg:mr-5 mb-5 rounded-md" alt="">
            <img src="{{ asset('img/village-3.png') }}" class="h-auto w-60 object-center object-cover mx-auto lg:ml-0 lg:mr-5 mb-5 rounded-md" alt="">
            <img src="{{ asset('img/village-3.png') }}" class="h-auto w-60 object-center object-cover mx-auto lg:ml-0 lg:mr-5 mb-5 rounded-md" alt="">
            <img src="{{ asset('img/village-3.png') }}" class="h-auto w-60 object-center object-cover mx-auto lg:ml-0 lg:mr-5 mb-5 rounded-md" alt="">
        
        </div>

    </div>

    @include('components/footer')
</body>

</html>
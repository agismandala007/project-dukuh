<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/png" href="{{ asset('img/logo-dukuh.png') }}">
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

      @foreach ($data as $item)
      <a href="{{ route('berita.show', ['id' => $item->id]) }}"
        class="grid grid-cols-[144px_1fr] gap-5 h-fit py-2 my-3 rounded-lg hover:bg-slate-200">
        <img src="{{ asset('storage/' . $item->gambar) }}" class="h-auto w-36 object-center object-cover"
          alt="{{ $item->judul }}">
        <div class="max-w-sm lg:max-w-screen-lg">
          <h2 class="font-semibold text-base lg:text-1xl">{{ $item->judul }}</h2>
          <p class="truncate whitespace-normal h-32">{{ $item->deskripsi }}</p>
        </div>
      </a>
      @endforeach

    </div>
    <div class="my-5">
      {{ $data }}
    </div>
  </div>

  @include('components/footer')

</body>

</html>
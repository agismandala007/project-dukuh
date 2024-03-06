<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="{{ asset('img/logo-dukuh.png') }}">
  <title>Padukuhan Watog Kulon</title>

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
  @include('components/header')

  @php
  use Carbon\Carbon;
  @endphp

  <div>
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
      <div class="relative h-56 overflow-hidden md:h-96">
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{ asset('img/village-1.png') }}"
            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{ asset('img/village-2.png') }}"
            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{ asset('img/village-3.png') }}"
            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{ asset('img/village-1.png') }}"
            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{ asset('img/village-1.png') }}"
            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
      </div>
      <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
          data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
          data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
          data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
          data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
          data-carousel-slide-to="4"></button>
      </div>
      <button type="button"
        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-prev>
        <span
          class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M5 1 1 5l4 4" />
          </svg>
          <span class="sr-only">Previous</span>
        </span>
      </button>
      <button type="button"
        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-next>
        <span
          class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="m1 9 4-4-4-4" />
          </svg>
          <span class="sr-only">Next</span>
        </span>
      </button>
    </div>

    <div class="grid grid-cols-1 gap-5 lg:grid-cols-[2fr_1fr] my-5 w-full">
      <div class="px-5">
        <div class="w-full">
          <h1 class="font-semibold text-xl lg:text-2xl">Berita Terkini</h1>
          <div class="bg-[#0088cc] rounded-md h-1 my-2 lg:my-3"></div>

          @foreach ($berita as $item)
          <a href="{{ route('berita.show', ['id' => $item->id]) }}" class="grid grid-cols-[144px_1fr] gap-5 h-fit py-2 my-3 rounded-lg hover:bg-slate-200">
            <img src="{{ asset('storage/' . $item->gambar) }}" class="h-auto w-36 object-center object-cover"
              alt="{{ $item->judul }}">
            <div class="max-w-xs lg:max-w-prose">
              <h2 class="font-semibold text-base lg:text-1xl">{{ $item->judul }}</h2>
              <p class="truncate whitespace-normal h-32">{{ $item->deskripsi }}</p>
            </div>
          </a>
          @endforeach
        </div>

        <div>
          <h1 class="font-semibold text-xl lg:text-2xl mt-5">Galeri/Album</h1>
          <div class="bg-[#0088cc] rounded-md h-1 my-2 lg:my-3"></div>
        </div>

        <div class="grid grid-cols-3 w-full gap-5 h-fit">
          @foreach ($galeri as $item)
          <div class="aspect-square relative">
            <img src="{{ asset('storage/' . $item->gambar) }}" class="w-full h-full object-center object-cover" alt="">
            <p class="absolute bottom-0 text-xs truncate lg:text-base font-bold w-full bg-[#0276cf] text-white text-center p-1 lg:p-3">{{$item->nama}}</p>
          </div>
          @endforeach
        </div>
      </div>

      <div class="px-5 h-auto w-full">
        <div>
          <h1 class="font-semibold text-xl lg:text-2xl">Agenda Kegiatan</h1>
          <div class="bg-[#0088cc] rounded-md h-1 my-2 lg:my-3"></div>
          @foreach ($agenda as $item)
          <div class="my-5">
            <a href="{{ route('agenda.show', ['id' => $item->id]) }}" class="w-full h-full">
              <div class="grid grid-cols-[1fr_4fr] gap-5 w-full hover:bg-slate-200">
                <div class="bg-[#0088cc] text-white p-5 font-semibold rounded-md text-center">
                  <p>{{ Carbon::parse($item->tanggal_kegiatan)->format('Y M d') }}</p>
                </div>
                <div class="">
                  <h2 class="text-xl font-semibold text-[#0088cc]">{{ $item->nama }}</h2>
                  <p class="text-base">Lokasi : {{ $item->lokasi }}</p>
                </div>
              </div>
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-[2fr_1fr] my-10 px-5">
      <div>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15816.561555109225!2d110.23627830023555!3d-7.668052306995701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7af48df458c877%3A0x91e301a8e22bebc!2sPantok%20Kulon%2C%20Banjaroyo%2C%20Kec.%20Kalibawang%2C%20Kabupaten%20Kulon%20Progo%2C%20Daerah%20Istimewa%20Yogyakarta!5e0!3m2!1sid!2sid!4v1709318730090!5m2!1sid!2sid"
          class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <div class="px-5 py-5 lg:py-0 text-base">
        <table>
          <tr>
            <td>Kode PUM</td>
            <td>:</td>
            <td>3217082001</td>
          </tr>

          <tr>
            <td>Tahun Pembentukan</td>
            <td>:</td>
            <td>1966</td>
          </tr>

          <tr>
            <td>Dasar Hukum</td>
            <td>:</td>
            <td>141.1/KEP.18-PEM/1966</td>
          </tr>

          <tr>
            <td>Tipologi</td>
            <td>:</td>
            <td>PERINDUSTRIAN/JASA</td>
          </tr>

          <tr>
            <td>Klasifikasi</td>
            <td>:</td>
            <td>SWAKARYA</td>
          </tr>

          <tr>
            <td>Kategori</td>
            <td>:</td>
            <td>Mula</td>
          </tr>

          <tr>
            <td>Luas Wilayah</td>
            <td>:</td>
            <td>305.28 ha</td>
          </tr>

          <tr>
            <td>Kategori</td>
            <td>:</td>
            <td>Mula</td>
          </tr>

          <tr>
            <td>Batas Sebelah Utara</td>
            <td>:</td>
            <td>Desa Utara</td>
          </tr>

          <tr>
            <td>Batas Sebelah Selatan</td>
            <td>:</td>
            <td>Desa Selatan</td>
          </tr>

          <tr>
            <td>Batas Sebelah Timur</td>
            <td>:</td>
            <td>Desa Timur</td>
          </tr>

          <tr>
            <td>Batas Sebelah Barat</td>
            <td>:</td>
            <td>Desa Barat</td>
          </tr>
        </table>
      </div>

    </div>
  </div>

  @include('components/footer')
</body>

</html>
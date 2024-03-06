<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('img/logo-dukuh.png') }}">
    <title>Visi dan Misi Padukuhan Watog Kulon</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('components/header')

    <div class="min-h-[800px] mx-10">
        <div class="flex flex-row bg-[#f5f5f5] p-2 text-sm items-center text-[#999999] rounded-md">
            <a href="{{ route('home') }}" class="mr-2">
                <img src="{{ asset('img/home.svg') }}" alt="" class="w-4 h-auto"></a>
            <p class="mr-2">/</p>
            <a href="{{ route('visi.misi') }}">Visi Misi Pantog Kulon</a>
        </div>

        <div class="my-5">
            <div class="mb-5">
                <div class="flex flex-row w-fit mx-auto text-2xl lg:text-3xl font-bold lg:font-extrabold mb-1 lg:mb-2">
                    <dt class="w-fit">Visi</dt>
                    <dt class="ml-2 w-fit ">Misi</dt>
                    <dt class="ml-2 w-fit ">Pantog</dt>
                    <dt class="ml-2 w-fit text-teal-500">Kulon</dt>
                </div>
                <p class="text-base mt-2 w-full indent-9 break-all">Lorem, ipsum dolor sit amet consectetur
                    adipisicing elit. Laudantium ipsa voluptatibus tempora enim laboriosam pariatur sit dolores
                    doloribus commodi, quisquam dolore? Repellat, at perspiciatis fugiat minus doloribus delectus illum
                    odit? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, optio! Doloremque
                    provident
                    delectus fugit modi, ipsam laboriosam cum consequatur est at, iusto quidem quibusdam blanditiis
                    dolorem
                    cupiditate et illum quod.</p>
            </div>

            <div class="mb-5">
                <h3 class="w-fit text-base lg:text-xl font-semibold lg:font-bold mb-1 lg:mb-2">Apa itu Visi Calon Kepala Dukuh?</h3>
                <p class="lg:text-base mt-2 w-full break-all text-sm">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus sed nam expedita exercitationem
                    hic
                    aperiam eum rerum qui nisi reiciendis aut, quis dignissimos molestias culpa architecto itaque nulla
                    nostrum aliquid. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur, ducimus
                    voluptatibus! Ab magni placeat ipsam, laboriosam ipsum atque maxime quae itaque expedita vitae animi
                    accusantium, laborum nam doloremque vel! Consequuntur?
                </p>
            </div>

            <div class="mb-5">
                <h3 class="w-fit text-base lg:text-xl font-semibold lg:font-bold mb-1 lg:mb-2">Apa itu Misi Calon Kepala Dukuh?</h3>
                <p class="lg:text-base mt-2 w-full break-all text-sm">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus sed nam expedita exercitationem
                    hic
                    aperiam eum rerum qui nisi reiciendis aut, quis dignissimos molestias culpa architecto itaque nulla
                    nostrum aliquid. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur, ducimus
                    voluptatibus! Ab magni placeat ipsam, laboriosam ipsum atque maxime quae itaque expedita vitae animi
                    accusantium, laborum nam doloremque vel! Consequuntur?
                </p>
            </div>
        </div>

    </div>

    @include('components/footer')
</body>
</html>
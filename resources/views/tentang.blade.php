<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('img/logo-dukuh.png') }}">
    <title>Profile Pantog Kulon</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('components/header')

    <div class="min-h-[800px] mx-10">
        <div class="flex flex-row bg-[#f5f5f5] p-2 text-sm items-center text-[#999999] rounded-md">
            <a href="{{ route('home') }}" class="mr-2">
                <img src="{{ asset('img/home.svg') }}" alt="" class="w-4 h-auto"></a>
            <p class="mr-2">/</p>
            <a href="{{ route('tentang') }}">Tentang Kami</a>
        </div>

        <div class="my-5">
            <div class="mb-5">
                <div class="flex flex-row w-fit mx-auto text-2xl lg:text-3xl font-bold lg:font-extrabold mb-1 lg:mb-2">
                    <dt class="w-fit">Tentang</dt>
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
                <div class="flex flex-row w-fit text-base lg:text-xl font-semibold lg:font-bold mb-1 lg:mb-2">
                    <dt class="w-fit">Tujuan</dt>
                    <dt class="ml-2 w-fit ">Pantog</dt>
                    <dt class="ml-2 w-fit text-teal-500">Kulon</dt>
                </div>
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
                <div class="flex flex-row w-fit text-base lg:text-xl font-semibold lg:font-bold mb-1 lg:mb-2">
                    <dt class="w-fit">Ruang</dt>
                    <dt class="ml-2 w-fit ">Lingkup</dt>
                    <dt class="ml-2 w-fit ">Pantog</dt>
                    <dt class="ml-2 w-fit text-teal-500">Kulon</dt>
                </div>
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
                <div class="flex flex-row w-fit text-base lg:text-xl font-semibold lg:font-bold mb-1 lg:mb-2">
                    <dt class="w-fit">Fungsi</dt>
                    <dt class="ml-2 w-fit ">Pantog</dt>
                    <dt class="ml-2 w-fit text-teal-500">Kulon</dt>
                </div>
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
                <div class="flex flex-row w-fit text-base lg:text-xl font-semibold lg:font-bold mb-1 lg:mb-2">
                    <dt class="w-fit">Manfaat</dt>
                    <dt class="ml-2 w-fit ">Pantog</dt>
                    <dt class="ml-2 w-fit text-teal-500">Kulon</dt>
                </div>
                <p class="lg:text-base mt-2 w-full break-all text-sm">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus sed nam expedita exercitationem
                    hic
                    aperiam eum rerum qui nisi reiciendis aut, quis dignissimos molestias culpa architecto itaque nulla
                    nostrum aliquid.
                </p>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
            <div class="w-full h-fit relative">
                <div class="px-5">
                    <h1 class="font-semibold text-xl lg:text-2xl">Kantor</h1>
                    <div class="absolute bottom-0 left-0 w-1 h-full bg-[#0088cc]"></div>

                    <h3>Desa Kertamulya - Padalarang - Bandung Barat</h3>
                    <div class="px-5 py-5 lg:py-0 text-sm lg:text-base">
                        <table>
                            <tr class="border-b-2 lg:border-b-0">
                                <td class="align-text-top px-1">Alamat</td>
                                <td class="align-text-top px-1">:</td>
                                <td class="align-text-top px-1">Jl. Raya Tagog No. 128 Padalarang</td>
                            </tr>

                            <tr class="border-b-2 lg:border-b-0">
                                <td class="align-text-top px-1">Kode Pos</td>
                                <td class="align-text-top px-1">:</td>
                                <td class="align-text-top px-1">40553</td>
                            </tr>

                            <tr class="border-b-2 lg:border-b-0">
                                <td class="align-text-top px-1">No. Telp</td>
                                <td class="align-text-top px-1">:</td>
                                <td class="align-text-top px-1">022-6623181</td>
                            </tr>

                            <tr class="border-b-2 lg:border-b-0"> 
                                <td class="align-text-top px-1">FAX</td>
                                <td class="align-text-top px-1">:</td>
                                <td class="align-text-top px-1">N/A</td>
                            </tr>

                            <tr class="border-b-2 lg:border-b-0">
                                <td class="align-text-top px-1">Email</td>
                                <td class="align-text-top px-1">:</td>
                                <td class="align-text-top px-1">pemdes@kertamulya-padalarang.desa.id</td>
                            </tr>

                            <tr>
                                <td class="align-text-top px-1">Website</td>
                                <td class="align-text-top px-1">:</td>
                                <td class="align-text-top px-1">kertamulya-padalarang.desa.id</td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>

            <div class="w-full h-fit mb-5">
                <div>
                    <h1 class="font-semibold text-xl lg:text-2xl">Kepala Desa</h1>
                    <div class="bg-[#0088cc] rounded-md h-1 my-2 lg:my-3"></div>
                    <div class="flex flex-row">
                        <img src="{{ asset('storage/' . $data[0]->gambar ) }}" alt="foto-{{ $data[0]->nama }}"
                            class="h-auto lg:h-56 w-1/3 object-center object-cover">
                        <div class="px-5 py-5 lg:py-0 text-base">
                            <table>
                                <tr class="border-b-2 lg:border-b-0">
                                    <td class="align-text-top px-1">Nama</td>
                                    <td class="align-text-top px-1">:</td>
                                    <td class="align-text-top px-1">{{ $data[0]->nama }}</td>
                                </tr>

                                <tr class="border-b-2 lg:border-b-0">
                                    <td class="align-text-top px-1">NIP</td>
                                    <td class="align-text-top px-1">:</td>
                                    <td class="align-text-top px-1">{{ $data[0]->nip }}</td>
                                </tr>

                                <tr>
                                    <td class="align-text-top px-1">Jabatan</td>
                                    <td class="align-text-top px-1">:</td>
                                    <td class="align-text-top px-1">{{ $data[0]->jabatan }}</td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    @include('components/footer')
</body>

</html>
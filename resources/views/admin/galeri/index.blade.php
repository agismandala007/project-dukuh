<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Pantog Kulon</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>
    @include('components.admin.header')

    <div class="p-4 sm:ml-64">
        <div class="p-4 border-gray-200 rounded-lg mt-14">
            <div class="grid grid-cols-1 gap-5 h-auto mb-4 ">
                <div class="relative overflow-x-auto h-fit rounded bg-gray-50 p-3">
                    <table class="w-full text-sm text-left">
                        <tr class="bg-slate-100">
                            <th scope="col" class="px-6 py-6 border">Nama</th>
                            <th scope="col" class="px-6 py-6 border">Gambar</th>
                            <th scope="col" class="px-6 py-6 border">Ubah</th>
                        </tr>
                        @foreach ($data as $item)
                        <tr class="bg-white">
                            <td class="px-6 py-6 border">{{ $item->nama }}</td>
                            <td class="px-6 py-6 border"><img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="h-auto w-36 object-center object-cover"></td>
                            <td class="px-6 py-6 border">
                                <div class="flex flex-col lg:flex-row justify-center">
                                    <a href="{{ route('admin.galeri.edit', ['id' => $item->id]) }}"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">Update</a>
                                    <form action="{{ route('admin.galeri.delete', ['id' => $item->id]) }}"
                                        method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit"
                                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-6 py-2.5 me-2 mb-2">
                                            Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <div class="my-5">
                        {{ $data }}
                    </div>
                    <div>
                        <a href="{{ route('admin.galeri.input') }}"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">Tambah
                            Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
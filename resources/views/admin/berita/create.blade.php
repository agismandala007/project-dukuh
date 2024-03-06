<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Berita</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>
    @include('components.admin.header')

    <div class="flex flex-col gap-8 p-4 mx-auto mt-14">
        <div class="block w-full lg:w-3/6 mx-auto p-6 bg-white border border-gray-200 rounded-lg shadow">
            <form class="mx-auto" action="{{ route('admin.berita.store') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="mb-5">
                    <label for="judul" class="block mb-2 text-sm font-medium text-gray-900">Judul</label>
                    <input type="text" id="judul" name="judul"
                        class="form-input  @error('judul') border-red-500 @enderror" value="{{ old('judul') }}" />
                    @error('judul')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 @error('deskripsi') is-invalid @enderror">{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="gambar">Upload Gambar</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none @error('gambar') is-invalid @enderror"
                        id="gambar" name="gambar" type="file">
                    @error('gambar')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <a href="{{ route('admin.berita') }}"
                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-3 me-2 mb-2">Batal</a>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-auto px-5 py-2.5 text-center">Tambah
                    Data</button>
            </form>
        </div>
    </div>
</body>

</html>
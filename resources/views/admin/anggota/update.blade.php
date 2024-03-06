<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubah {{ $data[0]->judul }}</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>
    @include('components.admin.header')

    <div class="flex flex-col gap-8 p-4 mx-auto mt-14">
        <div class="block w-full lg:w-3/6 mx-auto p-6 bg-white border border-gray-200 rounded-lg shadow">
            <form class="mx-auto" action="{{ route('admin.anggota.update', ['id' => $data[0]->id]) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="mb-5">
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                    <input type="text" id="nama" name="nama"
                        class="form-input  @error('nama') border-red-500 @enderror" value="{{ old('nama') ?: $data[0]->nama }}" />
                    @error('nama')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="nip" class="block mb-2 text-sm font-medium text-gray-900">NIP</label>
                    <input type="number" id="nip" name="nip"
                        class="form-input  @error('nip') border-red-500 @enderror" value="{{ old('nip') ?: $data[0]->nip }}" />
                    @error('nip')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="jabatan" class="block mb-2 text-sm font-medium text-gray-900">Jabatan</label>
                    <input type="text" id="jabatan" name="jabatan"
                        class="form-input  @error('jabatan') border-red-500 @enderror" value="{{ old('jabatan') ?: $data[0]->jabatan }}" />
                    @error('jabatan')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="gambar">Upload Gambar</label>
                    <input type="hidden" name="oldImage" id="oldImage" value="{{ $data[0]->gambar }}">
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none @error('gambar') is-invalid @enderror"
                        id="gambar" name="gambar" type="file">
                    @error('gambar')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <a href="{{ route('admin.anggota') }}"
                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-3 me-2 mb-2">Batal</a>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-auto px-5 py-2.5 text-center">Ubah
                    Data</button>
            </form>
        </div>
    </div>
</body>

</html>
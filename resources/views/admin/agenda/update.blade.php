<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubah {{$data[0]->nama}}</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>
    @include('components.admin.header')

    <div class="flex flex-col gap-8 p-4 mx-auto mt-14">
        <div class="block w-full lg:w-3/6 mx-auto p-6 bg-white border border-gray-200 rounded-lg shadow">
            <form class="mx-auto" action="{{ route('admin.agenda.update', ['id' => $data[0]->id]) }}" method="post">
                @csrf
                <div class="mb-5">
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-input  @error('nama') border-red-500 @enderror"
                        value="{{ old('nama') ?: $data[0]->nama }}" />
                    @error('nama')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="tanggal_kegiatan" class="block mb-2 text-sm font-medium text-gray-900">Tanggal
                        Kegiatan {{$data[0]->tanggal_kegiatan}} </label>
                        <input type="date" name="tanggal_kegiatan" id="tanggal_kegiatan"
                        class="block form-input @error('tanggal_kegiatan') border-red-500 @enderror"
                        value="{{ old('tanggal_kegiatan', $data[0]->tanggal_kegiatan ?? date('Y-m-d')) }}">
                    @error('tanggal_kegiatan')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="lokasi" class="block mb-2 text-sm font-medium text-gray-900">Lokasi</label>
                    <input type="text" id="lokasi" name="lokasi"
                        class="form-input  @error('lokasi') border-red-500 @enderror" value="{{ old('lokasi') ?: $data[0]->lokasi }}" />
                    @error('lokasi')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-5">
                    <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 @error('deskripsi') is-invalid @enderror">{{ old('deskripsi') ?: $data[0]->deskripsi }}</textarea>
                    @error('deskripsi')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <a href="{{ route('admin.agenda') }}"
                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-3 me-2 mb-2">Batal</a>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-auto px-5 py-2.5 text-center">Tambah
                    Data</button>
            </form>
        </div>
    </div>
</body>

</html>
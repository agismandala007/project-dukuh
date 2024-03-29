<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubah Data {{ $data[0]->nama }}</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>
    @include('components.admin.header')

    <div class="flex flex-col gap-8 p-4 mx-auto mt-14">
        <div class="block w-full lg:w-3/6 mx-auto p-6 bg-white border border-gray-200 rounded-lg shadow">
            <form class="mx-auto" action="{{ route('admin.demografis.update', ['id' => $data[0]->id]) }}" method="post">
                @csrf
                <div class="mb-5">
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                    <input type="text" id="nama" name="nama"
                        class="form-input @error('nama') border-red-500 @enderror"
                        value="{{ old('nama') ?: $data[0]->nama}}" />
                    @error('nama')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="rt" class="block mb-2 text-sm font-medium text-gray-900">RT</label>
                    <select id="rt" name="rt"
                        class="form-input block @error('rt') border-red-500 @enderror">
                        <option value="" selected>Pilih RT</option>
                        @foreach (['21', '22', '23', '24'] as $item)
                        @if (old('rt') ?: $data[0]->rt == $item)
                        <option value="{{ $item }}" selected>{{ $item }}</option>
                        @else
                        <option value="{{ $item }}">{{ $item }}</option>
                        @endif
                        @endforeach
                    </select>

                    @error('rt')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="tanggal_lahir" class="block mb-2 text-sm font-medium text-gray-900">Tanggal
                        Lahir</label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                        class="block form-input @error('tanggal_lahir') border-red-500 @enderror"
                        value="{{ old('tanggal_lahir', $data[0]->tanggal_lahir ?? date('Y-m-d')) }}">
                    @error('tanggal_lahir')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="jenis_kelamin" class="block mb-2 text-sm font-medium text-gray-900">Jenis Kelain</label>
                    <select id="jenis_kelamin" name="jenis_kelamin"
                        class="form-input block @error('jenis_kelamin') border-red-500 @enderror">
                        <option value="" selected>Pilih Jenis Kelamin</option>
                        @foreach (['Laki-laki', 'Perempuan'] as $item)
                        @if (old('jenis_kelamin') ?: $data[0]->jenis_kelamin == $item)
                        <option value="{{ $item }}" selected>{{ $item }}</option>
                        @else
                        <option value="{{ $item }}">{{ $item }}</option>
                        @endif
                        @endforeach
                    </select>

                    @error('jenis_kelamin')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="agama" class="block mb-2 text-sm font-medium text-gray-900">Agama</label>
                    <select id="agama" name="agama"
                        class="form-input block @error('agama') border-red-500 @enderror">
                        <option value="" selected>Pilih Agama</option>
                        @foreach (['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Khonghucu'] as $item)
                        @if (old('agama') ?: $data[0]->agama == $item)
                        <option value="{{ $item }}" selected>{{ $item }}</option>
                        @else
                        <option value="{{ $item }}">{{ $item }}</option>
                        @endif
                        @endforeach
                    </select>

                    @error('agama')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="status" class="block mb-2 text-sm font-medium text-gray-900">Status</label>
                    <select id="status" name="status"
                        class="form-input block @error('status') border-red-500 @enderror">
                        <option value="" selected>Pilih Status</option>
                        @foreach (['Kawin', 'Belum Kawin'] as $item)
                        @if (old('status') ?: $data[0]->status == $item)
                        <option value="{{ $item }}" selected>{{ $item }}</option>
                        @else
                        <option value="{{ $item }}">{{ $item }}</option>
                        @endif
                        @endforeach
                    </select>

                    @error('status')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="tingkat_pendidikan" class="block mb-2 text-sm font-medium text-gray-900">Tingkat
                        Pendidikan</label>
                    <select id="tingkat_pendidikan" name="tingkat_pendidikan"
                        class="form-input block @error('tingkat_pendidikan') border-red-500 @enderror">
                        <option value="" selected>Pilih Tingkat Pendidikan</option>
                        @foreach (['SD/Sederajat', 'SMP/Sederajat', 'SMA/Sederajat', 'Mahasiswa'] as $item)
                        @if (old('tingkat_pendidikan') ?: $data[0]->tingkat_pendidikan == $item)
                        <option value="{{ $item }}" selected>{{ $item }}</option>
                        @else
                        <option value="{{ $item }}">{{ $item }}</option>
                        @endif
                        @endforeach
                    </select>

                    @error('tingkat_pendidikan')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="mata_pencarian" class="block mb-2 text-sm font-medium text-gray-900">Mata
                        Pencarian</label>
                    <select id="mata_pencarian" name="mata_pencarian"
                        class="form-input block @error('mata_pencarian') border-red-500 @enderror">
                        <option value="" selected>Pilih Tingkat Pendidikan</option>
                        @foreach (['Pelajar/Mahasiswa', 'Berwirausaha', 'PNS'] as $item)
                        @if (old('mata_pencarian') ?: $data[0]->mata_pencarian == $item)
                        <option value="{{ $item }}" selected>{{ $item }}</option>
                        @else
                        <option value="{{ $item }}">{{ $item }}</option>
                        @endif
                        @endforeach
                    </select>

                    @error('mata_pencarian')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <a href="{{ route('admin.demografis') }}"
                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-3 me-2 mb-2">Batal</a>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-auto px-5 py-2.5 text-center">Ubah
                    Data</button>
            </form>
        </div>
    </div>
</body>

</html>
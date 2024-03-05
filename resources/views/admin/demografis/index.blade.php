<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Pantog Kulon</title>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    @include('components.admin.header')

    @php
    use Carbon\Carbon;
    @endphp

    <div class="p-4 sm:ml-64">
        <div class="p-4 border-gray-200 rounded-lg mt-14">
            <div class="h-auto mb-4">
                <div class="relative overflow-x-auto h-fit rounded bg-gray-50 p-3">
                    <table class="w-full text-sm text-left">
                        <tr class="bg-slate-100">
                            <th scope="col" class="px-6 py-6 border">Nama</th>
                            <th scope="col" class="px-6 py-6 border">RT</th>
                            <th scope="col" class="px-6 py-6 border">Umur</th>
                            <th scope="col" class="px-6 py-6 border">Jenis Kelamin</th>
                            <th scope="col" class="px-6 py-6 border">Agama</th>
                            <th scope="col" class="px-6 py-6 border">Status</th>
                            <th scope="col" class="px-6 py-6 border">Tingkat Pendidikan</th>
                            <th scope="col" class="px-6 py-6 border">Pekerjaan</th>
                            <th scope="col" class="px-6 py-6 border">Ubah</th>
                        </tr>
                        @foreach ($data as $item)
                        <tr class="bg-white">
                            <td class="px-6 py-6 border">{{ $item->nama }}</td>
                            <td class="px-6 py-6 border">{{ $item->rt }}</td>
                            <td class="px-6 py-6 border">{{ Carbon::parse($item->tanggal_lahir)->age; }}</td>
                            <td class="px-6 py-6 border">{{ $item->jenis_kelamin }}</td>
                            <td class="px-6 py-6 border">{{ $item->agama }}</td>
                            <td class="px-6 py-6 border">{{ $item->status }}</td>
                            <td class="px-6 py-6 border">{{ $item->tingkat_pendidikan }}</td>
                            <td class="px-6 py-6 border">{{ $item->mata_pencarian }}</td>
                            <td class="px-6 py-6 border flex flex-col lg:flex-row justify-center ">
                                <a href="{{ route('admin.demografis.edit', ['id' => $item->id]) }}"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">Update</a>
                                <form action="{{ route('admin.demografis.delete', ['id' => $item->id]) }}"
                                    method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit"
                                        class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-6 py-2.5 me-2 mb-2">
                                        Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <div class="my-5">
                        {{ $data }}
                    </div>
                    <div>
                        <a href="{{ route('admin.demografis.input') }}"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">Tambah
                            Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @php
        $umur = [
            'balita' => 0,
            'anak-anak' => 0,
            'remaja' => 0,
            'dewasa' => 0,
            'lansia' => 0
        ];

        foreach ($data as $item) {
            $temp = Carbon::parse($item->tanggal_lahir)->age;

            if ($temp > 0 && $temp <= 5){
                $umur['balita']++;
            } 
            elseif ($temp> 5 && $temp <= 10){
                $umur['anak-anak']++;
            } 
            elseif ($temp> 10 && $temp <= 24){
                $umur['remaja']++;
            } 
            elseif ($temp> 24 && $temp <= 60){
                $umur['dewasa']++;
            }
            elseif ($temp> 60){
                $umur['lansia']++;
            }
        }
    @endphp

    <script>
        const umur = Object.values(@json($umur));
        const ctx = document.getElementById('chartPenduduk').getContext('2d');

        new Chart(ctx, {
            type: "pie",
            data: {
                labels: ['Balita', 'Anak-anak', 'Remaja', 'Dewasa', 'Lansia'],
                datasets: [{
                        data: umur,
                    }]
            }
        });
    </script>
</body>
</html>
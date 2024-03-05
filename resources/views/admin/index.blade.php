<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>
    @include('components.admin.header')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-gray-200 rounded-lg mt-14">
            <div class="grid grid-cols-3 gap-4 mb-4">
                <div class="flex flex-col justify-center pl-4 h-24 rounded bg-gray-50 relative">
                    <h5 class="text-base lg:text-2xl font-bold tracking-tight text-gray-900">
                        Populasi</h5>
                    <div class="absolute bottom-0 left-0 w-1 h-full bg-[#15DDAB]"></div>
                    <p class="font-normal text-gray-700">
                        {{collect($demografis)->count()}}</p>
                </div>
                <div class="flex flex-col justify-center pl-4 h-24 rounded bg-gray-50 relative">
                    <h5 class="text-base lg:text-2xl font-bold tracking-tight text-gray-900">
                        Acara Mendatang</h5>
                    <div class="absolute bottom-0 left-0 w-1 h-full bg-[#15DDAB]"></div>
                    <p class="font-normal text-gray-700">
                        {{ collect($agenda)->filter(function ($item) {return strtotime($item['tanggal_kegiatan']) >=
                        strtotime(date('Y-m-d'));})->count() }}</p>
                </div>
                <div class="flex flex-col justify-center pl-4 h-24 rounded bg-gray-50 relative">
                    <h5 class="text-base lg:text-2xl font-bold tracking-tight text-gray-900">
                        Populasi</h5>
                    <div class="absolute bottom-0 left-0 w-1 h-full bg-[#15DDAB]"></div>
                    <p class="font-normal text-gray-700">
                        {{collect($demografis)->count()}}</p>
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-[2fr_1fr] gap-5 h-auto mb-4 ">
                <div class="relative overflow-x-auto h-fit rounded bg-gray-50 p-3">
                    <table class="w-full text-sm text-left">
                        <tr class="bg-slate-100">
                            <th scope="col" class="px-6 py-6 border">Nama</th>
                            <th scope="col" class="px-6 py-6 border">Email</th>
                            <th scope="col" class="px-6 py-6 border">Ubah</th>
                        </tr>
                        @foreach ($admin as $item)
                        <tr class="bg-white">
                            <td class="px-6 py-6 border">{{ $item->name }}</td>
                            <td class="px-6 py-6 border">{{ $item->email }}</td>
                            <td class="border">
                                <form action="" method="post" class="flex justify-center">
                                    @csrf
                                    <button type="submit"
                                        class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-6 py-2.5">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <div class="my-5">
                        {{ $admin }}
                    </div>
                </div>

                <div class="rounded bg-gray-50 w-full h-fit">
                    <canvas id="chartPenduduk"></canvas>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="flex items-center justify-center rounded bg-gray-50 h-28">
                    <p class="text-2xl text-gray-400">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 1v16M1 9h16" />
                        </svg>
                    </p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28">
                    <p class="text-2xl text-gray-400">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 1v16M1 9h16" />
                        </svg>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
        let demografis = @json($demografis);
        let jenis_kelamin = [];

        demografis.forEach((item) => {
            jenis_kelamin.push(item.jenis_kelamin)
        })

        function getLabelValue(data)
        {
            let labels = [... new Set(Object.values(data))];
            let values = [];

            labels.forEach((label) => {
                const jumlah = Object.values(data).filter((item) => item === label).length;
                values.push(jumlah);
            })

            let result = {
                labels: labels,
                values: values
            }

            return result;
        }


        const ctx = document.getElementById('chartPenduduk').getContext('2d');

        new Chart(ctx, {
            type: "pie",
            data: {
                labels: getLabelValue(jenis_kelamin).labels,
                datasets: [{
                        data: getLabelValue(jenis_kelamin).values,
                    }]
            }
        });
    </script>
</body>

</html>
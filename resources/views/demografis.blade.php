<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Penduduk Pantog Kulon</title>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('components/header')

    @php
    use Carbon\Carbon;
    @endphp

    <div class="min-h-[800px]">
        <div class="flex flex-col mt-10">
            <div class="px-2 lg:px-16 mx-10">
                <div class="flex flex-row w-fit mx-auto">
                    <dt class="mb-2 text-xl lg:text-3xl w-fit font-extrabold">Demografis</dt>
                    <dt class="mb-2 ml-2 text-xl lg:text-3xl w-fit font-extrabold">Pantog</dt>
                    <dt class="mb-2 ml-2 text-xl lg:text-3xl font-extrabold text-teal-500">Kulon</dt>
                </div>
                <p class="text-base mt-2 w-full indent-9 break-all">Lorem, ipsum dolor sit amet consectetur
                    adipisicing elit. Laudantium ipsa voluptatibus tempora enim laboriosam pariatur sit dolores
                    doloribus commodi, quisquam dolore? Repellat, at perspiciatis fugiat minus doloribus delectus illum
                    odit?</p>
            </div>
        </div>


        <div class="flex flex-col-reverse lg:flex-row mx-auto my-10 w-fit">
            <div
                class="flex flex-col bg-[#E6F4F1] justify-between w-fit mx-5 p-5 border border-gray-200 rounded-md shadow-2xl">
                <div class="mx-4 mb-2">
                    <label for="filter" class="block text-md font-semibold text-[#232301]">Filter:</label>
                    <select id="filter" onchange="updateChart()"
                        class="font-Inter mt-1 p-2 border border-gray-300 rounded-md w-full">
                        <option value="umur">Umur</option>
                        <option value="jenis_kelamin">Jenis Kelamin</option>
                        <option value="mata_pencarian">Pekerjaan</option>
                        <option value="tingkat_pendidikan">Pendidikan</option>
                        <option value="status">Status</option>
                        <option value="rt">RT</option>
                        <option value="agama">Agama</option>
                    </select>
                </div>

                <div class="flex flex-wrap items-center justify-center mt-6">
                    <div class="mx-4 w-full lg:w-auto">
                        <canvas id="myPieChart" class="h-[300px] md:h-[400px] w-full lg:w-[400px]"></canvas>
                    </div>

                    <div
                        class="mt-8 mx-6 p-6 md:p-10 bg-white text-[#232301] shadow-md rounded-lg w-fit lg:w-auto relative">
                        <div class="absolute bottom-0 left-0 w-1 h-full bg-[#7C91BC]"></div>
                        <div id="labelCounts">
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>

    @include('components.footer')

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

            if ($temp > 0 && $temp <= 5){$umur['balita']++;} 
            elseif ($temp> 5 && $temp <= 10) {$umur['anak-anak']++;} 
            elseif ($temp> 10 && $temp <= 24) {$umur['remaja']++;} 
            elseif ($temp> 24 && $temp <= 60) {$umur['dewasa']++;}
            elseif ($temp> 60) {$umur['lansia']++;}
        }
    @endphp

    <script>
        const list = @json($data);

        const umur = Object.values(@json($umur));
        let jenis_kelamin = [];
        let rt = [];
        let agama = [];
        let mata_pencarian = [];
        let tingkat_pendidikan = [];
        let status = [];


        list.forEach(function(item) {
            jenis_kelamin.push(item.jenis_kelamin);
            rt.push(item.rt);
            agama.push(item.agama);
            mata_pencarian.push(item.mata_pencarian);
            tingkat_pendidikan.push(item.tingkat_pendidikan);
            status.push(item.status);
        });

        function getLabelValue(data){
            let list = [... new Set(Object.values(data))];
            let values = [];

            list.forEach((label) => {
                const jumlah = Object.values(data).filter((item) => item === label).length;
                values.push(jumlah);
            })

            let result = {
                labels: list,
                values: values,
            }

            return result;
        }

        const data = {
            rt: {
                labels: ['RT 21', 'RT 22', 'RT 23', 'RT 24'],
                values: getLabelValue(rt).values
            },

            umur: {
                labels: ['Balita', 'Anak-anak', 'Remaja', 'Dewasa', 'Lansia'],
                values: umur
            },

            jenis_kelamin: {
                labels: ['Laki-laki', 'Perempuan'],
                values: getLabelValue(jenis_kelamin).values
            },

            agama: {
                labels: getLabelValue(agama).labels,
                values: getLabelValue(agama).values
            },
            
            status: {
                labels: getLabelValue(status).labels,
                values: getLabelValue(status).values
            },

            tingkat_pendidikan: {
                labels: getLabelValue(tingkat_pendidikan).labels,
                values: getLabelValue(tingkat_pendidikan).values
            },

            mata_pencarian: {
                labels: getLabelValue(mata_pencarian).labels,
                values: getLabelValue(mata_pencarian).values
            }

        };

        function getDataByFilter(filter) {
            return data[filter];
        }

        const initialFilter = 'umur';
        const initialData = getDataByFilter(initialFilter);
        const ctx = document.getElementById('myPieChart').getContext('2d');

        //haruse udah responsive
        let myPieChart = new Chart(ctx, {
            type: "pie",
            data: {
                labels: initialData.labels,
                datasets: [{
                        data: initialData.values,
                    }]
            }
        });

        //inisialisasi label counts
        updateLabelCounts(initialData.labels, initialData.values);

        function updateChart() {
            const filter = document.getElementById('filter').value;
            const newData = getDataByFilter(filter);

            myPieChart.data.labels = newData.labels;
            myPieChart.data.datasets[0].data = newData.values;
            myPieChart.update();

            //update jumlah tiap label
            updateLabelCounts(newData.labels, newData.values);
        }

        function updateLabelCounts(labels, values) {
            const labelCountsDiv = document.getElementById('labelCounts');
            labelCountsDiv.innerHTML = '';

            for (let i = 0; i < labels.length; i++) {
                const row = document.createElement('tr');

                const labelCell = document.createElement('td');
                labelCell.classList.add('font-semibold');
                labelCell.textContent = labels[i];

                const valueCell = document.createElement('td');
                valueCell.classList.add('font-semibold');
                valueCell.textContent = ' : ' +  values[i];

                row.appendChild(labelCell);
                row.appendChild(valueCell);

                labelCountsDiv.appendChild(row);
            }
        }

    </script>

</body>

</html>
<?php
if (!session()->has('user')) {
    echo "<script>window.location.href = '/login';</script>";
    return view('login');
}

// get sleep quality from database
$user = session('user');
$emails = $user['email'];

$sleepQuality = DB::table('users')->where('email', $emails)->value('score_sleep_quality');
$sleepQuality = $sleepQuality * 10;
$sleepQualityCategory = '';
if ($sleepQuality > 80) {
    $sleepQualityCategory = 'Sangat Baik';
} elseif ($sleepQuality > 60) {
    $sleepQualityCategory = 'Baik';
} elseif ($sleepQuality > 40) {
    $sleepQualityCategory = 'Cukup';
} elseif ($sleepQuality > 20) {
    $sleepQualityCategory = 'Buruk';
} else {
    $sleepQualityCategory = 'Sangat Buruk';
}

// stress level
$stressLevel = DB::table('users')->where('email', $emails)->value('score_stress_quality');
$stressLevel = $stressLevel * 10;
$stressLevelCategory = '';
if ($stressLevel > 80) {
    $stressLevelCategory = 'Sangat Tinggi';
} elseif ($stressLevel > 60) {
    $stressLevelCategory = 'Tinggi';
} elseif ($stressLevel > 40) {
    $stressLevelCategory = 'Cukup';
} elseif ($stressLevel > 20) {
    $stressLevelCategory = 'Rendah';
} else {
    $stressLevelCategory = 'Sangat Rendah';
}

?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    {{-- navbar --}}
    @include('generalNavbar')

    <!-- Hero section -->
    <section class="bg-secondary flex items-center justify-center min-h-screen mb-3 mt-20 md:mt-0">
        <div class="container mx-auto max-w-screen-xl p-4 flex flex-col md:flex-row items-center justify-between w-full">
            <!-- Left side -->
            <div
                class="w-full md:w-1/2 bg-white rounded-xl shadow dark:bg-gray-800 flex flex-col items-center justify-center p-4 md:p-10 mb-4 md:mb-0 md:mr-4">
                <!-- Radial chart container -->
                <div class="flex items-center justify-center mb-10">
                    <div class="w-full h-auto" id="radial-chart"></div>
                </div>
                <!-- Persentase Keseluruhan -->
                <div
                    class="bg-teal-50 dark:bg-gray-600 rounded-lg flex flex-col md:flex-row items-center justify-center p-4">
                    <div
                        class="w-16 h-16 rounded-full bg-teal-200 text-bold text-lg font-bold flex items-center justify-center mb-4 md:mb-0 md:mr-4">
                        {{ $sleepQuality }}%
                    </div>
                    <div class="text-center md:text-left">
                        <h5 class="text-lg font-bold text-bold">Persentase Keseluruhan</h5>
                        <p class="mt-2 text-sm text-primary">Kualitas tidur Anda tergolong {{ $sleepQualityCategory }}.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right side -->
            <div
                class="w-full md:w-1/2 bg-white rounded-xl shadow dark:bg-gray-800 flex flex-col items-center justify-center p-4 md:p-10 mb-4 md:mb-0 md:mr-4">
                <!-- Radial chart container -->
                <div class="flex items-center justify-center mb-10">
                    <div class="w-full h-auto" id="stress-radial-chart"></div>
                </div>
                <!-- Persentase Keseluruhan -->
                <div
                    class="bg-teal-50 dark:bg-gray-600 rounded-lg flex flex-col md:flex-row items-center justify-center p-4">
                    <div
                        class="w-16 h-16 rounded-full bg-teal-200 text-bold text-lg font-bold flex items-center justify-center mb-4 md:mb-0 md:mr-4">
                        {{ $stressLevel }}%
                    </div>
                    <div class="text-center md:text-left">
                        <h5 class="text-lg font-bold text-bold">Persentase Keseluruhan</h5>
                        <p class="mt-2 text-sm text-primary">Tingkat stres Anda tergolong {{ $stressLevelCategory }}.
                    </div>
                </div>
            </div>
        </div>
    </section>




    {{-- Fitur Klasifikasi --}}
    <section class="bg-white flex flex-col-reverse items-center justify-center min-h-screen mb-3 md:mb-20">
        <div class="container mx-auto max-w-screen-xl p-4">
            <div class="flex flex-col md:flex-row items-center justify-between text-center md:text-left">
                <img src="{{ asset('assets/klasifikasi-pic.svg') }}" alt="Sleeping Illustration"
                    class="w-full object-contain order-2 md:order-1">
                <div class="order-1 md:order-2 mb-6 md:mb-0 md:ml-6 max-w-lg">
                    <h1 class="text-3xl md:text-4xl font-bold text-bold">Klasifikasi Gangguan Tidur</h1>
                    <p class="mt-4 text-primary">Tidur adalah jendela kebahagiaan yang tak ternilai. Dengan teknologi
                        kami, kita dapat membantu mengenali gangguan yang menghalangi pintu itu terbuka lebar.</p>
                    <div class="flex justify-center md:justify-start mt-6 w-full md:w-auto order-3 md:order-none">
                        <button
                            class="text-white bg-primary hover:bg-gray-500 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-4 py-2 text-center">
                            <a href="/klasifikasi-gangguan-tidur">Mulai</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- artikel --}}
    <section class="items-center justify-center min-h-screen mb-3 md:mb-20">
        <div class="container mx-auto max-w-screen-xl p-4">
            <h1 class="text-3xl md:text-4xl font-bold text-bold text-center mb-20">Artikel terkait Gangguan Tidur</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                {{-- card 1 --}}
                <div
                    class="max-w-sm bg-secondary border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img class="w-full h-auto rounded-t-lg object-cover" src={{ asset('assets/gambar-1.svg') }}
                        alt="" draggable="false" />
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-bold">
                            Badan Sakit saat Bangun Tidur?
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            Pernahkah Anda mengalami badan sakit saat bangun tidur di pagi hari? Biasanya, hal ini
                            terjadi jika Anda melakukan aktivitas berat...
                        </p>
                        <a href="https://wolipop.detik.com/health-and-diet/d-6448891/3-cara-agar-cepat-tidur-dengan-metode-ilmiah-2-menit-langsung-pules"
                            class="text-blue-600 hover:underline hover:text-blue-800">
                            Baca selengkapnya
                        </a>
                    </div>
                </div>
                {{-- card 2 --}}
                <div
                    class="max-w-sm bg-secondary border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img class="w-full h-auto rounded-t-lg object-cover" src={{ asset('assets/gambar-2.svg') }}
                        alt="" draggable="false" />
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-bold">
                            Apa itu Microsleep?
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            Pernahkah kamu tidak sadar sudah tertidur selama beberapa detik? Jika ya, kamu mungkin telah
                            mengalami microsleep...
                        </p>
                        <a href="https://www.detik.com/jateng/berita/d-7356049/apa-itu-microsleep-ini-pengertian-penyebab-gejala-hingga-penanganannya"
                            class="text-blue-600 hover:underline hover:text-blue-800">
                            Baca selengkapnya
                        </a>
                    </div>
                </div>
                {{-- card 3 --}}
                <div
                    class="max-w-sm bg-secondary border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img class="w-full h-auto rounded-t-lg object-cover" src={{ asset('assets/gambar-3.svg') }}
                        alt="" draggable="false" />
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-bold">
                            Kenali Tanda Gangguan Tidur
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            Pakar kesehatan tidur dr. Andreas Prasadja, RPSGT, menyebut ada 3 gejala dalam gangguan
                            tidur. Apa bedanya ketiga gejala tersebut?
                        </p>
                        <a href="https://20.detik.com/detikupdate/20240223-240223091/3-tanda-kamu-mengalami-gangguan-tidur"
                            class="text-blue-600 hover:underline hover:text-blue-800">
                            Baca selengkapnya
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex flex-col lg:flex-row justify-between items-start mt-8">
                <div class="lg:w-3/4 lg:mr-6">
                    <p class="text-primary text-center lg:text-left">Jelajahi artikel kami untuk informasi lebih lanjut
                        tentang cara mengatasi gangguan tidur dan meningkatkan kualitas tidur Anda. Temukan solusi
                        praktis dan terbukti yang membantu Anda tidur lebih nyaman setiap malam.</p>
                </div>
                <div class="ml-auto mx-auto lg:text-center lg:mx-0">
                    <button
                        class="text-white bg-primary hover:bg-gray-500 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-4 py-2 mt-6 lg:mt-0">
                        <a href="/artikel">Jelajahi</a>
                    </button>
                </div>
            </div>
        </div>
    </section>

    {{-- footer --}}
    @include('generalFooter')

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        window.addEventListener('scroll', function() {
            var navbar = document.querySelector('#navbar');
            if (window.scrollY > 50) {
                navbar.classList.remove('bg-transparent');
                navbar.classList.add('bg-white');
                navbar.classList.add('shadow-md');
            } else {
                navbar.classList.remove('bg-white');
                navbar.classList.remove('shadow-md');
                navbar.classList.add('bg-transparent');
            }
        });

        document.addEventListener("DOMContentLoaded", function() {
            //Sleep Quality
            var radialOptions = {
                series: [{{ $sleepQuality }}],
                chart: {
                    height: 350,
                    type: 'radialBar',
                },
                plotOptions: {
                    radialBar: {
                        hollow: {
                            size: '70%',
                        }
                    },
                },
                labels: ['Kualitas Tidur'],
                colors: ['#025F80'],
                fill: {
                    type: 'gradient',
                    gradient: {
                        shade: 'dark',
                        type: 'horizontal',
                        shadeIntensity: 0.5,
                        gradientToColors: ['#B9D6DB'],
                        inverseColors: true,
                        opacityFrom: 1,
                        opacityTo: 1,
                        stops: [0, 100]
                    }
                }
            };

            // Static Stress Level 
            var stressRadialOptions = {
                series: [{{ $stressLevel }}],
                chart: {
                    height: 350,
                    type: 'radialBar',
                },
                plotOptions: {
                    radialBar: {
                        hollow: {
                            size: '70%',
                        }
                    },
                },
                labels: ['Tingkat Stres'],
                colors: ['#025F80'],
                fill: {
                    type: 'gradient',
                    gradient: {
                        shade: 'dark',
                        type: 'horizontal',
                        shadeIntensity: 0.5,
                        gradientToColors: ['#B9D6DB'],
                        inverseColors: true,
                        opacityFrom: 1,
                        opacityTo: 1,
                        stops: [0, 100]
                    }
                }
            };


            // Render Radial Chart
            var radialChart = new ApexCharts(document.querySelector("#radial-chart"), radialOptions);
            radialChart.render();

            // Render Stress Level Radial Chart
            var stressRadialChart = new ApexCharts(document.querySelector("#stress-radial-chart"),
                stressRadialOptions);
            stressRadialChart.render();
        });
    </script>
</body>

</html>

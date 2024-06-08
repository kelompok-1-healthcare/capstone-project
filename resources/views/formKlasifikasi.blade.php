<?php
if (!session()->has('user')) {
    echo "<script>window.location.href = '/login';</script>";
    return view('login');
}

if (!session()->has('quality_of_sleep')) {
    echo "<script>window.location.href = '/form-kualitas-tidur';</script>";
    return view('formKualitasTidur');
}

if (!session()->has('stress_level')) {
    echo "<script>window.location.href = '/form-stress-level';</script>";
    return view('formStressLevel');
}

$loadingText = 'Menghitung hasil klasifikasi...';

?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        #loader {
            position: absolute;
            left: 50%;
            top: 50%;
            z-index: 1;
            width: 120px;
            height: 120px;
            margin: -76px 0 0 -76px;
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #3498db;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
        }

        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Add animation to "page content" */
        .animate-bottom {
            position: relative;
            -webkit-animation-name: animatebottom;
            -webkit-animation-duration: 1s;
            animation-name: animatebottom;
            animation-duration: 1s
        }

        @-webkit-keyframes animatebottom {
            from {
                bottom: -100px;
                opacity: 0
            }

            to {
                bottom: 0px;
                opacity: 1
            }
        }

        @keyframes animatebottom {
            from {
                bottom: -100px;
                opacity: 0
            }

            to {
                bottom: 0;
                opacity: 1
            }
        }

        .loaderContainer {
            background-color: rgba(0, 0, 0, 0.5);
        }
    </style>
</head>

<body>
    {{-- navbar --}}
    @include('generalNavbar')

    {{-- Form Klasifikasi --}}
    <section class="bg-white flex items-center justify-center mt-16 md:mt-20 pt-4 mt:pt-16">
        <div class="container mx-auto max-w-screen-xl p-4">
            <div class="flex flex-col items-center text-center">
                <h1 class="text-3xl md:text-4xl font-bold text-bold mb-4">Prediksi Jenis Gangguan Tidur</h1>
                <p class="text-primary mb-16 max-w-3xl">Temukan apakah Anda mengalami gangguan tidur dan pelajari cara
                    mengatasinya dengan solusi yang tepat dan efektif. Mari mulai perjalanan Anda menuju tidur yang
                    lebih baik dan hidup yang lebih sehat!</p>
            </div>
            <div class="bg-secondary p-4 rounded-lg shadow-lg">
                <form class="flex flex-wrap justify-center mt-6 mb-6" action="/api/klasifikasi-gangguan-tidur"
                    method="POST">
                    @csrf
                    <div class="w-full md:w-1/2 px-4 mb-8">
                        <label for="gender" class="block mb-2 text-sm font-medium text-bold">Jenis Kelamin</label>
                        <select id="gender" name="gender"
                            class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option disabled selected hidden>Pilih jenis kelamin</option>
                            <option>Pria</option>
                            <option>Wanita</option>
                        </select>
                    </div>
                    <div class="w-full md:w-1/2 px-4 mb-8">
                        <label for="number-input" class="block mb-2 text-sm font-medium text-bold">Umur</label>
                        <input type="number" id="number-input" aria-describedby="helper-text-explanation"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Masukan umur anda" min="0" max="120" required name="age" />
                    </div>
                    <div class="w-full md:w-1/2 px-4 mb-8">
                        <label for="occupation" class="block mb-2 text-sm font-medium text-bold">Pekerjaan</label>
                        <select id="occupation" name="occupation"
                            class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option disabled selected hidden>Pilih pekerjaan</option>
                            <option value="software engineer">Software Engineer</option>
                            <option value="dokter">Dokter</option>
                            <option value="sales">Sales</option>
                            <option value="guru">Guru</option>
                            <option value="perawat">Perawat</option>
                            <option value="engineer">Engineer</option>
                            <option value="akuntan">Akuntan</option>
                            <option value="scientist">Scientist</option>
                            <option value="pengacara">Pengacara</option>
                            <option value="salesperson">Salesperson</option>
                            <option value="manager">Manager</option>

                        </select>
                    </div>
                    <div class="w-full md:w-1/2 px-4 mb-8 flex space-x-4">
                        <div class="w-1/2">
                            <label for="height-input" class="block mb-2 text-sm font-medium text-bold">Tinggi Badan
                                (cm)</label>
                            <input type="number" id="height-input" aria-describedby="helper-text-explanation"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan tinggi badan anda" min="50" max="300" required
                                name="height" />
                        </div>
                        <div class="w-1/2">
                            <label for="weight-input" class="block mb-2 text-sm font-medium text-bold">Berat Badan
                                (kg)</label>
                            <input type="number" id="weight-input" aria-describedby="helper-text-explanation"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan berat badan anda" min="10" max="500" required
                                name="weight" />
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 px-4 mb-8">
                        <label for="tekananDarahSistolik" class="block mb-2 text-sm font-medium text-bold">Tekanan
                            Darah</label>
                        <div class="input-group flex space-x-4 items-center">
                            <input type="number" id="systolic" name="systolic" min="0" max="300"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Sistolik">

                            <span class="input-group-text">/</span>

                            <input type="number" id="diastolic" name="diastolic" min="0" max="300"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Diastolik">
                        </div>
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Masukkan angka sistolik dan diastolik.
                            Contoh: 120/80 mmHg</p>
                    </div>
                    <div class="w-full md:w-1/2 px-4 mb-8">
                        <label for="heart-rate-input" class="block mb-2 text-sm font-medium text-bold">Denyut Jantung
                            (bpm)</label>
                        <input type="number" id="heart-rate-input" name="heartRate" min="30" max="200"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Masukkan denyut jantung">
                    </div>
                    <div class="w-full md:w-1/2 px-4 mb-8">
                        <label for="dailySteps" class="block mb-2 text-sm font-medium text-bold">Langkah
                            Harian</label>
                        <input type="number" id="dailySteps" name="dailySteps" min="0" max="100000"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Masukkan jumlah langkah harian anda">
                    </div>
                    <div class="w-full md:w-1/2 px-4 mb-8">
                        <label for="physicalActivity" class="block mb-2 text-sm font-medium text-bold">Aktivitas Fisik
                            (menit/hari)</label>
                        <input type="number" id="physicalActivity" name="physicalActivity" min="0"
                            max="1440"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Masukkan jumlah menit per hari">
                    </div>
                    <div class="w-full md:w-1/2 px-4 mb-8">
                        <label for="sleep-quality-range" class="block mb-2 text-sm font-medium text-bold">Kualitas
                            tidur</label>
                        <input id="sleep-quality-range" type="range" min="0" max="10"
                            name="quality_of_sleep" value="{{ session('quality_of_sleep') }}"
                            class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700"
                            disabled>
                        <output id="range-sleep-quality"
                            class="text-sm mt-1 text-gray-600 dark:text-gray-400 text-center block">{{ session('quality_of_sleep') }}</output>
                    </div>
                    <div class="w-full md:w-1/2 px-4 mb-8">
                        <label for="stress-level-range" class="block mb-2 text-sm font-medium text-bold">Tingkat
                            Stres</label>
                        <input id="stress-level-range" type="range" min="0" max="10"
                            name="stress_level" value="{{ session('stress_level') }}"
                            class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700"
                            disabled>
                        <output id="range-stress-level"
                            class="text-sm mt-1 text-gray-600 dark:text-gray-400 text-center block">{{ session('stress_level') }}</output>
                    </div>
                    <div class="w-full md:w-1/2 px-4 mb-8">
                        <label for="duration-range"
                            class="block mb-2 text-sm font-medium text-bold text-center">Durasi Tidur (jam)</label>
                        <input id="duration-range" type="range" min="0" max="10" step="0.1"
                            value="0" name="durationOfSleep"
                            class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                        <output id="range-duration"
                            class="text-sm mt-1 text-gray-600 dark:text-gray-400 text-center block">0.0</output>
                    </div>
                    <div class="w-full px-4 mt-10 text-center">
                        <button type="submit" id="submit-button"
                            class="w-1/2 md:w-1/3 bg-primary text-white py-2 px-4 rounded-lg hover:bg-gray-500 focus:ring-4 focus:outline-none">
                            Kirim
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <div
        class="loaderContainer min-h-screen bg-white absolute top-0 left-0 z-50 w-full h-full flex items-center justify-center">
        <div id="loader" class="bg-gray-100 dark:bg-gray-800 animate-bottom">

        </div>
        <div class="flex flex-col pt-24 items-center justify-center text-center text-gray-700 dark:text-gray-300">
            <div class="text-center">
                <div class="text-2xl font-bold text-primary">Mohon tunggu</div>
                <div class="text-lg text-gray-500 dark:text-gray-400">{{ $loadingText }}</div>
            </div>
        </div>
    </div>

    {{-- footer --}}
    @include('generalFooter')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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

        // input umur
        document.getElementById('number-input').addEventListener('input', function(e) {
            var input = e.target;
            if (input.value < 0) input.value = 0;
            if (input.value > 120) input.value = 120;
        });

        // input tinggi badan
        document.getElementById('height-input').addEventListener('input', function(e) {
            var input = e.target;
            if (input.value < 0) input.value = 0;
            if (input.value > 300) input.value = 300;
        });

        // input berat badan
        document.getElementById('weight-input').addEventListener('input', function(e) {
            var input = e.target;
            if (input.value < 0) input.value = 0;
            if (input.value > 500) input.value = 500;
        });

        // kulitas Tidur
        const sleepQualityRange = document.getElementById('sleep-quality-range');
        const rangeSleepQuality = document.getElementById('range-sleep-quality');
        sleepQualityRange.addEventListener('input', function() {
            rangeSleepQuality.textContent = sleepQualityRange.value;
        });

        // tingkat stres
        const stressLevelRange = document.getElementById('stress-level-range');
        const rangeStressLevel = document.getElementById('range-stress-level');
        stressLevelRange.addEventListener('input', function() {
            rangeStressLevel.textContent = stressLevelRange.value;
        });

        // Durasi Tidur
        const durationRange = document.getElementById('duration-range');
        const rangeDuration = document.getElementById('range-duration');
        durationRange.addEventListener('input', function() {
            rangeDuration.textContent = durationRange.value;
        });

        let loadingText = 'Loading...';
        document.querySelector('form').addEventListener('submit', function() {
            document.querySelector('.loaderContainer').classList.remove('hidden');
            document.querySelector('.loaderContainer').classList.add('flex');
            document.getElementById('submit-button').disabled = true;

            let i = 0;
            setInterval(() => {
                if (i == 3) i = 0;
                if (i == 0) loadingText = 'Loading.';
                if (i == 1) loadingText = 'Loading..';
                if (i == 2) loadingText = 'Loading...';
                document.querySelector('.loaderContainer .text-lg').textContent = loadingText;
                i++;
            }, 500);
        });

        @if (session('error'))
            alert("{{ session('error') }}");
        @endif
    </script>
</body>

</html>

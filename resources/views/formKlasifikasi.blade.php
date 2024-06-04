<?php
if (!session()->has('user')) {
    echo "<script>window.location.href = '/login';</script>";
    return view('login');
}

if (!session()->has('quality_of_sleep')) {
    echo "<script>window.location.href = '/form-kualitas-tidur';</script>";
    return view('formKlasifikasi');
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
                <form class="flex flex-wrap justify-center mt-6 mb-6">
                    <div class="w-full md:w-1/2 px-4 mb-4">
                        <label for="gender" class="block mb-2 text-sm font-medium text-bold">Jenis Kelamin</label>
                        <select id="gender"
                            class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option disabled selected hidden>Pilih jenis kelamin</option>
                            <option>Pria</option>
                            <option>Wanita</option>
                        </select>
                    </div>
                    <div class="w-full md:w-1/2 px-4 mb-4">
                        <label for="number-input" class="block mb-2 text-sm font-medium text-bold">Umur</label>
                        <input type="number" id="number-input" aria-describedby="helper-text-explanation"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Masukan umur anda" min="0" max="120" required />
                    </div>
                    <div class="w-full md:w-1/2 px-4 mb-4">
                        <label for="occupation" class="block mb-2 text-sm font-medium text-bold">Pekerjaan</label>
                        <select id="occupation"
                            class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option disabled selected hidden>Pilih pekerjaan</option>
                            <option value="arsitek">Arsitek</option>
                            <option value="dokter">Dokter</option>
                            <option value="pengacara">Pengacara</option>
                            <option value="guru">Guru</option>
                            <option value="insinyur">Insinyur</option>
                            <option value="perawat">Perawat</option>
                            <option value="programmer">Programmer</option>
                            <option value="konsultan">Konsultan</option>
                            <option value="marketing">Marketing</option>
                            <option value="pengusaha">Pengusaha</option>
                            <option value="pekerja_sosial">Pekerja Sosial</option>
                            <option value="ahli_it">Ahli IT</option>
                            <option value="psikolog">Psikolog</option>
                            <option value="penyanyi">Penyanyi</option>
                            <option value="aktor_aktris">Aktor/Aktris</option>
                            <option value="seniman">Seniman</option>
                            <option value="peneliti">Peneliti</option>
                            <option value="analis_keuangan">Analis Keuangan</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="w-full md:w-1/2 px-4 mb-4 flex space-x-4">
                        <div class="w-1/2">
                            <label for="height-input" class="block mb-2 text-sm font-medium text-bold">Tinggi Badan
                                (cm)</label>
                            <input type="number" id="height-input" aria-describedby="helper-text-explanation"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan tinggi badan anda" min="50" max="300" required />
                        </div>
                        <div class="w-1/2">
                            <label for="weight-input" class="block mb-2 text-sm font-medium text-bold">Berat Badan
                                (kg)</label>
                            <input type="number" id="weight-input" aria-describedby="helper-text-explanation"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan berat badan anda" min="10" max="500" required />
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 px-4 mb-6">
                        <label for="input5" class="block mb-2 text-sm font-medium text-bold">Tekanan darah</label>
                        <input type="text" id="input5" name="input5"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder=".../...mmHg">
                    </div>
                    <div class="w-full md:w-1/2 px-4 mb-6">
                        <label for="sleep-quality-range" class="block mb-2 text-sm font-medium text-bold">Kualitas
                            tidur</label>
                        <input id="sleep-quality-range" type="range" min="0" max="10"
                            value="{{ session('quality_of_sleep') }}"
                            class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700"
                            disabled>
                        <output id="range-sleep-quality"
                            class="text-sm mt-1 text-gray-600 dark:text-gray-400 text-center block">{{ session('quality_of_sleep') }}</output>
                    </div>
                    <div class="w-full md:w-1/2 px-4 mb-6">
                        <label for="stress-level-range" class="block mb-2 text-sm font-medium text-bold">Tingkat
                            Stres</label>
                        <input id="stress-level-range" type="range" min="0" max="10" value="0"
                            class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                        <output id="range-stress-level"
                            class="text-sm mt-1 text-gray-600 dark:text-gray-400 text-center block">0</output>
                    </div>
                    <div class="w-full md:w-1/2 px-4 mb-6">
                        <label for="duration-range" class="block mb-2 text-sm font-medium text-bold">Durasi
                            Tidur</label>
                        <input id="duration-range" type="range" min="0" max="10" value="0"
                            class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                        <output id="range-duration"
                            class="text-sm mt-1 text-gray-600 dark:text-gray-400 text-center block">0</output>
                    </div>
                    <div class="w-full md:w-1/2 px-4 mb-6">
                        <label for="systolic-range" class="block mb-2 text-sm font-medium text-bold">Tekanan saat
                            jantung memompa darah</label>
                        <input id="systolic-range" type="range" min="0" max="10" value="0"
                            class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                        <output id="range-systolic"
                            class="text-sm mt-1 text-gray-600 dark:text-gray-400 text-center block">0</output>
                    </div>
                    <div class="w-full md:w-1/2 px-4 mb-6">
                        <label for="diastolic-range" class="block mb-2 text-sm font-medium text-bold">Tekanan saat
                            jantung berelaksasi sebelum kembali memompa darah</label>
                        <input id="diastolic-range" type="range" min="0" max="10" value="0"
                            class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                        <output id="range-diastolic"
                            class="text-sm mt-1 text-gray-600 dark:text-gray-400 text-center block">0</output>
                    </div>
                    <div class="w-full px-4 mt-10 text-center">
                        <button type="submit"
                            class="w-1/2 md:w-1/3 bg-primary text-white py-2 px-4 rounded-lg hover:bg-gray-500 focus:ring-4 focus:outline-none">
                            Kirim
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

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

        // systolic
        const systolicRange = document.getElementById('systolic-range');
        const rangeSystolic = document.getElementById('range-systolic');
        systolicRange.addEventListener('input', function() {
            rangeSystolic.textContent = systolicRange.value;
        });

        // diastolic
        const diastolicRange = document.getElementById('diastolic-range');
        const rangeDiastolic = document.getElementById('range-diastolic');
        diastolicRange.addEventListener('input', function() {
            rangeDiastolic.textContent = diastolicRange.value;
        });
    </script>
</body>

</html>

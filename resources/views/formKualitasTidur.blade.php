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

    {{-- Form Kualitas Tidur --}}
    <section class="bg-white flex items-center justify-center mt-16 md:mt-20 pt-4 mt:pt-16">
        <div class="container mx-auto max-w-screen-xl p-4">
            <div class="flex flex-col items-center text-center">
                <h1 class="text-3xl md:text-4xl font-bold text-bold mb-4">Penilaian Kualitas Tidur</h1>
                <p class="text-primary mb-16 max-w-3xl">Tidur nyenyak adalah kunci hidup sehat! Jawab pertanyaan-pertanyaan berikut dalam skala 1-10 untuk mengevaluasi tidur Anda. Mari kita mulai!</p>
            </div>
            <div class="bg-secondary p-10 rounded-lg shadow-lg">
                <form class="space-y-8">
                    <!-- Pertanyaan 1 -->
                    <div>
                        <h5 class="text-lg  font-medium text-bold mb-2">Bagaimana Anda menilai kualitas tidur Anda dalam sebulan terakhir?</h5>
                        <p class="mb-4">(1: Sangat Buruk, 10: Sangat Baik)</p>
                        <div class="flex justify-start space-x-10">
                            @for($i = 1; $i <= 10; $i++)
                                <div class="flex items-center">
                                    <input id="quality-{{ $i }}" type="radio" value="{{ $i }}" name="quality" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="quality-{{ $i }}" class="ml-2 text-sm  font-medium text-bold">{{ $i }}</label>
                                </div>
                            @endfor
                        </div>
                    </div>

                    <!-- Pertanyaan 2 -->
                    <div>
                        <h5 class="text-lg  font-medium text-bold mb-2">Berapa lama biasanya Anda butuh waktu untuk tertidur pada malam hari?</h5>
                        <p class="mb-4">(1: > 60 menit, 10: ≤ 15 menit)</p>
                        <div class="flex justify-start space-x-10">
                            @for($i = 1; $i <= 10; $i++)
                                <div class="flex items-center">
                                    <input id="sleep-time-{{ $i }}" type="radio" value="{{ $i }}" name="sleep_time" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="sleep-time-{{ $i }}" class="ml-2 text-sm  font-medium text-bold">{{ $i }}</label>
                                </div>
                            @endfor
                        </div>
                    </div>

                    <!-- Pertanyaan 3 -->
                    <div>
                        <h5 class="text-lg  font-medium text-bold mb-2">Berapa lama biasanya Anda tidur pada malam hari?</h5>
                        <p class="mb-4">(1: < 5 jam, 10: > 7 jam)</p>
                        <div class="flex justify-start space-x-10">
                            @for($i = 1; $i <= 10; $i++)
                                <div class="flex items-center">
                                    <input id="sleep-duration-{{ $i }}" type="radio" value="{{ $i }}" name="sleep_duration" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="sleep-duration-{{ $i }}" class="ml-2 text-sm  font-medium text-bold">{{ $i }}</label>
                                </div>
                            @endfor
                        </div>
                    </div>

                    <!-- Pertanyaan 4 -->
                    <div>
                        <h5 class="text-lg font-medium text-bold mb-2">Seberapa sering Anda mengalami gangguan tidur seperti terbangun di malam hari?</h5>
                        <p class="mb-4">(1: ≥ 3 kali per minggu, 10: Tidak pernah)</p>
                        <div class="flex justify-start space-x-10">
                            @for($i = 1; $i <= 10; $i++)
                                <div class="flex items-center">
                                    <input id="sleep-disturbance-{{ $i }}" type="radio" value="{{ $i }}" name="sleep_disturbance" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="sleep-disturbance-{{ $i }}" class="ml-2 text-sm  font-medium text-bold">{{ $i }}</label>
                                </div>
                            @endfor
                        </div>
                    </div>

                    <!-- Pertanyaan 5 -->
                    <div>
                        <h5 class="text-lg  font-medium text-bold mb-2">Berapa banyak waktu yang Anda habiskan di tempat tidur dibandingkan dengan waktu tidur sebenarnya?</h5>
                        <p class="mb-4">(1: < 65%, 10: > 85%)</p>
                        <div class="flex justify-start space-x-10">
                            @for($i = 1; $i <= 10; $i++)
                                <div class="flex items-center">
                                    <input id="bed-time-ratio-{{ $i }}" type="radio" value="{{ $i }}" name="bed_time_ratio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="bed-time-ratio-{{ $i }}" class="ml-2 text-sm  font-medium text-bold">{{ $i }}</label>
                                </div>
                            @endfor
                        </div>
                    </div>

                    <!-- Pertanyaan 6 -->
                    <div>
                        <h5 class="text-lg  font-medium text-bold mb-2">Seberapa sering Anda menggunakan obat tidur untuk membantu tidur?</h5>
                        <p class="mb-4">(1: ≥ 3 kali per minggu, 10: Tidak pernah)</p>
                        <div class="flex justify-start space-x-10">
                            @for($i = 1; $i <= 10; $i++)
                                <div class="flex items-center">
                                    <input id="sleep-medication-{{ $i }}" type="radio" value="{{ $i }}" name="sleep_medication" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="sleep-medication-{{ $i }}" class="ml-2 text-sm  font-medium text-bold">{{ $i }}</label>
                                </div>
                            @endfor
                        </div>
                    </div>

                    <!-- Pertanyaan 7 -->
                    <div>
                        <h5 class="text-lg  font-medium text-bold mb-2">Seberapa sering Anda merasa kesulitan untuk tetap terjaga atau mengalami kantuk pada siang hari?</h5>
                        <p class="mb-4">(1: ≥ 3 kali per minggu, 10: Tidak pernah)</p>
                        <div class="flex justify-start space-x-10">
                            @for($i = 1; $i <= 10; $i++)
                                <div class="flex items-center">
                                    <input id="daytime-sleepiness-{{ $i }}" type="radio" value="{{ $i }}" name="daytime_sleepiness" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="daytime-sleepiness-{{ $i }}" class="ml-2 text-sm  font-medium text-bold">{{ $i }}</label>
                                </div>
                            @endfor
                        </div>
                    </div>

                    <div class="w-full px-4 pt-16 text-center">
                        <button type="submit" class="w-1/2 md:w-1/3 bg-primary text-white py-2 px-4 rounded-lg hover:bg-gray-500 focus:ring-4 focus:outline-none">
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
    </script>

</body>

</html>

<?php
if (!session()->has('user')) {
    echo "<script>window.location.href = '/login';</script>";
    return view('login');
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

    {{-- Form Penilaian Stres --}}
    <section class="bg-white flex items-center justify-center mt-16 md:mt-20 pt-4 mt:pt-16">
        <div class="container mx-auto max-w-screen-xl p-4">
            <div class="flex flex-col items-center text-center">
                <h1 class="text-3xl md:text-4xl font-bold text-bold mb-4">Penilaian Tingkat Stres</h1>
                <p class="text-primary mb-16 max-w-3xl">Stres dapat memengaruhi banyak aspek kehidupan kita. Jawab
                    pertanyaan-pertanyaan berikut dalam skala 1-10 untuk mengukur tingkat stres Anda. Ini akan membantu
                    kami memahami kondisi Anda dan memberikan saran yang lebih baik!</p>
            </div>
            <div class="bg-secondary p-10 rounded-lg shadow-lg">
                <form class="space-y-8">
                    <!-- Pertanyaan 1 -->
                    <div>
                        <h5 class="text-lg font-medium text-bold mb-2">Seberapa stres Anda merasa tentang kesehatan
                            fisik Anda?</h5>
                        <p class="mb-4">(1: Tidak Stres, 10: Sangat Stres)</p>
                        <div class="flex justify-start space-x-10">
                            @for ($i = 1; $i <= 10; $i++)
                                <div class="flex items-center">
                                    <input id="physical-health-stress-{{ $i }}" type="radio"
                                        value="{{ $i }}" name="physical_health_stress"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="physical-health-stress-{{ $i }}"
                                        class="ml-2 text-sm font-medium text-bold">{{ $i }}</label>
                                </div>
                            @endfor
                        </div>
                    </div>

                    <!-- Pertanyaan 2 -->
                    <div>
                        <h5 class="text-lg font-medium text-bold mb-2">Seberapa stres Anda merasa tentang kesehatan
                            mental Anda?</h5>
                        <p class="mb-4">(1: Tidak Stres, 10: Sangat Stres)</p>
                        <div class="flex justify-start space-x-10">
                            @for ($i = 1; $i <= 10; $i++)
                                <div class="flex items-center">
                                    <input id="mental-health-stress-{{ $i }}" type="radio"
                                        value="{{ $i }}" name="mental_health_stress"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="mental-health-stress-{{ $i }}"
                                        class="ml-2 text-sm font-medium text-bold">{{ $i }}</label>
                                </div>
                            @endfor
                        </div>
                    </div>

                    <!-- Pertanyaan 3 -->
                    <div>
                        <h5 class="text-lg font-medium text-bold mb-2">Seberapa stres Anda merasa tentang beban kerja
                            Anda?</h5>
                        <p class="mb-4">(1: Tidak Stres, 10: Sangat Stres)</p>
                        <div class="flex justify-start space-x-10">
                            @for ($i = 1; $i <= 10; $i++)
                                <div class="flex items-center">
                                    <input id="workload-stress-{{ $i }}" type="radio"
                                        value="{{ $i }}" name="workload_stress"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="workload-stress-{{ $i }}"
                                        class="ml-2 text-sm font-medium text-bold">{{ $i }}</label>
                                </div>
                            @endfor
                        </div>
                    </div>

                    <!-- Pertanyaan 4 -->
                    <div>
                        <h5 class="text-lg font-medium text-bold mb-2">Seberapa stres Anda merasa tentang hubungan
                            sosial Anda?</h5>
                        <p class="mb-4">(1: Tidak Stres, 10: Sangat Stres)</p>
                        <div class="flex justify-start space-x-10">
                            @for ($i = 1; $i <= 10; $i++)
                                <div class="flex items-center">
                                    <input id="social-relationship-stress-{{ $i }}" type="radio"
                                        value="{{ $i }}" name="social_relationship_stress"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="social-relationship-stress-{{ $i }}"
                                        class="ml-2 text-sm font-medium text-bold">{{ $i }}</label>
                                </div>
                            @endfor
                        </div>
                    </div>

                    <!-- Pertanyaan 5 -->
                    <div>
                        <h5 class="text-lg font-medium text-bold mb-2">Seberapa stres Anda merasa tentang keuangan Anda?
                        </h5>
                        <p class="mb-4">(1: Tidak Stres, 10: Sangat Stres)</p>
                        <div class="flex justify-start space-x-10">
                            @for ($i = 1; $i <= 10; $i++)
                                <div class="flex items-center">
                                    <input id="financial-stress-{{ $i }}" type="radio"
                                        value="{{ $i }}" name="financial_stress"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="financial-stress-{{ $i }}"
                                        class="ml-2 text-sm font-medium text-bold">{{ $i }}</label>
                                </div>
                            @endfor
                        </div>
                    </div>

                    <!-- Pertanyaan 6 -->
                    <div>
                        <h5 class="text-lg font-medium text-bold mb-2">Seberapa stres Anda merasa tentang kualitas tidur
                            Anda?</h5>
                        <p class="mb-4">(1: Tidak Stres, 10: Sangat Stres)</p>
                        <div class="flex justify-start space-x-10">
                            @for ($i = 1; $i <= 10; $i++)
                                <div class="flex items-center">
                                    <input id="sleep-quality-stress-{{ $i }}" type="radio"
                                        value="{{ $i }}" name="sleep_quality_stress"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="sleep-quality-stress-{{ $i }}"
                                        class="ml-2 text-sm font-medium text-bold">{{ $i }}</label>
                                </div>
                            @endfor
                        </div>
                    </div>

                    <!-- Pertanyaan 7 -->
                    <div>
                        <h5 class="text-lg font-medium text-bold mb-2">Seberapa stres Anda merasa tentang keseimbangan
                            antara pekerjaan dan kehidupan pribadi Anda?</h5>
                        <p class="mb-4">(1: Tidak Stres, 10: Sangat Stres)</p>
                        <div class="flex justify-start space-x-10">
                            @for ($i = 1; $i <= 10; $i++)
                                <div class="flex items-center">
                                    <input id="work-life-balance-stress-{{ $i }}" type="radio"
                                        value="{{ $i }}" name="work_life_balance_stress"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                    <label for="work-life-balance-stress-{{ $i }}"
                                        class="ml-2 text-sm font-medium text-bold">{{ $i }}</label>
                                </div>
                            @endfor
                        </div>
                    </div>

                    <div class="w-full px-4 pt-16 text-center">
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
    </script>

</body>

</html>

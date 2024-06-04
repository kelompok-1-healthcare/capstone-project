<?php
if (!session()->has('user')) {
    echo "<script>window.location.href = '/login';</script>";
    return view('login');
}

$listPertanyaan = [
    [
        'pertanyaan' => 'Seberapa stres Anda merasa tentang kesehatan fisik Anda?',
        'skala' => '(1: Tidak Stres, 10: Sangat Stres)',
        'id' => 'physical_health_stress',
    ],
    [
        'pertanyaan' => 'Seberapa stres Anda merasa tentang kesehatan mental Anda?',
        'skala' => '(1: Tidak Stres, 10: Sangat Stres)',
        'id' => 'mental_health_stress',
    ],
    [
        'pertanyaan' => 'Seberapa stres Anda merasa tentang beban kerja Anda?',
        'skala' => '(1: Tidak Stres, 10: Sangat Stres)',
        'id' => 'workload_stress',
    ],
    [
        'pertanyaan' => 'Seberapa stres Anda merasa tentang hubungan sosial Anda?',
        'skala' => '(1: Tidak Stres, 10: Sangat Stres)',
        'id' => 'social_relationship_stress',
    ],
    [
        'pertanyaan' => 'Seberapa stres Anda merasa tentang keuangan Anda?',
        'skala' => '(1: Tidak Stres, 10: Sangat Stres)',
        'id' => 'financial_stress',
    ],
    [
        'pertanyaan' => 'Seberapa stres Anda merasa tentang kualitas tidur Anda?',
        'skala' => '(1: Tidak Stres, 10: Sangat Stres)',
        'id' => 'sleep_quality_stress',
    ],
    [
        'pertanyaan' => 'Seberapa stres Anda merasa tentang keseimbangan antara pekerjaan dan kehidupan pribadi Anda?',
        'skala' => '(1: Tidak Stres, 10: Sangat Stres)',
        'id' => 'work_life_balance_stress',
    ],
];
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
                <form class="space-y-8" action="/api/tingkat-stres" method="POST">
                    @csrf
                    <input type="hidden" name="email" value="{{ session('user')['email'] }}">
                    @foreach ($listPertanyaan as $pertanyaan)
                        <div>
                            <h5 class="text-lg  font-medium text-bold mb-2">{{ $pertanyaan['pertanyaan'] }}</h5>
                            <p class="mb-4">{{ $pertanyaan['skala'] }}</p>
                            <div class="flex justify-start space-x-10">
                                @for ($i = 1; $i <= 10; $i++)
                                    <div class="flex items-center">
                                        <input id="{{ $pertanyaan['id'] }}-{{ $i }}" type="radio"
                                            value="{{ $i }}" name="{{ $pertanyaan['id'] }}"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                                        <label for="{{ $pertanyaan['id'] }}-{{ $i }}"
                                            class="ml-2 text-sm  font-medium text-bold">{{ $i }}</label>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    @endforeach

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

        @if (session('error'))
            alert("{{ session('error') }}");
        @endif
    </script>

</body>

</html>

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

    {{-- Fitur Klasifikasi --}}
    <section class="bg-white mt-16 md:mt-20 pt-4 mt:pt-16">
        <div class="container mx-auto max-w-screen-xl p-4">
            <div class="">
                <h2 class="text-2xl md:text-3xl font-bold text-bold mb-20 text-center">Hasil Klasifikasi Gangguan Tidur
                    Anda</h2>
                <div class="flex justify-center">
                    <img class="w-max-lg h-auto rounded-t-lg object-cover " src="{{ asset('assets/hero-pic.svg') }}"
                        alt="" draggable="false" />
                </div>

                <p class="text-lg text-primary mb-4 mt-14">Berdasarkan informasi yang Anda berikan, ada indikasi bahwa
                    Anda mengalami gangguan tidur. Jangan khawatir, ada banyak cara yang dapat membantu Anda memperbaiki
                    kualitas tidur. Konsultasikan dengan profesional kesehatan untuk penanganan lebih lanjut dan
                    mulailah mengambil langkah-langkah yang tepat untuk meningkatkan kualitas tidur Anda.</p>
                <div class="text-left mt-8">
                    <h3 class="text-xl font-bold text-primary mb-4">Berikut beberapa tips yang dapat membantu Anda
                        meningkatkan kualitas tidur:</h3>
                    <ul class="list-none mb-6 space-y-2">
                        <li class="text-primary"><span class="font-bold">1.</span></i>Tetapkan jadwal tidur yang
                            konsisten setiap hari.</li>
                        <li class="text-primary"><span class="font-bold">2.</span></i>Hindari kafein dan makanan berat
                            sebelum tidur.</li>
                        <li class="text-primary"><span class="font-bold">3.</span></i>Ciptakan lingkungan tidur yang
                            nyaman dan bebas dari gangguan.</li>
                        <li class="text-primary"><span class="font-bold">4.</span></i>Lakukan relaksasi sebelum tidur
                            seperti membaca buku atau mandi air hangat.</li>
                        <li class="text-primary"><span class="font-bold">5.</span></i>Batasi penggunaan perangkat
                            elektronik satu jam sebelum tidur.</li>
                    </ul>
                </div>
                <p class="text-lg text-primary">Jika Anda merasa perlu bantuan lebih lanjut, jangan ragu untuk
                    menghubungi tenaga medis profesional atau mengikuti program perbaikan tidur yang kami
                    rekomendasikan. Kesehatan tidur Anda sangat penting untuk kualitas hidup yang lebih baik.</p>
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

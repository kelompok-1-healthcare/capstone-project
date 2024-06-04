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
    <section class="bg-white flex items-center justify-center mt-16 md:mt-20 pt-4 mt:pt-16">
        <div class="container mx-auto max-w-screen-xl p-4">
            <div class="flex flex-col items-center text-center">
                <h1 class="text-3xl md:text-4xl font-bold text-bold mb-4">Selamat Datang</h1>
                <p class="text-primary mb-16 max-w-md">Temukan apakah Anda mengalami gangguan tidur dan pelajari cara
                    mengatasinya dengan solusi yang tepat dan efektif. Mari mulai perjalanan Anda menuju tidur yang
                    lebih baik dan hidup yang lebih sehat!</p>
                <img src="{{ asset('assets/klasifikasi-pic.svg') }}" alt="Sleeping Illustration"
                    class="w-1/2 md:w-1/3 object-contain mb-16" draggable="false">
                <a href="/form-kualitas-tidur"
                    class="w-1/2 md:w-1/3 bg-primary text-white py-2 px-4 rounded-lg hover:bg-gray-500 focus:ring-4 focus:outline-none">Mulai
                    Sekarang</a>
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

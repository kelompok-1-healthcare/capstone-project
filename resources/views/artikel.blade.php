<?php
$listArtikel = [
    [
        'judul' => 'Badan Sakit saat Bangun Tidur?',
        'deskripsi' => 'Pernahkah Anda mengalami badan sakit saat bangun tidur di pagi hari? Biasanya, hal ini terjadi jika Anda melakukan aktivitas berat...',
        'link' => 'https://wolipop.detik.com/health-and-diet/d-6448891/3-cara-agar-cepat-tidur-dengan-metode-ilmiah-2-menit-langsung-pules',
        'gambar' => 'https://akcdn.detik.net.id/community/media/visual/2022/07/20/ilustrasi-wanita-tidur_169.jpeg?w=700&q=90',
    ],
    [
        'judul' => 'Apa itu Microsleep?',
        'deskripsi' => 'Pernahkah kamu tidak sadar sudah tertidur selama beberapa detik? Jika ya, kamu mungkin telah mengalami microsleep...',
        'link' => 'https://www.detik.com/jateng/berita/d-7356049/apa-itu-microsleep-ini-pengertian-penyebab-gejala-hingga-penanganannya',
        'gambar' => 'https://akcdn.detik.net.id/community/media/visual/2022/01/29/ilustrasi-sakit-kepala-atau-pusing-saat-bangun-tidur_169.jpeg?w=700&q=90',
    ],
    [
        'judul' => 'Kenali Tanda Gangguan Tidur',
        'deskripsi' => 'Pakar kesehatan tidur dr. Andreas Prasadja, RPSGT, menyebut ada 3 gejala dalam gangguan tidur. Apa bedanya ketiga gejala tersebut?',
        'link' => 'https://20.detik.com/detikupdate/20240223-240223091/3-tanda-kamu-mengalami-gangguan-tidur',
        'gambar' => 'assets/gambar-3.svg',
    ],
    [
        'judul' => 'Kenapa Sering Mengantuk?',
        'deskripsi' => 'Kenapa sering ngantuk? Jika pertanyaan ini muncul, mungkin sudah saatnya kamu mengevaluasi gaya hidup sehari-hari karena penyebabnya beragam...',
        'link' => 'https://health.detik.com/berita-detikhealth/d-7335957/kenapa-sering-mengantuk-ini-11-penyebabnya-nggak-cuma-lelah',
        'gambar' => 'https://akcdn.detik.net.id/community/media/visual/2019/05/31/e367d77a-3b0f-4931-9674-a4c8d16abcd9_169.jpeg?w=700&q=90',
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

    {{-- artikel --}}
    <section class="items-center justify-center min-h-screen mt-40">
        <div class="container mx-auto max-w-screen-xl p-4">

            {{-- search --}}
            <form class="max-w-xl mx-auto flex items-center">
                <input type="search" id="default-search"
                    class="block w-full py-2 px-4 text-sm text-gray-900 placeholder-gray-500 border bg-gray-200 border-primary rounded-l-lg focus:outline-none focus:ring-primary focus:border-primary transition-colors duration-300"
                    placeholder="Cari Artikel" required />
                <button type="submit"
                    class="bg-primary text-white py-2 px-4 rounded-r-lg hover:bg-gray-500 focus:outline-none focus:ring-4 transition-colors duration-300">Cari</button>
            </form>

            {{-- row 1 --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 grid-rows-2 gap-4 mt-20 mx-auto">
                {{-- <div
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
                <div
                    class="max-w-sm bg-secondary border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img class="w-full h-auto rounded-t-lg object-cover" src={{ asset('assets/gambar-4.svg') }}
                        alt="" draggable="false" />
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-bold">
                            Kenapa Sering Mengantuk?
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            Kenapa sering ngantuk? Jika pertanyaan ini muncul, mungkin sudah saatnya kamu mengevaluasi
                            gaya hidup sehari-hari karena penyebabnya beragam...
                        </p>
                        <a href="https://health.detik.com/berita-detikhealth/d-7335957/kenapa-sering-mengantuk-ini-11-penyebabnya-nggak-cuma-lelah"
                            class="text-blue-600 hover:underline hover:text-blue-800">
                            Baca selengkapnya
                        </a>
                    </div>
                </div>
                <div
                    class="max-w-sm bg-secondary border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img class="w-full h-auto rounded-t-lg object-cover" src={{ asset('assets/gambar-5.svg') }}
                        alt="" draggable="false" />
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-bold">
                            Kenali Gejala Sleep Apnea
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            Sleep apnea atau apnea tidur adalah gangguan yang menyebabkan pernapasan berhenti sementara
                            saat sedang tidur. Pengidap sleep apnea bisa mengalami henti napas...
                        </p>
                        <a href="https://health.detik.com/penyakit/sleep-apnea-d-7122517"
                            class="text-blue-600 hover:underline hover:text-blue-800">
                            Baca selengkapnya
                        </a>
                    </div>
                </div>
                <div
                    class="max-w-sm bg-secondary border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img class="w-full h-auto rounded-t-lg object-cover" src={{ asset('assets/gambar-6.svg') }}
                        alt="" draggable="false" />
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-bold">
                            5 Cara Sudahi Insomnia
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            Insomnia adalah salah satu gangguan kesulitan tidur. Sebanyak 30 persen orang dewasa di
                            dunia mengalami gangguan tidur. Siapa sangkainsomnia bisa meningkatkan risiko...
                        </p>
                        <a href="https://www.detik.com/jatim/berita/d-6963433/5-cara-sudahi-insomnia-agar-tak-berisiko-sakit-jantung"
                            class="text-blue-600 hover:underline hover:text-blue-800">
                            Baca selengkapnya
                        </a>
                    </div>
                </div> --}}

                <?php
                    foreach ($listArtikel as $artikel) {
                ?>
                <div
                    class="max-w-sm bg-secondary border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img class="w-full h-64 rounded-t-lg object-cover" src={{ asset($artikel['gambar']) }}
                        alt="" draggable="false" />
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-bold">
                            <?php echo $artikel['judul']; ?>
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            <?php echo $artikel['deskripsi']; ?>
                        </p>
                        <a href="<?php echo $artikel['link']; ?>" class="text-blue-600 hover:underline hover:text-blue-800">
                            Baca selengkapnya
                        </a>
                    </div>
                </div>
                <?php
                    } 
                ?>
            </div>
        </div>
    </section>

    <nav class="flex justify-center mt-10 mb-10">
        <ul class="flex items-center -space-x-px h-8 text-sm">
            <li>
                <a href="#"
                    class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    <span class="sr-only">Previous</span>
                    <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">3</a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    <span class="sr-only">Next</span>
                    <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                </a>
            </li>
        </ul>
    </nav>

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

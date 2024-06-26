<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* scrollbar style */
        /* Firefox (uncomment to work in Firefox, although other properties will not work!)  */
        /** {
            scrollbar-width: thin;
            scrollbar-color: #025F80 #B9D6DB;
            }*/

        /* Chrome, Edge and Safari */
        *::-webkit-scrollbar {
            width: 5px;
        }

        *::-webkit-scrollbar-track {
            border-radius: 5px;
        }

        *::-webkit-scrollbar-track:hover {
            background-color: #B8C0C2;
        }

        *::-webkit-scrollbar-track:active {
            background-color: #B8C0C2;
        }

        *::-webkit-scrollbar-thumb {
            border-radius: 2px;
            background-color: #025F80;
        }

        *::-webkit-scrollbar-thumb:hover {
            background-color: #025F85;
        }

        *::-webkit-scrollbar-thumb:active {
            background-color: #025F80;
        }
    </style>

</head>

<body>
    {{-- navbar --}}
    @include('generalNavbar')

    {{-- hero section --}}
    <section class="bg-secondary flex items-center justify-center min-h-screen">
        <div class="container mx-auto max-w-screen-xl p-4">
            <div class="flex flex-col md:flex-row items-center justify-between text-center md:text-left">
                <div class="order-2 md:order-1 mb-6 md:mb-0 md:mr-6 max-w-lg">
                    <h1 class="text-3xl md:text-4xl font-bold text-bold">Atasi Masalah Tidur dan Optimalkan Kualitas
                        Tidur Anda</h1>
                    <p class="mt-4 text-gray-600">Rancang hidup tanpa stres di era kesadaran dan kesejahteraan. Bawa
                        kedamaian ke malam Anda dengan metode yang terbukti hanya dengan bernapas, rileks, dan tidur!
                    </p>
                    <div class="flex justify-center md:justify-start mt-6 w-full md:w-auto order-3 md:order-none">
                        <a href="/register"
                            class="text-white bg-primary hover:bg-gray-500 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-4 py-2 text-center">
                            Mulai
                        </a>
                    </div>
                </div>
                <img src="{{ asset('assets/hero-pic.svg') }}" alt="Sleeping Illustration"
                    class="w-full object-contain  order-1 md:order-2" draggable="false">
            </div>
        </div>
    </section>

    {{-- artikel --}}
    <section class="items-center justify-center min-h-screen mt-40">
      <div class="container mx-auto max-w-screen-xl p-4">
          <h1 class="text-3xl md:text-4xl font-bold text-bold text-center mb-20">Artikel terkait Gangguan Tidur</h1>
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
              {{-- card 1 --}}
              <div
                  class="max-w-sm bg-secondary border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                  <img class="w-full h-auto rounded-t-lg object-cover" src={{ asset('assets/gambar-1.svg') }}
                      alt="" draggable="false"/>
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
                      alt="" draggable="false"/>
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
                      alt="" draggable="false"/>
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
                  <a href="/artikel"
                      class="text-white bg-primary hover:bg-gray-500 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-4 py-2 mt-6 lg:mt-0">Jelajahi</a>
              </div>
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

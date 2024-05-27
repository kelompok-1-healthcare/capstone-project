<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
  {{-- navbar --}}
  <nav id="navbar" class="fixed top-0 w-full z-10">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4 bg-transparent transition-all duration-500 border-b border-transparent dark:bg-gray-900">
      <a class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src={{asset('assets/logo.svg')}} class="h-8" alt="Flowbite Logo" />
      </a>
      <div class="flex items-center space-x-6 rtl:space-x-reverse">
        <a href="#" class="text-sm font-bold text-bold hover:underline">Login</a>
        <button href="#" class="text-white bg-primary hover:bg-gray-500 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-4 py-2 text-center">Sign Up
        </button>
      </div>
    </div>
  </nav>

  {{-- hero section --}}
  <section class="bg-secondary flex items-center justify-center min-h-screen">
    <div class="container mx-auto max-w-screen-xl p-4 ">
      <div class="flex flex-col md:flex-row items-center justify-between">
        <div class="mb-6 md:mb-0 md:mr-6 max-w-lg">
          <h1 class="text-3xl md:text-4xl font-bold text-bold">Atasi Masalah Tidur dan Optimalkan Kualitas Tidur Anda</h1>
          <p class="mt-4 text-gray-600">Rancang hidup tanpa stres di era kesadaran dan kesejahteraan. Bawa kedamaian ke malam Anda dengan metode yang terbukti—hanya dengan bernapas, rileks, dan tidur!</p>
          <button href="#" class="text-white bg-primary hover:bg-gray-500 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-4 py-2 mt-6 text-center">Sign Up
          </button>
        </div>
        <img src={{asset('assets/hero-pic.svg')}} alt="Sleeping Illustration" class="w-full  object-contain">
      </div>
    </div>
  </section>

  <section class="items-center justify-center min-h-screen mt-40">
    <h1 class="text-3xl md:text-4xl font-bold text-bold text-center mb-20">Artikel terkait Gangguan Tidur</h1>
    <div class="container mx-auto max-w-screen-xl p-4">
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        {{-- card 1 --}}
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <a href="#">
              <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
          </a>
          <div class="p-5">
              <a href="#">
                  <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
              </a>
              <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
              <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white  bg-primary rounded-lg hover:bg-gray-500 focus:ring-4 focus:outline-none">
                  Read more
                  <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                  </svg>
              </a>
          </div>
        </div>
        {{-- card 2 --}}
        <div class="max-w-sm bg-secondary border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <a href="#">
              <img class="rounded-t-lg w-full" src={{asset('assets/gambar-3.svg')}} alt="" />
          </a>
          <div class="p-5">
              <a href="#">
                  <h5 class="mb-2 text-2xl font-bold tracking-tight text-bold dark:text-white">Kenali Tanda Gangguan Tidur</h5>
              </a>
              <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
              <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary rounded-lg hover:bg-gray-500 focus:ring-4 focus:outline-none">
                  Read more
                  <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                  </svg>
              </a>
          </div>
        </div>
        {{-- card 3 --}}
        <div class="max-w-sm bg-secondary border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <a href="#">
              <img class="rounded-t-lg" src={{asset('assets/gambar-3.svg')}} alt="" />
          </a>
          <div class="p-5">
              <a href="#">
                  <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Kenali Tanda Gangguan Tidur</h5>
              </a>
              <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Pakar kesehatan tidur dr. Andreas Prasadja, RPSGT, menyebut ada 3 gejala dalam gangguan tidur. Apa bedanya ketiga gejala tersebut?</p>
              <a href="#" class="text-sm font-bold text-bold hover:underline">
                Baca selengkapnya
                  <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                  </svg>
              </a>
          </div>
        </div>
      </div>
      <div class="flex flex-col lg:flex-row justify-between items-start mt-8">
        <div class="lg:w-3/4 lg:mr-6">
          <p class="text-primary text-center lg:text-left">Jelajahi artikel kami untuk informasi lebih lanjut tentang cara mengatasi gangguan tidur dan meningkatkan kualitas tidur Anda. Temukan solusi praktis dan terbukti yang membantu Anda tidur lebih nyaman setiap malam.</p>
        </div>
        <div class="ml-auto mx-auto lg:text-center lg:mx-0">
          <button href="#" class="text-white bg-primary hover:bg-gray-500 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-4 py-2 mt-6 lg:mt-0">Jelajahi</button>
        </div>
      </div>
    </div>
  </section>



</body>
</html>
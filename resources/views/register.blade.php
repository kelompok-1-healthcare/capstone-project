<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <section class="bg-white flex items-center justify-center min-h-screen">
        <div class="container mx-auto px-4">
          <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">
            <div class="flex flex-wrap md:flex-nowrap">
              <div class="w-full md:w-1/2 bg-[#025F80] flex items-center justify-center p-6">
                <img src={{asset('assets/robot.svg')}} alt="Robot" class="max-w-full">
              </div>
              <div class="w-full md:w-1/2 bg-[#B9D6DB] p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4 text-center">Daftar Akun</h2>
                <p class="text-gray-600 mb-4 text-center">Jika sudah memiliki akun silahkan <a href="#" class="text-blue-500">masuk disini.</a></p>
                {{-- <form action="{{ route('register') }}" method="POST"> --}}
                  @csrf
                  <div class="mb-4">
                    <label for="name" class="block text-gray-700">Nama Lengkap</label>
                    <input type="text" name="name" id="name" class="block w-full mt-1 p-2 border rounded-md bg-[#EAF0F7]" required>
                  </div>
                  <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" name="email" id="email" class="block w-full mt-1 p-2 border rounded-md bg-[#EAF0F7]" required>
                  </div>
                  <div class="mb-4">
                    <label for="password" class="block text-gray-700">Password</label>
                    <input type="password" name="password" id="password" class="block w-full mt-1 p-2 border rounded-md bg-[#EAF0F7]" required>
                  </div>
                  <button type="submit" class="w-full bg-[#025F80] text-white py-2 rounded-md hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Daftar</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>
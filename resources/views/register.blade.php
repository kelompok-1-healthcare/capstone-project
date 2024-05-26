<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <section class="bg-white flex items-center justify-center min-h-screen">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">
                <div class="flex flex-wrap md:flex-nowrap">
                    <div class="left w-full md:w-1/2 bg-primary flex items-center justify-center p-6">
                        <img src={{ asset('assets/robot.svg') }} alt="Robot" class="max-w-full" draggable="false">
                    </div>
                    <div class="right w-full md:w-3/4 bg-secondary p-6">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4 text-center">Daftar Akun</h2>
                        <p class="text-gray-600 mb-4 text-center">Jika sudah memiliki akun silahkan <a href="#"
                                class="text-blue-600 hover:underline hover:underline-offset-2 hover:text-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2
                                ">Masuk</a>
                        </p>
                        {{-- /api/register --}}
                        <form action="/api/register" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="name" class="block text-gray-700">Nama Lengkap</label>
                                <input type="text" name="name" id="name"
                                    class="block w-full mt-1 p-2 border rounded-md bg-slate-50" required>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-gray-700">Email</label>
                                <input type="email" name="email" id="email"
                                    class="block w-full mt-1 p-2 border rounded-md bg-slate-50" required>
                            </div>
                            <div class="mb-4 w-full flex">
                                <div class="w-1/2 mr-2">
                                    <label for="password" class="block text-gray-700">Password</label>
                                    <input type="password" name="password" id="password"
                                        class="block w-full mt-1 p-2 border rounded-md bg-slate-50" required>
                                </div>
                                <div class="w-1/2 ml-2">
                                    <label for="password_confirmation" class="block text-gray-700">Konfirmasi
                                        Password</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                        class="block w-full mt-1 p-2 border rounded-md bg-slate-50" required>
                                </div>
                            </div>
                            <button type="submit"
                                class="w-full bg-primary text-white py-2 rounded-md hover:bg-gray-500 focus:outline-none transition duration-300">Daftar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Toastr -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
        @if (session('success'))
            alert("{{ session('success') }}");
        @endif

        @if (session('error'))
            alert("{{ session('error') }}");
        @endif
    </script>

</body>

</html>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <nav class="bg-white border-gray-200 dark:bg-gray-900 absolute w-full top-0 left-0 z-10">
        <div class="flex items-center p-4">
            <a href="javascript:history.back()" class="text-blue-500 hover:text-blue-700 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                <span class="ml-2">Back</span>
            </a>
        </div>
    </nav>

    <section class="bg-white flex items-center justify-center min-h-screen pt-20 md:pt-24 pb-20 md:pb-24">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto rounded-lg shadow-md overflow-hidden">
                <div class="flex flex-wrap md:flex-nowrap">
                    <div class="left w-full md:w-1/2 bg-primary flex items-center justify-center p-6">
                        <img src={{ asset('assets/robot.svg') }} alt="Robot" class="max-w-full md:max-w-xs"
                            draggable="false">
                    </div>
                    <div class="right w-full md:w-3/4 bg-secondary p-6">
                        <h2 class="text-2xl font-bold text-bold mb-4 text-center">Login</h2>
                        <p class="text-gray-600 mb-4 text-center">Jika belum memiliki akun silahkan <a href="/register"
                                class="text-blue-600 hover:underline hover:underline-offset-2 hover:text-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2
                                ">Daftar
                                disini</a>.
                        </p>
                        <form action="/api/login" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="email" class="block text-gray-700">Email</label>
                                <input type="email" name="email" id="email"
                                    class="block w-full mt-1 p-2 border rounded-md bg-slate-50" required>
                            </div>
                            <div class="mb-4">
                                <label for="password" class="block text-gray-700">Password</label>
                                <input type="password" name="password" id="password"
                                    class="block w-full mt-1 p-2 border rounded-md bg-slate-50" required>
                            </div>
                            <button
                                class="w-full bg-primary text-white py-2 rounded-md hover:bg-gray-500 focus:outline-none transition duration-300"
                                id="btn_login">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        @if (session('success'))
            alert("{{ session('success') }}");
        @elseif (session('error'))
            alert("{{ session('error') }}");
        @endif
    </script>


</body>

</html>

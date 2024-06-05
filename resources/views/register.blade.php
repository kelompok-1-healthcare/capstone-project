<?php
$currentPage = basename($_SERVER['REQUEST_URI']);
// if (session('user') && ($currentPage == 'login' || $currentPage == 'register')) {
//     echo "<script>window.location.href = '/';</script>";
// }
?>

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
                        <h2 class="text-2xl font-bold text-bold mb-4 text-center">Daftar Akun</h2>
                        <p class="text-gray-600 mb-4 text-center">Jika sudah memiliki akun silahkan <a href="/login"
                                class="text-blue-600 hover:underline hover:underline-offset-2 hover:text-blue-800">Masuk
                                disini</a>.
                        </p>
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
                            <div class="mb-4">
                                <label for="password" class="block text-gray-700">Password</label>
                                <input type="password" name="password" id="password"
                                    class="block w-full mt-1 p-2 border rounded-md bg-slate-50" required>
                            </div>
                            <div class="mb-4">
                                <label for="password_confirmation" class="block text-gray-700">Konfirmasi
                                    Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    class="block w-full mt-1 p-2 border rounded-md bg-slate-50" required>
                            </div>
                            <button
                                class="w-full bg-primary text-white py-2 rounded-md hover:bg-gray-500 focus:outline-none transition duration-300"
                                id="btn_daftar">Daftar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="successModal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                {{-- <button type="button"
                    class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="successModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button> --}}
                <div
                    class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900 p-2 flex items-center justify-center mx-auto mb-3.5">
                    <svg aria-hidden="true" class="w-8 h-8 text-green-500 dark:text-green-400" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Success</span>
                </div>
                <p class="mb-4 text-lg font-semibold text-gray-900 dark:text-white">Registration Success</p>
                <button data-modal-toggle="successModal" type="button"
                    class="py-2 px-3 text-sm font-medium text-center text-white rounded-lg bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:focus:ring-primary-900"
                    onclick="window.location.href = '/login'">
                    Go to Login
                </button>
            </div>
        </div>
    </div>

    <div id="errorModal" tabindex="-1" aria-hidden="true" {{-- buat ada ditengah layar --}}
        class="hidden absolute top-1/4 left-1/2 transform -translate-x-1/2 z-50 w-full max-w-md h-modal">
        <!-- Modal content -->
        <div class="relative px-4 py-20 text-center bg-white rounded-lg shadow dark:bg-gray-800 ">
            <div
                class="w-16 h-16 rounded-full bg-red-100 dark:bg-red-900 p-2 flex items-center justify-center mx-auto mb-3.5">
                <svg aria-hidden="true" class="w-12 h-12 text-red-500 dark:text-red-400" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <line x1="0" y1="0" x2="20" y2="20" stroke="currentColor"
                        stroke-width="2" />
                    <line x1="20" y1="0" x2="0" y2="20" stroke="currentColor"
                        stroke-width="2" />
                </svg>

                <span class="sr-only">Error</span>
            </div>
            <p class="mb-4 text-lg font-semibold text-gray-900 dark:text-white" id="errormsg">Registration Failed
            </p>
            <button data-modal-toggle="errorModal" type="button"
                class="py-2 px-3 text-sm font-medium text-center text-white rounded-lg bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-900"
                onclick="document.getElementById('errorModal').classList.add('hidden')">
                Try Again
            </button>
        </div>
    </div>
    </div>

    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <script src="assets/plugins/global/plugins.bundle.js"></script>

    <script>
        @if (session('success'))
            // TODO
            alert('Registration Success');
        @elseif (session('error'))
            // TODO
            alert('Registration Failed : ' + '{{ session('error') }}');
        @endif
    </script>

</body>

</html>

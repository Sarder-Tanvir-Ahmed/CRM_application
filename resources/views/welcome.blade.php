<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <!-- Navigation -->
        

        <!-- Page Heading -->
        <header class="bg-blue-500">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold leading-tight text-gray-900">
                    Welcome to Our Company Portal
                </h2>
            </div>
        </header>

         <!-- Page Content -->
        <!-- Page Content -->
        <main class="flex items-center justify-center h-screen">
            <div class="bg-blue-200 p-10 rounded-lg">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3">
                    <!-- Admin Login -->
                    <form action="{{ route('login') }}" method="GET">
                        @csrf
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50 w-full">
                            <span class="text-lg font-semibold">Admin Login</span>
                        </button>
                    </form>
                    <form action="{{ route('register') }}" method="GET">
                        @csrf
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50 w-full">
                            <span class="text-lg font-semibold">AR</span>
                        </button>
                    </form>


                    <!-- Employee Login -->
                    <form action="{{ route('login') }}" method="GET">
                        @csrf
                        <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-opacity-50 w-full">
                            <span class="text-lg font-semibold">Employee Login</span>
                        </button>
                    </form>

                    <!-- Manager Login -->
                    <form action="{{ route('login') }}" method="GET">
                        @csrf
                        <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-yellow-600 focus:ring-opacity-50 w-full">
                            <span class="text-lg font-semibold">Manager Login</span>
                        </button>
                    </form>
                </div>
            </div>
        </main>


         {{-- <main class="flex items-center justify-center h-screen">
            <div class="bg-blue-200 p-10 rounded-lg">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3">
                    <!-- Admin Login -->
                    <div class="bg-white overflow-hidden shadow-md rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <h3 class="text-lg font-semibold mb-4">Admin Login Portal</h3>
                            <!-- Uncomment and add route for Admin Login -->
                            <a href="{{ route('admin-login') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50">Admin-Login</a>
                        </div>
                    </div>

                    <!-- Employee Login -->
                    <div class="bg-white overflow-hidden shadow-md rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <h3 class="text-lg font-semibold mb-4">Employee Login Portal</h3>
                            <!-- Uncomment and add route for Employee Login -->
                            <a href="{{ route('login') }}" class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-opacity-50">Login</a>
                        </div>
                    </div>

                    <!-- Manager Login -->
                    <div class="bg-white overflow-hidden shadow-md rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <h3 class="text-lg font-semibold mb-4">Manager Login Portal</h3>
                            <!-- Uncomment and add route for Manager Login -->
                            <a href="{{ route('login') }}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-yellow-600 focus:ring-opacity-50">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </main> --}}

        <!-- Footer -->
        <footer class="bg-gray-200 border-t">
            <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
                &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.
            </div>
        </footer>
    </div>
</body>
</html>

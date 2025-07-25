<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Saudi Arabia Health Workforce Planning System') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=tajawal:400,500,700|instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Styles -->
    @stack('styles')
</head>
<body class="font-sans antialiased bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100">
    <div id="app">
        <!-- Language Switcher for Mobile -->
        <div class="absolute top-4 right-4 sm:hidden">
            <button id="language-toggle-mobile" class="text-gray-600 dark:text-gray-300 focus:outline-none">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path>
                </svg>
            </button>
            <div id="language-menu-mobile" class="hidden absolute right-0 mt-2 w-40 rounded-md shadow-lg bg-white dark:bg-gray-700 ring-1 ring-black ring-opacity-5">
                <div class="py-1">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600">English</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600">العربية</a>
                </div>
            </div>
        </div>

        <!-- Dark Mode Toggle -->
        <div class="absolute top-4 left-4 sm:hidden">
            <button id="theme-toggle-mobile" class="text-gray-600 dark:text-gray-300 focus:outline-none">
                <!-- Sun Icon (shown in dark mode) -->
                <svg id="theme-toggle-light-icon-mobile" class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                </svg>
                <!-- Moon Icon (shown in light mode) -->
                <svg id="theme-toggle-dark-icon-mobile" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                </svg>
            </button>
        </div>

        <!-- Content -->
        <main>
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="py-6">
            <div class="container mx-auto px-4">
                <div class="flex flex-col items-center">
                    <div class="mb-4">
                        <p class="text-sm text-center text-gray-600 dark:text-gray-400">
                            © {{ date('Y') }} {{ __('Saudi Arabia Health Workforce Planning System') }}
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script>
        // Mobile Language Menu Toggle
        document.getElementById('language-toggle-mobile').addEventListener('click', function() {
            document.getElementById('language-menu-mobile').classList.toggle('hidden');
        });

        // Theme Toggle (Mobile)
        document.getElementById('theme-toggle-mobile').addEventListener('click', function() {
            if (localStorage.getItem('color-theme') === 'dark' || 
               (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
                document.getElementById('theme-toggle-dark-icon-mobile').classList.remove('hidden');
                document.getElementById('theme-toggle-light-icon-mobile').classList.add('hidden');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
                document.getElementById('theme-toggle-dark-icon-mobile').classList.add('hidden');
                document.getElementById('theme-toggle-light-icon-mobile').classList.remove('hidden');
            }
        });

        // Check theme on load
        if (localStorage.getItem('color-theme') === 'dark' || 
           (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
            document.getElementById('theme-toggle-dark-icon-mobile').classList.add('hidden');
            document.getElementById('theme-toggle-light-icon-mobile').classList.remove('hidden');
        } else {
            document.documentElement.classList.remove('dark');
            document.getElementById('theme-toggle-dark-icon-mobile').classList.remove('hidden');
            document.getElementById('theme-toggle-light-icon-mobile').classList.add('hidden');
        }

        // Close dropdowns when clicking outside
        document.addEventListener('click', function(event) {
            if (!event.target.closest('#language-toggle-mobile') && !event.target.closest('#language-menu-mobile')) {
                document.getElementById('language-menu-mobile').classList.add('hidden');
            }
        });
    </script>

    @stack('scripts')
</body>
</html> 
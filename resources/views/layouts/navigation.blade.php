<nav class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 fixed w-full z-30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="flex items-center">
                        <img class="h-10 w-auto" src="{{ asset('images/logo.svg') }}" alt="Logo">
                        <span class="ml-3 text-lg font-semibold text-primary-600 dark:text-primary-400">{{ __('Health Workforce Planning') }}</span>
                    </a>
                </div>

                <!-- Main Navigation Links (Desktop) -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <a href="{{ route('dashboard') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-primary-500 dark:border-primary-400 text-sm font-medium leading-5 text-gray-900 dark:text-gray-100 focus:outline-none focus:border-primary-700 transition duration-150 ease-in-out">
                        {{ __('Dashboard') }}
                    </a>
                    <a href="{{ route('workforce.analysis') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300 dark:hover:border-gray-600 focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-600 transition duration-150 ease-in-out">
                        {{ __('Workforce Analysis') }}
                    </a>
                    <a href="{{ route('projections.index') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300 dark:hover:border-gray-600 focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-600 transition duration-150 ease-in-out">
                        {{ __('Projections') }}
                    </a>
                    <a href="{{ route('scenarios.index') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300 dark:hover:border-gray-600 focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-600 transition duration-150 ease-in-out">
                        {{ __('Scenario Planning') }}
                    </a>
                    <a href="{{ route('reports.index') }}" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300 dark:hover:border-gray-600 focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-600 transition duration-150 ease-in-out">
                        {{ __('Reports') }}
                    </a>
                </div>
            </div>

            <!-- Right Side -->
            <div class="flex items-center ml-6">
                <!-- Language Switcher -->
                <div class="relative mr-3">
                    <button id="language-toggle" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none focus:text-gray-700 dark:focus:text-gray-300">
                        <span class="sr-only">{{ __('Switch Language') }}</span>
                        <span class="text-sm font-medium">{{ app()->getLocale() == 'en' ? 'English' : 'العربية' }}</span>
                        <svg class="ml-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="language-menu" class="hidden absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white dark:bg-gray-700 ring-1 ring-black ring-opacity-5">
                        <div class="py-1">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600">English</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600">العربية</a>
                        </div>
                    </div>
                </div>

                <!-- Dark Mode Toggle -->
                <button id="theme-toggle" class="text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 mr-3">
                    <span class="sr-only">{{ __('Toggle Dark Mode') }}</span>
                    <!-- Sun Icon (shown in dark mode) -->
                    <svg id="theme-toggle-light-icon" class="hidden h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    <!-- Moon Icon (shown in light mode) -->
                    <svg id="theme-toggle-dark-icon" class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                    </svg>
                </button>

                <!-- User Dropdown -->
                <div class="relative">
                    <button id="user-menu-button" class="flex items-center text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition duration-150 ease-in-out">
                        <span class="sr-only">{{ __('Open user menu') }}</span>
                        <div class="h-8 w-8 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-sm font-medium text-gray-600 dark:text-gray-300">
                            <!-- Display first letter of user name or full avatar if available -->
                            U
                        </div>
                        <svg class="ml-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="user-menu" class="hidden absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white dark:bg-gray-700 ring-1 ring-black ring-opacity-5">
                        <div class="py-1">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600">{{ __('Your Profile') }}</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600">{{ __('Settings') }}</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600">{{ __('Sign out') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="flex items-center sm:hidden">
                <button id="mobile-menu-button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary-500">
                    <span class="sr-only">{{ __('Open main menu') }}</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation (Hidden by default) -->
    <div id="mobile-menu" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <a href="{{ route('dashboard') }}" class="block pl-3 pr-4 py-2 border-l-4 border-primary-500 dark:border-primary-400 text-base font-medium text-primary-700 dark:text-primary-400 bg-primary-50 dark:bg-gray-900 focus:outline-none focus:text-primary-800 dark:focus:text-primary-300 focus:bg-primary-100 dark:focus:bg-gray-800 focus:border-primary-700 dark:focus:border-primary-300 transition duration-150 ease-in-out">
                {{ __('Dashboard') }}
            </a>
            <a href="{{ route('workforce.analysis') }}" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 hover:border-gray-300 dark:hover:border-gray-600 focus:outline-none focus:text-gray-800 dark:focus:text-gray-200 focus:bg-gray-50 dark:focus:bg-gray-800 focus:border-gray-300 dark:focus:border-gray-600 transition duration-150 ease-in-out">
                {{ __('Workforce Analysis') }}
            </a>
            <a href="{{ route('projections.index') }}" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 hover:border-gray-300 dark:hover:border-gray-600 focus:outline-none focus:text-gray-800 dark:focus:text-gray-200 focus:bg-gray-50 dark:focus:bg-gray-800 focus:border-gray-300 dark:focus:border-gray-600 transition duration-150 ease-in-out">
                {{ __('Projections') }}
            </a>
            <a href="{{ route('scenarios.index') }}" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 hover:border-gray-300 dark:hover:border-gray-600 focus:outline-none focus:text-gray-800 dark:focus:text-gray-200 focus:bg-gray-50 dark:focus:bg-gray-800 focus:border-gray-300 dark:focus:border-gray-600 transition duration-150 ease-in-out">
                {{ __('Scenario Planning') }}
            </a>
            <a href="{{ route('reports.index') }}" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 hover:border-gray-300 dark:hover:border-gray-600 focus:outline-none focus:text-gray-800 dark:focus:text-gray-200 focus:bg-gray-50 dark:focus:bg-gray-800 focus:border-gray-300 dark:focus:border-gray-600 transition duration-150 ease-in-out">
                {{ __('Reports') }}
            </a>
        </div>

        <!-- Mobile User Options -->
        <div class="pt-4 pb-3 border-t border-gray-200 dark:border-gray-700">
            <div class="flex items-center px-4">
                <div class="flex-shrink-0">
                    <div class="h-10 w-10 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-sm font-medium text-gray-600 dark:text-gray-300">
                        U
                    </div>
                </div>
                <div class="ml-3">
                    <div class="text-base font-medium text-gray-800 dark:text-gray-200">User Name</div>
                    <div class="text-sm font-medium text-gray-500 dark:text-gray-400">user@example.com</div>
                </div>
            </div>
            <div class="mt-3 space-y-1">
                <a href="#" class="block px-4 py-2 text-base font-medium text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800">{{ __('Your Profile') }}</a>
                <a href="#" class="block px-4 py-2 text-base font-medium text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800">{{ __('Settings') }}</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="block w-full text-left px-4 py-2 text-base font-medium text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800">{{ __('Sign out') }}</button>
                </form>
            </div>
        </div>
    </div>
</nav>

<!-- Spacer for fixed navbar -->
<div class="h-16"></div>

<!-- JavaScript for Dropdowns -->
<script>
    // Language Menu Toggle
    document.getElementById('language-toggle').addEventListener('click', function() {
        document.getElementById('language-menu').classList.toggle('hidden');
    });

    // User Menu Toggle
    document.getElementById('user-menu-button').addEventListener('click', function() {
        document.getElementById('user-menu').classList.toggle('hidden');
    });

    // Mobile Menu Toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });

    // Theme Toggle
    document.getElementById('theme-toggle').addEventListener('click', function() {
        if (localStorage.getItem('color-theme') === 'dark' || 
           (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
            document.getElementById('theme-toggle-dark-icon').classList.remove('hidden');
            document.getElementById('theme-toggle-light-icon').classList.add('hidden');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
            document.getElementById('theme-toggle-dark-icon').classList.add('hidden');
            document.getElementById('theme-toggle-light-icon').classList.remove('hidden');
        }
    });

    // Check theme on load
    if (localStorage.getItem('color-theme') === 'dark' || 
       (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
        document.getElementById('theme-toggle-dark-icon').classList.add('hidden');
        document.getElementById('theme-toggle-light-icon').classList.remove('hidden');
    } else {
        document.documentElement.classList.remove('dark');
        document.getElementById('theme-toggle-dark-icon').classList.remove('hidden');
        document.getElementById('theme-toggle-light-icon').classList.add('hidden');
    }

    // Close dropdowns when clicking outside
    document.addEventListener('click', function(event) {
        if (!event.target.closest('#language-toggle') && !event.target.closest('#language-menu')) {
            document.getElementById('language-menu').classList.add('hidden');
        }
        if (!event.target.closest('#user-menu-button') && !event.target.closest('#user-menu')) {
            document.getElementById('user-menu').classList.add('hidden');
        }
    });
</script> 
@extends('layouts.guest')

@section('content')
<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <div>
            <img class="mx-auto h-20 w-auto" src="{{ asset('images/logo.svg') }}" alt="Logo">
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900 dark:text-white">
                {{ __('Sign in to your account') }}
            </h2>
            <p class="mt-2 text-center text-sm text-gray-600 dark:text-gray-400">
                {{ __('Saudi Arabia Health Workforce Planning System') }}
            </p>
        </div>
        
        <!-- Language Switcher -->
        <div class="flex justify-center">
            <div class="inline-flex rounded-md shadow-sm" role="group">
                <a href="#" class="py-2 px-4 text-sm font-medium bg-white dark:bg-gray-800 text-gray-900 dark:text-white rounded-l-lg border border-gray-200 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700 focus:z-10 focus:ring-2 focus:ring-primary-700">
                    English
                </a>
                <a href="#" class="py-2 px-4 text-sm font-medium bg-white dark:bg-gray-800 text-gray-900 dark:text-white rounded-r-lg border border-gray-200 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700 focus:z-10 focus:ring-2 focus:ring-primary-700">
                    العربية
                </a>
            </div>
        </div>

        <!-- Session Status -->
        @if (session('status'))
            <div class="bg-green-100 dark:bg-green-900 border border-green-400 dark:border-green-700 text-green-700 dark:text-green-300 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('status') }}</span>
            </div>
        @endif

        <!-- Validation Errors -->
        @if ($errors->any())
            <div class="bg-red-100 dark:bg-red-900 border border-red-400 dark:border-red-700 text-red-700 dark:text-red-300 px-4 py-3 rounded relative" role="alert">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="mt-8 space-y-6" action="{{ route('login.submit') }}" method="POST">
            @csrf
            <input type="hidden" name="remember" value="true">
            <div class="rounded-md shadow-sm -space-y-px">
                <div>
                    <label for="email" class="sr-only">{{ __('Email') }}</label>
                    <input id="email" name="email" type="email" autocomplete="email" required value="{{ old('email') }}" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 dark:border-gray-700 placeholder-gray-500 dark:placeholder-gray-400 text-gray-900 dark:text-white dark:bg-gray-800 rounded-t-md focus:outline-none focus:ring-primary-500 focus:border-primary-500 focus:z-10 sm:text-sm" placeholder="{{ __('Email address') }}">
                </div>
                <div>
                    <label for="password" class="sr-only">{{ __('Password') }}</label>
                    <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 dark:border-gray-700 placeholder-gray-500 dark:placeholder-gray-400 text-gray-900 dark:text-white dark:bg-gray-800 rounded-b-md focus:outline-none focus:ring-primary-500 focus:border-primary-500 focus:z-10 sm:text-sm" placeholder="{{ __('Password') }}">
                </div>
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember_me" name="remember" type="checkbox" class="h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300 dark:border-gray-700 rounded">
                    <label for="remember_me" class="ml-2 block text-sm text-gray-900 dark:text-white">
                        {{ __('Remember me') }}
                    </label>
                </div>

                <div class="text-sm">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="font-medium text-primary-600 dark:text-primary-400 hover:text-primary-500 dark:hover:text-primary-300">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
            </div>

            <div>
                <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                    <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                        <svg class="h-5 w-5 text-primary-500 group-hover:text-primary-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                        </svg>
                    </span>
                    {{ __('Sign in') }}
                </button>
            </div>
        </form>
        
        @if (Route::has('register'))
            <div class="text-center mt-4">
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    {{ __("Don't have an account?") }} 
                    <a href="{{ route('register') }}" class="font-medium text-primary-600 dark:text-primary-400 hover:text-primary-500 dark:hover:text-primary-300">
                        {{ __('Register') }}
                    </a>
                </p>
            </div>
        @endif
    </div>
</div>
@endsection 
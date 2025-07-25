@extends('layouts.app')

@section('content')
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Page Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white">{{ __('Workforce Projections') }}</h1>
            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Create and analyze 5-10 year workforce projections') }}</p>
        </div>

        <!-- Content Placeholder -->
        <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg border border-gray-200 dark:border-gray-700 p-8">
            <div class="text-center">
                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <h3 class="mt-2 text-lg font-medium text-gray-900 dark:text-white">{{ __('Projections Module') }}</h3>
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">{{ __('This module is currently under development.') }}</p>
                <div class="mt-6">
                    <a href="{{ route('dashboard') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                        {{ __('Return to Dashboard') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
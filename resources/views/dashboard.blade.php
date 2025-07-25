@extends('layouts.app')

@section('content')
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Dashboard Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white">{{ __('Dashboard') }}</h1>
            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Health Workforce Planning System') }} | {{ __('Last updated') }}: <span class="font-medium">{{ now()->format('M d, Y H:i') }}</span></p>
        </div>

        <!-- Key Metrics Cards -->
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4 mb-8">
            <!-- Total Healthcare Workers -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg border border-gray-200 dark:border-gray-700">
                <div class="px-4 py-5 sm:p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-primary-100 dark:bg-primary-900 rounded-md p-3">
                            <svg class="h-6 w-6 text-primary-600 dark:text-primary-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 truncate">{{ __('Total Healthcare Workers') }}</dt>
                                <dd>
                                    <div class="text-lg font-medium text-gray-900 dark:text-white">245,892</div>
                                    <div class="inline-flex items-baseline px-2.5 py-0.5 rounded-full text-sm font-medium bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200">
                                        <svg class="-ml-1 mr-0.5 h-4 w-4 text-green-500 dark:text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span>3.2%</span>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Current Shortages -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg border border-gray-200 dark:border-gray-700">
                <div class="px-4 py-5 sm:p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-red-100 dark:bg-red-900 rounded-md p-3">
                            <svg class="h-6 w-6 text-red-600 dark:text-red-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 truncate">{{ __('Current Shortages') }}</dt>
                                <dd>
                                    <div class="text-lg font-medium text-gray-900 dark:text-white">15,432</div>
                                    <div class="inline-flex items-baseline px-2.5 py-0.5 rounded-full text-sm font-medium bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200">
                                        <svg class="-ml-1 mr-0.5 h-4 w-4 text-red-500 dark:text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M14.707 10.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 12.586V5a1 1 0 012 0v7.586l2.293-2.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span>2.7%</span>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Budget Allocated -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg border border-gray-200 dark:border-gray-700">
                <div class="px-4 py-5 sm:p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-blue-100 dark:bg-blue-900 rounded-md p-3">
                            <svg class="h-6 w-6 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 truncate">{{ __('Budget Allocated') }}</dt>
                                <dd>
                                    <div class="text-lg font-medium text-gray-900 dark:text-white">SAR 2.5B</div>
                                    <div class="inline-flex items-baseline px-2.5 py-0.5 rounded-full text-sm font-medium bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200">
                                        <svg class="-ml-1 mr-0.5 h-4 w-4 text-green-500 dark:text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span>5.8%</span>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Regions Covered -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg border border-gray-200 dark:border-gray-700">
                <div class="px-4 py-5 sm:p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-indigo-100 dark:bg-indigo-900 rounded-md p-3">
                            <svg class="h-6 w-6 text-indigo-600 dark:text-indigo-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                            </svg>
                        </div>
                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 truncate">{{ __('Regions Covered') }}</dt>
                                <dd>
                                    <div class="text-lg font-medium text-gray-900 dark:text-white">13/13</div>
                                    <div class="inline-flex items-baseline px-2.5 py-0.5 rounded-full text-sm font-medium bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200">
                                        <svg class="h-4 w-4 text-green-500 dark:text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span>100%</span>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content Sections -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Saudi Region Map -->
            <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg border border-gray-200 dark:border-gray-700 col-span-1 lg:col-span-2 overflow-hidden">
                <div class="px-4 py-5 sm:px-6 border-b border-gray-200 dark:border-gray-700">
                    <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white">{{ __('Workforce Distribution by Region') }}</h3>
                </div>
                <div class="px-4 py-5 sm:p-6">
                    <!-- Interactive SVG Map Placeholder -->
                    <div class="h-96 bg-gray-100 dark:bg-gray-900 rounded-lg flex items-center justify-center">
                        <p class="text-gray-500 dark:text-gray-400 text-center">{{ __('Interactive Saudi Arabia Map') }}<br>{{ __('Shows workforce density by region') }}</p>
                    </div>
                    <div class="mt-4 grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-4">
                        <div class="flex items-center">
                            <div class="h-3 w-3 rounded-full bg-green-500"></div>
                            <span class="ml-1.5 text-xs font-medium text-gray-700 dark:text-gray-300">{{ __('Adequate Staffing') }}</span>
                        </div>
                        <div class="flex items-center">
                            <div class="h-3 w-3 rounded-full bg-yellow-500"></div>
                            <span class="ml-1.5 text-xs font-medium text-gray-700 dark:text-gray-300">{{ __('Moderate Shortage') }}</span>
                        </div>
                        <div class="flex items-center">
                            <div class="h-3 w-3 rounded-full bg-orange-500"></div>
                            <span class="ml-1.5 text-xs font-medium text-gray-700 dark:text-gray-300">{{ __('Significant Shortage') }}</span>
                        </div>
                        <div class="flex items-center">
                            <div class="h-3 w-3 rounded-full bg-red-500"></div>
                            <span class="ml-1.5 text-xs font-medium text-gray-700 dark:text-gray-300">{{ __('Critical Shortage') }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Healthcare Worker Categories -->
            <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg border border-gray-200 dark:border-gray-700">
                <div class="px-4 py-5 sm:px-6 border-b border-gray-200 dark:border-gray-700">
                    <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white">{{ __('Healthcare Worker Categories') }}</h3>
                </div>
                <div class="px-4 py-5 sm:p-6">
                    <div class="space-y-4">
                        <div class="relative">
                            <div class="flex items-center justify-between mb-1">
                                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Physicians') }}</span>
                                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">62,314</span>
                            </div>
                            <div class="overflow-hidden h-2 text-xs flex rounded bg-gray-200 dark:bg-gray-700">
                                <div style="width: 70%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-primary-500"></div>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="flex items-center justify-between mb-1">
                                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Nurses') }}</span>
                                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">110,485</span>
                            </div>
                            <div class="overflow-hidden h-2 text-xs flex rounded bg-gray-200 dark:bg-gray-700">
                                <div style="width: 85%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-primary-500"></div>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="flex items-center justify-between mb-1">
                                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Pharmacists') }}</span>
                                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">28,954</span>
                            </div>
                            <div class="overflow-hidden h-2 text-xs flex rounded bg-gray-200 dark:bg-gray-700">
                                <div style="width: 65%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-primary-500"></div>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="flex items-center justify-between mb-1">
                                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Medical Technicians') }}</span>
                                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">24,567</span>
                            </div>
                            <div class="overflow-hidden h-2 text-xs flex rounded bg-gray-200 dark:bg-gray-700">
                                <div style="width: 50%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-primary-500"></div>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="flex items-center justify-between mb-1">
                                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Dentists') }}</span>
                                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">10,872</span>
                            </div>
                            <div class="overflow-hidden h-2 text-xs flex rounded bg-gray-200 dark:bg-gray-700">
                                <div style="width: 45%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-primary-500"></div>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="flex items-center justify-between mb-1">
                                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Mental Health') }}</span>
                                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">8,700</span>
                            </div>
                            <div class="overflow-hidden h-2 text-xs flex rounded bg-gray-200 dark:bg-gray-700">
                                <div style="width: 40%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-primary-500"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-4 sm:px-6 border-t border-gray-200 dark:border-gray-700">
                    <a href="#" class="text-sm font-medium text-primary-600 dark:text-primary-400 hover:text-primary-500 dark:hover:text-primary-300">{{ __('View detailed breakdown') }} &rarr;</a>
                </div>
            </div>
        </div>

        <!-- Gap Analysis -->
        <div class="mt-8 bg-white dark:bg-gray-800 shadow-sm rounded-lg border border-gray-200 dark:border-gray-700">
            <div class="px-4 py-5 sm:px-6 border-b border-gray-200 dark:border-gray-700">
                <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white">{{ __('Workforce Gap Analysis') }}</h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500 dark:text-gray-400">{{ __('Current shortages and surpluses by healthcare category') }}</p>
            </div>
            <div class="px-4 py-5 sm:p-6">
                <!-- Chart Placeholder -->
                <div class="h-80 bg-gray-100 dark:bg-gray-900 rounded-lg flex items-center justify-center">
                    <p class="text-gray-500 dark:text-gray-400 text-center">{{ __('Gap Analysis Chart') }}<br>{{ __('Bar chart showing current vs. required workforce by category') }}</p>
                </div>
            </div>
            <div class="px-4 py-4 sm:px-6 border-t border-gray-200 dark:border-gray-700">
                <a href="#" class="text-sm font-medium text-primary-600 dark:text-primary-400 hover:text-primary-500 dark:hover:text-primary-300">{{ __('Run custom gap analysis') }} &rarr;</a>
            </div>
        </div>

        <!-- Quick Actions and Recent Updates -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mt-8">
            <!-- Quick Actions -->
            <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg border border-gray-200 dark:border-gray-700 lg:col-span-1">
                <div class="px-4 py-5 sm:px-6 border-b border-gray-200 dark:border-gray-700">
                    <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white">{{ __('Quick Actions') }}</h3>
                </div>
                <div class="px-4 py-5 sm:p-6">
                    <ul class="divide-y divide-gray-200 dark:divide-gray-700">
                        <li class="py-4">
                            <a href="#" class="flex items-center hover:bg-gray-50 dark:hover:bg-gray-700 -m-2 p-2 rounded-md">
                                <div class="flex-shrink-0 bg-primary-100 dark:bg-primary-900 rounded p-2">
                                    <svg class="h-5 w-5 text-primary-600 dark:text-primary-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">{{ __('Create New Projection') }}</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">{{ __('Create 5-10 year workforce forecast') }}</p>
                                </div>
                            </a>
                        </li>
                        <li class="py-4">
                            <a href="#" class="flex items-center hover:bg-gray-50 dark:hover:bg-gray-700 -m-2 p-2 rounded-md">
                                <div class="flex-shrink-0 bg-green-100 dark:bg-green-900 rounded p-2">
                                    <svg class="h-5 w-5 text-green-600 dark:text-green-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">{{ __('Build Scenario') }}</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">{{ __('Create "What-if" analysis for planning') }}</p>
                                </div>
                            </a>
                        </li>
                        <li class="py-4">
                            <a href="#" class="flex items-center hover:bg-gray-50 dark:hover:bg-gray-700 -m-2 p-2 rounded-md">
                                <div class="flex-shrink-0 bg-blue-100 dark:bg-blue-900 rounded p-2">
                                    <svg class="h-5 w-5 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">{{ __('Generate Report') }}</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">{{ __('Create PDF/Excel report for export') }}</p>
                                </div>
                            </a>
                        </li>
                        <li class="py-4">
                            <a href="#" class="flex items-center hover:bg-gray-50 dark:hover:bg-gray-700 -m-2 p-2 rounded-md">
                                <div class="flex-shrink-0 bg-purple-100 dark:bg-purple-900 rounded p-2">
                                    <svg class="h-5 w-5 text-purple-600 dark:text-purple-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">{{ __('Update Parameters') }}</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">{{ __('Modify calculation parameters') }}</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Recent Updates -->
            <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg border border-gray-200 dark:border-gray-700 lg:col-span-2">
                <div class="px-4 py-5 sm:px-6 border-b border-gray-200 dark:border-gray-700">
                    <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white">{{ __('Recent Updates') }}</h3>
                </div>
                <div class="px-4 py-5 sm:p-6">
                    <ul class="divide-y divide-gray-200 dark:divide-gray-700">
                        <li class="py-4">
                            <div class="flex space-x-3">
                                <div class="flex-shrink-0">
                                    <span class="h-8 w-8 rounded-full bg-primary-100 dark:bg-primary-900 flex items-center justify-center">
                                        <span class="text-sm font-medium text-primary-600 dark:text-primary-400">MH</span>
                                    </span>
                                </div>
                                <div class="min-w-0 flex-1">
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">{{ __('Ministry of Health') }}</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">{{ __('Updated workforce data for Q2 2023') }}</p>
                                    <div class="mt-1 flex items-center">
                                        <span class="text-xs text-gray-500 dark:text-gray-400">{{ __('Today at') }} 11:43 AM</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="py-4">
                            <div class="flex space-x-3">
                                <div class="flex-shrink-0">
                                    <span class="h-8 w-8 rounded-full bg-blue-100 dark:bg-blue-900 flex items-center justify-center">
                                        <span class="text-sm font-medium text-blue-600 dark:text-blue-400">SC</span>
                                    </span>
                                </div>
                                <div class="min-w-0 flex-1">
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">{{ __('Saudi Commission for Health Specialties') }}</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">{{ __('Added 1,243 newly certified specialists') }}</p>
                                    <div class="mt-1 flex items-center">
                                        <span class="text-xs text-gray-500 dark:text-gray-400">{{ __('Yesterday at') }} 2:15 PM</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="py-4">
                            <div class="flex space-x-3">
                                <div class="flex-shrink-0">
                                    <span class="h-8 w-8 rounded-full bg-green-100 dark:bg-green-900 flex items-center justify-center">
                                        <span class="text-sm font-medium text-green-600 dark:text-green-400">SH</span>
                                    </span>
                                </div>
                                <div class="min-w-0 flex-1">
                                    <p class="text-sm font-medium text-gray-900 dark:text-white">{{ __('System Update') }}</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">{{ __('New projection algorithm deployed for improved accuracy') }}</p>
                                    <div class="mt-1 flex items-center">
                                        <span class="text-xs text-gray-500 dark:text-gray-400">{{ __('June 12 at') }} 9:30 AM</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="px-4 py-4 sm:px-6 border-t border-gray-200 dark:border-gray-700">
                    <a href="#" class="text-sm font-medium text-primary-600 dark:text-primary-400 hover:text-primary-500 dark:hover:text-primary-300">{{ __('View all updates') }} &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Chart initialization code would go here
    // We'll use placeholder charts for now
    document.addEventListener('DOMContentLoaded', function() {
        // Chart initialization would go here
        console.log('Dashboard initialized');
    });
</script>
@endpush 
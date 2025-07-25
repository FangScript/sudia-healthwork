@extends('layouts.app')

@section('content')
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Page Header -->
        <div class="mb-8 flex flex-col md:flex-row md:items-center md:justify-between">
            <div>
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white">{{ __('Workforce Analysis') }}</h1>
                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Analyze current healthcare workforce distribution and identify gaps') }}
                </p>
            </div>
            <div class="mt-4 md:mt-0 flex space-x-3">
                <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                    <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                    {{ __('Export Data') }}
                </button>
                <button type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 text-sm font-medium rounded-md text-gray-700 dark:text-gray-200 bg-white dark:bg-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                    <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    {{ __('Schedule Report') }}
                </button>
            </div>
        </div>

        <!-- Filters Panel -->
        <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg border border-gray-200 dark:border-gray-700 mb-8">
            <div class="px-4 py-5 sm:px-6 border-b border-gray-200 dark:border-gray-700">
                <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white">{{ __('Analysis Filters') }}</h3>
            </div>
            <div class="px-4 py-5 sm:p-6 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <!-- Region Filter -->
                <div>
                    <label for="region" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Region') }}</label>
                    <select id="region" name="region" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm rounded-md">
                        <option value="all">{{ __('All Regions') }}</option>
                        <option value="riyadh">{{ __('Riyadh Region') }}</option>
                        <option value="makkah">{{ __('Makkah Region') }}</option>
                        <option value="eastern">{{ __('Eastern Province') }}</option>
                        <option value="asir">{{ __('Asir Region') }}</option>
                        <option value="jazan">{{ __('Jazan Region') }}</option>
                        <option value="tabuk">{{ __('Tabuk Region') }}</option>
                        <option value="hail">{{ __('Hail Region') }}</option>
                        <option value="northern">{{ __('Northern Borders') }}</option>
                        <option value="jouf">{{ __('Al Jouf Region') }}</option>
                        <option value="najran">{{ __('Najran Region') }}</option>
                        <option value="bahah">{{ __('Al Bahah Region') }}</option>
                        <option value="qassim">{{ __('Al Qassim Region') }}</option>
                        <option value="madinah">{{ __('Madinah Region') }}</option>
                    </select>
                </div>

                <!-- Healthcare Category Filter -->
                <div>
                    <label for="category" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Healthcare Category') }}</label>
                    <select id="category" name="category" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm rounded-md">
                        <option value="all">{{ __('All Categories') }}</option>
                        <option value="physicians">{{ __('Physicians') }}</option>
                        <option value="nurses">{{ __('Nurses') }}</option>
                        <option value="pharmacists">{{ __('Pharmacists') }}</option>
                        <option value="technicians">{{ __('Medical Technicians') }}</option>
                        <option value="dentists">{{ __('Dentists') }}</option>
                        <option value="mentalhealth">{{ __('Mental Health Professionals') }}</option>
                        <option value="emergency">{{ __('Emergency Medical Services') }}</option>
                        <option value="publichealth">{{ __('Public Health Workers') }}</option>
                    </select>
                </div>

                <!-- Year Filter -->
                <div>
                    <label for="year" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Year') }}</label>
                    <select id="year" name="year" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm rounded-md">
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                    </select>
                </div>

                <!-- Analysis Type -->
                <div>
                    <label for="analysis" class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Analysis Type') }}</label>
                    <select id="analysis" name="analysis" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm rounded-md">
                        <option value="distribution">{{ __('Regional Distribution') }}</option>
                        <option value="density">{{ __('Population Density Ratio') }}</option>
                        <option value="gap">{{ __('Gap Analysis') }}</option>
                        <option value="trends">{{ __('Historical Trends') }}</option>
                    </select>
                </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 dark:bg-gray-700 text-right sm:px-6 border-t border-gray-200 dark:border-gray-600">
                <button type="button" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                    {{ __('Apply Filters') }}
                </button>
            </div>
        </div>

        <!-- Main Content Sections -->
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
            <!-- Map Visualization -->
            <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg border border-gray-200 dark:border-gray-700 col-span-1 lg:col-span-2 overflow-hidden">
                <div class="px-4 py-5 sm:px-6 border-b border-gray-200 dark:border-gray-700 flex justify-between items-center">
                    <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white">{{ __('Regional Workforce Distribution') }}</h3>
                    
                    <!-- Visualization Type Selector -->
                    <div class="inline-flex rounded-md shadow-sm" role="group">
                        <button type="button" class="py-1 px-3 text-xs font-medium rounded-l-lg border border-gray-200 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-600">
                            {{ __('Map') }}
                        </button>
                        <button type="button" class="py-1 px-3 text-xs font-medium border-t border-b border-gray-200 dark:border-gray-600 bg-gray-100 dark:bg-gray-600 text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-600">
                            {{ __('Chart') }}
                        </button>
                        <button type="button" class="py-1 px-3 text-xs font-medium rounded-r-lg border border-gray-200 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-600">
                            {{ __('Table') }}
                        </button>
                    </div>
                </div>
                <div class="px-4 py-5 sm:p-6">
                    <!-- Interactive Map Placeholder -->
                    <div class="h-96 bg-gray-100 dark:bg-gray-700 rounded-lg flex items-center justify-center">
                        <p class="text-gray-500 dark:text-gray-400 text-center">{{ __('Interactive Saudi Arabia Map') }}<br>{{ __('Shows workforce density by region') }}</p>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 dark:bg-gray-700 border-t border-gray-200 dark:border-gray-600 sm:px-6">
                    <div class="flex flex-wrap gap-2">
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

            <!-- Metrics Panel -->
            <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg border border-gray-200 dark:border-gray-700">
                <div class="px-4 py-5 sm:px-6 border-b border-gray-200 dark:border-gray-700">
                    <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white">{{ __('Key Metrics') }}</h3>
                </div>
                <div class="px-4 py-5 sm:p-6">
                    <dl>
                        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                            <!-- Total Workforce -->
                            <div class="px-4 py-5 bg-gray-50 dark:bg-gray-700 shadow rounded-lg overflow-hidden sm:p-6">
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 truncate">{{ __('Total Workforce') }}</dt>
                                <dd class="mt-1 text-3xl font-semibold text-gray-900 dark:text-white">245,892</dd>
                                <dd class="mt-2 flex items-baseline">
                                    <span class="text-green-600 dark:text-green-400 text-sm font-semibold">
                                        +3.2%
                                    </span>
                                    <span class="ml-2 text-sm text-gray-500 dark:text-gray-400">{{ __('from previous year') }}</span>
                                </dd>
                            </div>

                            <!-- Population to Provider Ratio -->
                            <div class="px-4 py-5 bg-gray-50 dark:bg-gray-700 shadow rounded-lg overflow-hidden sm:p-6">
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 truncate">{{ __('Population/Provider Ratio') }}</dt>
                                <dd class="mt-1 text-3xl font-semibold text-gray-900 dark:text-white">134:1</dd>
                                <dd class="mt-2 flex items-baseline">
                                    <span class="text-green-600 dark:text-green-400 text-sm font-semibold">
                                        +2.8%
                                    </span>
                                    <span class="ml-2 text-sm text-gray-500 dark:text-gray-400">{{ __('improvement') }}</span>
                                </dd>
                            </div>
                            
                            <!-- Shortage Areas -->
                            <div class="px-4 py-5 bg-gray-50 dark:bg-gray-700 shadow rounded-lg overflow-hidden sm:p-6">
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 truncate">{{ __('Shortage Areas') }}</dt>
                                <dd class="mt-1 text-3xl font-semibold text-gray-900 dark:text-white">3</dd>
                                <dd class="mt-2 flex items-baseline">
                                    <span class="text-green-600 dark:text-green-400 text-sm font-semibold">
                                        -2
                                    </span>
                                    <span class="ml-2 text-sm text-gray-500 dark:text-gray-400">{{ __('from previous year') }}</span>
                                </dd>
                            </div>

                            <!-- Growth Rate -->
                            <div class="px-4 py-5 bg-gray-50 dark:bg-gray-700 shadow rounded-lg overflow-hidden sm:p-6">
                                <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 truncate">{{ __('Annual Growth Rate') }}</dt>
                                <dd class="mt-1 text-3xl font-semibold text-gray-900 dark:text-white">4.7%</dd>
                                <dd class="mt-2 flex items-baseline">
                                    <span class="text-green-600 dark:text-green-400 text-sm font-semibold">
                                        +0.5%
                                    </span>
                                    <span class="ml-2 text-sm text-gray-500 dark:text-gray-400">{{ __('vs target') }}</span>
                                </dd>
                            </div>
                        </div>
                    </dl>
                </div>
                <div class="px-4 py-4 sm:px-6 border-t border-gray-200 dark:border-gray-700">
                    <a href="#" class="text-sm font-medium text-primary-600 dark:text-primary-400 hover:text-primary-500 dark:hover:text-primary-300">{{ __('View detailed metrics') }} &rarr;</a>
                </div>
            </div>
        </div>

        <!-- Workforce Category Distribution -->
        <div class="mt-8 bg-white dark:bg-gray-800 shadow-sm rounded-lg border border-gray-200 dark:border-gray-700">
            <div class="px-4 py-5 sm:px-6 border-b border-gray-200 dark:border-gray-700">
                <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white">{{ __('Workforce Distribution by Category') }}</h3>
            </div>
            <div class="px-4 py-5 sm:p-6">
                <!-- Distribution Chart Placeholder -->
                <div class="h-80 bg-gray-100 dark:bg-gray-700 rounded-lg flex items-center justify-center">
                    <p class="text-gray-500 dark:text-gray-400 text-center">{{ __('Workforce Distribution Chart') }}<br>{{ __('Shows breakdown by healthcare worker category') }}</p>
                </div>
            </div>
        </div>

        <!-- Gap Analysis Table -->
        <div class="mt-8 bg-white dark:bg-gray-800 shadow-sm rounded-lg border border-gray-200 dark:border-gray-700">
            <div class="px-4 py-5 sm:px-6 border-b border-gray-200 dark:border-gray-700 flex justify-between">
                <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white">{{ __('Gap Analysis by Region') }}</h3>
                <button type="button" class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                    {{ __('Export to Excel') }}
                </button>
            </div>
            <div class="px-4 py-5 sm:p-6 overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead class="bg-gray-50 dark:bg-gray-700">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                {{ __('Region') }}
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                {{ __('Required') }}
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                {{ __('Current') }}
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                {{ __('Gap') }}
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                {{ __('Gap %') }}
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                {{ __('Status') }}
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                        <!-- Riyadh -->
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">
                                {{ __('Riyadh Region') }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                76,230
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                72,456
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-red-600 dark:text-red-400">
                                -3,774
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-red-600 dark:text-red-400">
                                -4.9%
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200">
                                    {{ __('Moderate Shortage') }}
                                </span>
                            </td>
                        </tr>
                        
                        <!-- Makkah -->
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">
                                {{ __('Makkah Region') }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                65,120
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                63,875
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-red-600 dark:text-red-400">
                                -1,245
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-red-600 dark:text-red-400">
                                -1.9%
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200">
                                    {{ __('Adequate') }}
                                </span>
                            </td>
                        </tr>
                        
                        <!-- Eastern -->
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">
                                {{ __('Eastern Province') }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                52,450
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                51,230
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-red-600 dark:text-red-400">
                                -1,220
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-red-600 dark:text-red-400">
                                -2.3%
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200">
                                    {{ __('Adequate') }}
                                </span>
                            </td>
                        </tr>
                        
                        <!-- Najran -->
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">
                                {{ __('Najran Region') }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                14,320
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                9,876
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-red-600 dark:text-red-400">
                                -4,444
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-red-600 dark:text-red-400">
                                -31.0%
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 dark:bg-red-900 text-red-800 dark:text-red-200">
                                    {{ __('Critical Shortage') }}
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="px-4 py-4 sm:px-6 border-t border-gray-200 dark:border-gray-700">
                <nav class="flex items-center justify-between">
                    <div class="flex-1 flex justify-between sm:hidden">
                        <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 text-sm font-medium rounded-md text-gray-700 dark:text-gray-200 bg-white dark:bg-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            {{ __('Previous') }}
                        </a>
                        <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 text-sm font-medium rounded-md text-gray-700 dark:text-gray-200 bg-white dark:bg-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            {{ __('Next') }}
                        </a>
                    </div>
                    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                        <div>
                            <p class="text-sm text-gray-700 dark:text-gray-300">
                                {{ __('Showing') }} <span class="font-medium">1</span> {{ __('to') }} <span class="font-medium">4</span> {{ __('of') }} <span class="font-medium">13</span> {{ __('regions') }}
                            </p>
                        </div>
                        <div>
                            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-sm font-medium text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <span class="sr-only">{{ __('Previous') }}</span>
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <a href="#" aria-current="page" class="relative inline-flex items-center px-4 py-2 border border-primary-500 bg-primary-50 dark:bg-primary-900 text-sm font-medium text-primary-600 dark:text-primary-300">
                                    1
                                </a>
                                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-sm font-medium text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    2
                                </a>
                                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-sm font-medium text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    3
                                </a>
                                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-sm font-medium text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    4
                                </a>
                                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-sm font-medium text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <span class="sr-only">{{ __('Next') }}</span>
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </nav>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Chart initialization code would go here
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize interactive map
        console.log('Workforce Analysis page initialized');
    });
</script>
@endpush 
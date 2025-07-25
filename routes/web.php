<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Redirect root URL to dashboard
Route::get('/', function () {
    return redirect()->route('dashboard');
});

// Authentication Routes
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function () {
    // For the prototype, we'll just redirect to the dashboard without actual authentication
    // In a real app, this would validate credentials and authenticate the user
    session(['authenticated' => true]);
    return redirect()->route('dashboard');
})->name('login.submit');

Route::post('/logout', function () {
    // For the prototype, just clear the session
    session()->forget('authenticated');
    return redirect('/login');
})->name('logout');

// Dashboard and Main Application Routes - Apply a simple auth middleware
Route::get('/dashboard', function () {
    // Simple auth check for the prototype
    if (!session('authenticated')) {
        return redirect('/login');
    }
    return view('dashboard');
})->name('dashboard');

// Workforce Analysis Routes
Route::prefix('workforce')->group(function () {
    Route::get('/analysis', function () {
        // Simple auth check for the prototype
        if (!session('authenticated')) {
            return redirect('/login');
        }
        return view('workforce.analysis');
    })->name('workforce.analysis');
});

// Projection Routes
Route::prefix('projections')->group(function () {
    Route::get('/', function () {
        // Simple auth check for the prototype
        if (!session('authenticated')) {
            return redirect('/login');
        }
        return view('projections.index');
    })->name('projections.index');
});

// Scenario Planning Routes
Route::prefix('scenarios')->group(function () {
    Route::get('/', function () {
        // Simple auth check for the prototype
        if (!session('authenticated')) {
            return redirect('/login');
        }
        return view('scenarios.index');
    })->name('scenarios.index');
});

// Reports Routes
Route::prefix('reports')->group(function () {
    Route::get('/', function () {
        // Simple auth check for the prototype
        if (!session('authenticated')) {
            return redirect('/login');
        }
        return view('reports.index');
    })->name('reports.index');
});

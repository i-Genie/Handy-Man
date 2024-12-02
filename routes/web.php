<?php

use Livewire\Volt\Volt;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('business/dashboard', 'business/dashboard')
    ->middleware(['auth', 'verified'])
    ->name('business.dashboard');

Route::middleware('guest')->group(function () {
    Volt::route('business/register', 'pages.business.register')
        ->name('business.register');

    Volt::route('business/login', 'pages.business.login')
        ->name('business.login');

    Volt::route('business/forgot-password', 'pages.business.forgot-password')
        ->name('business.password.request');

    Volt::route('business/reset-password/{token}', 'pages.business.reset-password')
        ->name('business.password.reset');
});

require __DIR__.'/auth.php';

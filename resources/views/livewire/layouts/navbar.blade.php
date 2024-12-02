<?php

use Livewire\Volt\Component;

new class extends Component {
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<div>
    <nav class="fixed w-full top-0 left-0 px-4 py-3 bg-white shadow z-10">
        <div class="mx-20 flex items-center justify-between">
            <!-- Logo with Back Button -->
            <div class="flex items-center space-x-4">
                <div class="flex items-center space-x-2">
                    <img src="{{ asset('images/Logo.png') }}" class="w-40 h-auto" alt="">
                </div>
                <button class="p-2 rounded-lg bg-gray-100 hover:bg-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
    
            <!-- Add navSearch here, between logo and right-side icons -->
            <div class="hidden opacity-0 transition-opacity duration-300 flex-1 mx-4" id="navSearch">
                <div class="flex items-center space-x-2">
                    <!-- Search Input -->
                    <div class="relative flex-1">
                        <input type="text" id="navSearchInput" placeholder="Cleaner, Carpenter, Hair Dresser .."
                            class="w-full pl-12 py-2 rounded-xl border border-gray-200 bg-white text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        <div
                            class="absolute right-1 top-1/2 transform -translate-y-1/2 bg-indigo-600 hover:bg-indigo-700 p-2 rounded-xl transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                    </div>
    
                    <!-- Filter Button -->
                    <button class="p-2 rounded-xl bg-indigo-600 hover:bg-indigo-700 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                        </svg>
                    </button>
                </div>
            </div>
    
            <!-- Right Side Icons -->
            <div class="flex items-center space-x-3">
                <button class="p-2 rounded-full bg-green-100 hover:bg-green-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                </button>
                <button class="p-2 rounded-full bg-purple-100 hover:bg-purple-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-purple-600" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                </button>
                <div class="w-10 h-10 rounded-full bg-pink-200 overflow-hidden">
                    <img src="smart-icon.jpeg" alt="Profile" class="w-full h-full object-cover">
                </div>
                <!-- Authentication -->
                <button wire:click="logout" class="w-full text-start">
                    <x-dropdown-link>
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </button>
            </div>
        </div>
    </nav>
</div>

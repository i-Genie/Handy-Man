<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div>
    <aside class="fixed w-64   bg-[#6759FF] rounded-lg">
        <div class="m-1">
            <!-- Profile Section -->
            <div class="text-center mb-3 p-2">
                <!-- Profile Picture with Verification Badge -->
                <div class="relative inline-block">
                    <div class="w-24 h-24 rounded-full overflow-hidden border-4 border-white/20 mx-auto">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e" alt="Profile Picture"
                            class="w-full h-full object-cover">
                    </div>
                    <!-- Verification Badge -->
                    <div class="absolute bottom-1 right-1 bg-[#6759FF] rounded-full p-1 border-2 border-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
                <!-- Profile Name -->
                <h3 class="text-white font-semibold mt-3">John Doe</h3>
                <p class="text-white/60 text-sm">Professional Designer</p>
            </div>
    
            <!-- Navigation Links with white background -->
            <div class="bg-white rounded-t-3xl rounded-b-md">
                <nav class="p-4 space-y-2">
                    <a href="#" class="flex items-center space-x-3 px-3 py-2 rounded-lg bg-[#6759FF]/10 text-[#6759FF]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <span class="font-medium">Dashboard</span>
                    </a>
                    <a href="#"
                        class="flex items-center space-x-3 px-3 py-2 rounded-lg text-gray-600 hover:bg-[#6759FF]/5 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        <span>Team</span>
                    </a>
                    <a href="#"
                        class="flex items-center space-x-3 px-3 py-2 rounded-lg text-gray-600 hover:bg-[#6759FF]/5 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        <span>Team</span>
                    </a>
                    <a href="#"
                        class="flex items-center space-x-3 px-3 py-2 rounded-lg text-gray-600 hover:bg-[#6759FF]/5 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                        </svg>
                        <span>Projects</span>
                    </a>
                    <a href="#"
                        class="flex items-center space-x-3 px-3 py-2 rounded-lg text-gray-600 hover:bg-[#6759FF]/5 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span>Calendar</span>
                    </a>
                    <a href="#"
                        class="flex items-center space-x-3 px-3 py-2 rounded-lg text-gray-600 hover:bg-[#6759FF]/5 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                        <span>Reports</span>
                    </a>
                </nav>
            </div>
        </div>
    </aside>
</div>

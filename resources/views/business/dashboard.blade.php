<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <main class="flex-1 px-6 ml-64">
        <!-- banner -->
        <div>
            <p class="font-medium text-xl mb-4">&#128075; Good Morning</p>
            <img src="{{ asset('images/home-banner.png') }}" alt="">
        </div>
        <!-- Search Section -->
        <div class="max-w-full mt-4">
            <div class="flex items-center space-x-4">
                <!-- Search Input -->
                <div class="flex-1 relative">
                    <input type="text" placeholder="Cleaner, Carpenter, Hair Dresser .."
                        class="w-full pl-4 py-4 rounded-xl border border-gray-200 bg-white text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                    <div
                        class="absolute right-1 top-1/2 transform -translate-y-1/2 bg-indigo-600 hover:bg-indigo-700 p-3 rounded-xl transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </div>
    
                <!-- Filter Button -->
                <button class="p-3 rounded-xl bg-indigo-600 hover:bg-indigo-700 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                    </svg>
                </button>
            </div>
        </div>
        <!-- Category -->
        <div class="mt-4" x-data="categorySlider()" x-init="init()">
            <div class="bg-white rounded-lg p-6">
                <!-- Header -->
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-lg font-semibold">Choose Category</h2>
                    <a href="#"
                        class="text-gray-600 bg-gray-100  py-1 px-2 rounded-full hover:text-gray-700 text-xs font-medium">See
                        All →</a>
                </div>
    
                <!-- Categories Slider Container -->
                <div class="relative px-4">
                    <!-- Left Navigation Button -->
                    <button
                        class="absolute -left-4 top-1/2 -translate-y-1/2 bg-white shadow-lg rounded-full p-2 z-10 hover:bg-gray-50 transition-all duration-300"
                        x-show="currentSlide > 0" 
                        x-cloak
                        x-transition 
                        @click="previousSlide()">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
    
                    <!-- Slides Container -->
                    <div x-ref="slidesContainer" class="overflow-hidden">
                        <div x-ref="slides" class="flex transition-transform duration-300 ease-out"
                            :style="{ transform: `translateX(-${currentSlide * 100}%)` }">
                            <template x-for="(slide, slideIndex) in slides" :key="slideIndex">
                                <div class="grid grid-cols-10 gap-4 w-full flex-shrink-0">
                                    <template x-for="(category, categoryIndex) in slide" :key="categoryIndex">
                                        <div class="flex flex-col items-center space-y-2">
                                            <div
                                                :class="category.bgColor + ' p-3 rounded-xl hover:bg-opacity-80 transition-colors cursor-pointer'">
                                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    x-html="category.icon">
                                                </svg>
                                            </div>
                                            <span class="text-xs text-center" x-text="category.name"></span>
                                        </div>
                                    </template>
                                </div>
                            </template>
                        </div>
                    </div>
    
                    <!-- Right Navigation Button -->
                    <button
                        class="absolute -right-4 top-1/2 -translate-y-1/2 bg-white shadow-lg rounded-full p-2 z-10 hover:bg-gray-50 transition-all duration-300"
                        x-show="currentSlide < slides.length - 1" 
                        x-cloak
                        x-transition 
                        @click="nextSlide()">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
    
                    <!-- Pagination Dots -->
                    <div class="flex justify-center space-x-2 mt-4">
                        <template x-for="(slide, index) in slides" :key="index">
                            <button class="w-2 h-2 rounded-full transition-all duration-300"
                                :class="currentSlide === index ? 'bg-indigo-600 w-4' : 'bg-gray-300'"
                                @click="goToSlide(index)"></button>
                        </template>
                    </div>
                </div>
            </div>
        </div>
        <!-- top rated -->
        <div class="max-w-7xl mx-auto mt-6">
            <!-- Header Section -->
            <div class="flex items-center justify-between mb-6">
                <h1 class="text-xl font-semibold text-gray-900">Top Rated Services</h1>
                <div class="flex items-center gap-4">
                    <button
                        class="bg-indigo-600 text-white text-xs font-semibold px-4 py-2 rounded-full hover:bg-indigo-700 transition-colors">
                        Top Rated
                    </button>
                    <span class="text-xs font-semibold text-gray-900">Latest</span>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-white rounded-xl p-6 text-center">
                    <div class="relative mb-4">
                        <div class="w-48 h-48 mx-auto relative">
                            <img src="https://images.unsplash.com/photo-1542038784456-1ea8e935640e" alt="Photographer"
                                class="w-full h-full rounded-full object-cover">
                            <div
                                class="absolute bottom-0 right-0 bg-green-500 text-white px-3 py-1 rounded-full text-sm flex items-center">
                                <span class="mr-1">★</span>
                                <span>4.8 (120)</span>
                            </div>
                        </div>
                    </div>
                    <h2 class="text-md font-semibold text-gray-800 mb-3">Dynamic Photographer Agency</h2>
                    <p class="text-gray-500 text-sm mb-6">Top-notch photography agency that travails in many kind of ...</p>
                    <button
                        class="bg-indigo-600 text-white py-2.5 px-6 rounded-full hover:bg-indigo-700 transition-colors text-sm">
                        Contact
                    </button>
                </div>
    
                <!-- Card 2 -->
                <div class="bg-white rounded-xl p-6 text-center">
                    <div class="relative mb-4">
                        <div class="w-48 h-48 mx-auto relative">
                            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab" alt="Real Estate"
                                class="w-full h-full rounded-full object-cover">
                            <div
                                class="absolute bottom-0 right-0 bg-green-500 text-white px-3 py-1 rounded-full text-sm flex items-center">
                                <span class="mr-1">★</span>
                                <span>4.8 (120)</span>
                            </div>
                        </div>
                    </div>
                    <h2 class="text-md font-semibold text-gray-700 mb-3">Real estate and property management</h2>
                    <p class="text-gray-500 text-sm mb-6">Top-notch photography agency that travails in many kind of ...</p>
                    <button
                        class="bg-indigo-600 text-white py-2.5 px-6 rounded-full hover:bg-indigo-700 transition-colors text-sm">
                        Contact
                    </button>
                </div>
    
                <!-- Card 3 -->
                <div class="bg-white rounded-xl p-6 text-center">
                    <div class="relative mb-4">
                        <div class="w-48 h-48 mx-auto relative">
                            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085" alt="Product Design"
                                class="w-full h-full rounded-full object-cover">
                            <div
                                class="absolute bottom-0 right-0 bg-green-500 text-white px-3 py-1 rounded-full text-sm flex items-center">
                                <span class="mr-1">★</span>
                                <span>4.8 (120)</span>
                            </div>
                        </div>
                    </div>
                    <h2 class="text-md font-semibold text-gray-700 mb-3">Product design agency</h2>
                    <p class="text-gray-500 text-sm mb-6">Top-notch photography agency that travails in many kind of ...</p>
                    <button
                        class="bg-indigo-600 text-white py-2.5 px-6 rounded-full hover:bg-indigo-700 transition-colors text-sm">
                        Contact
                    </button>
                </div>
            </div>
        </div>
        <!-- Services -->
        <div class="max-w-7xl mx-auto mt-6">
            <!-- Header Section -->
            <div class="flex items-center justify-between mb-6">
                <h1 class="text-xl font-semibold text-gray-900">Popular Services</h1>
                <div class="flex items-center gap-4">
                    <!-- Filter Button -->
                    <button class="p-3 rounded-xl bg-indigo-600 hover:bg-indigo-700 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                        </svg>
                    </button>
                    <span class="text-xs font-semibold text-gray-900">Filter</span>
                </div>
            </div>
            <!-- Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Service Card 1 -->
                <div class="bg-white rounded-xl shadow p-6">
                    <!-- Header with buttons -->
                    <div class="flex justify-end space-x-2 mb-6">
                        <button class="bg-[#6759FF] text-white px-4 py-1.5 rounded-lg text-sm font-medium">
                            Top Rated
                        </button>
                        <div class="bg-green-500 text-white px-3 py-1.5 rounded-lg text-sm flex items-center">
                            <span class="mr-1">★</span>
                            <span>4.8 (120)</span>
                        </div>
                    </div>
    
                    <!-- Profile Section -->
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                            <img src="https://images.unsplash.com/photo-1542038784456-1ea8e935640e" alt="Profile Picture"
                                class="w-full h-full object-cover">
                        </div>
                        <div>
                            <div class="text-gray-900 font-semibold">Dangote oil</div>
                            <div class="text-gray-500 text-sm">@dangote • 14s</div>
                        </div>
                        <button
                            class="ml-auto text-gray-600 bg-gray-100 p-2 hover:bg-gray-200 rounded-lg transition-colors">
                            •••
                        </button>
                    </div>
    
                    <hr class="my-2">
                    <!-- Content Section -->
                    <div>
                        <h2 class="text-md font-semibold text-gray-800 mb-3">Product design agency</h2>
                        <div class="flex items-center space-x-6 mb-4">
                            <!-- Available Status with Clock Icon -->
                            <div class="flex items-center space-x-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="text-green-600 text-sm font-medium">Available</span>
                            </div>
                            <!-- Location with Icon -->
                            <div class="flex items-center space-x-1 text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span class="text-sm">Angola, south Africa</span>
                            </div>
                        </div>
                        <p class="text-gray-500 text-sm mb-6">
                            Top-notch photography agency that travails in many kind of ...
                        </p>
    
                        <!-- Tags -->
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="bg-gray-100 px-3 py-1.5 rounded-full text-sm font-medium">Mechanic</span>
                            <span class="bg-gray-100 px-3 py-1.5 rounded-full text-sm font-medium">Photography & Video
                                Service</span>
                            <span class="bg-gray-100 px-3 py-1.5 rounded-full text-sm font-medium">Photo</span>
                            <span class="bg-gray-100 px-3 py-1.5 rounded-full text-sm font-medium">Wedding</span>
                            <span class="bg-gray-100 px-3 py-1.5 rounded-full text-sm font-medium">3 Years</span>
                        </div>
    
                        <!-- Contact Button -->
                        <button
                            class="bg-[#6759FF] text-white py-2.5 px-6 rounded-lg hover:bg-indigo-700 transition-colors text-sm font-medium w-full">
                            Contact
                        </button>
                    </div>
                </div>
    
                <!-- Service Card 2 -->
                <div class="bg-white rounded-xl shadow p-6">
                    <!-- Same structure as Card 1, but with different image and content -->
                    <div class="flex justify-end space-x-2 mb-6">
                        <button class="bg-[#6759FF] text-white px-4 py-1.5 rounded-lg text-sm font-medium">
                            Top Rated
                        </button>
                        <div class="bg-green-500 text-white px-3 py-1.5 rounded-lg text-sm flex items-center">
                            <span class="mr-1">★</span>
                            <span>4.9 (150)</span>
                        </div>
                    </div>
    
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab" alt="Profile Picture"
                                class="w-full h-full object-cover">
                        </div>
                        <div>
                            <div class="text-gray-900 font-semibold">Real Estate Pro</div>
                            <div class="text-gray-500 text-sm">@realestate • 30m</div>
                        </div>
                        <button
                            class="ml-auto text-gray-600 bg-gray-100 p-2 hover:bg-gray-200 rounded-lg transition-colors">
                            •••
                        </button>
                    </div>
                    <hr class="my-2">
                    <div>
                        <h2 class="text-md font-semibold text-gray-800 mb-3">Property Management Services</h2>
                        <div class="flex items-center space-x-6 mb-4">
                            <!-- Available Status with Clock Icon -->
                            <div class="flex items-center space-x-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="text-green-600 text-sm font-medium">Available</span>
                            </div>
                            <!-- Location with Icon -->
                            <div class="flex items-center space-x-1 text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span class="text-sm">Angola, south Africa</span>
                            </div>
                        </div>
                        <p class="text-gray-500 text-sm mb-6">
                            Professional real estate management services for residential...
                        </p>
    
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="bg-gray-100 px-3 py-1.5 rounded-full text-sm font-medium">Real Estate</span>
                            <span class="bg-gray-100 px-3 py-1.5 rounded-full text-sm font-medium">Property
                                Management</span>
                            <span class="bg-gray-100 px-3 py-1.5 rounded-full text-sm font-medium">Rental</span>
                            <span class="bg-gray-100 px-3 py-1.5 rounded-full text-sm font-medium">5 Years</span>
                        </div>
    
                        <button
                            class="bg-[#6759FF] text-white py-2.5 px-6 rounded-lg hover:bg-indigo-700 transition-colors text-sm font-medium w-full">
                            Contact
                        </button>
                    </div>
                </div>
    
                <!-- Service Card 3 -->
                <div class="bg-white rounded-xl shadow p-6">
                    <!-- Same structure as above, with different content -->
                    <div class="flex justify-end space-x-2 mb-6">
                        <button class="bg-[#6759FF] text-white px-4 py-1.5 rounded-lg text-sm font-medium">
                            Top Rated
                        </button>
                        <div class="bg-green-500 text-white px-3 py-1.5 rounded-lg text-sm flex items-center">
                            <span class="mr-1">★</span>
                            <span>4.7 (98)</span>
                        </div>
                    </div>
    
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085" alt="Profile Picture"
                                class="w-full h-full object-cover">
                        </div>
                        <div>
                            <div class="text-gray-900 font-semibold">Tech Solutions</div>
                            <div class="text-gray-500 text-sm">@techsol • 1h</div>
                        </div>
                        <button
                            class="ml-auto text-gray-600 bg-gray-100 p-2 hover:bg-gray-200 rounded-lg transition-colors">
                            •••
                        </button>
                    </div>
                    <hr class="my-2">
                    <div>
                        <h2 class="text-md font-semibold text-gray-800 mb-3">Software Development</h2>
                        <div class="flex items-center space-x-6 mb-4">
                            <!-- Available Status with Clock Icon -->
                            <div class="flex items-center space-x-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="text-green-600 text-sm font-medium">Available</span>
                            </div>
                            <!-- Location with Icon -->
                            <div class="flex items-center space-x-1 text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span class="text-sm">Angola, south Africa</span>
                            </div>
                        </div>
                        <p class="text-gray-500 text-sm mb-6">
                            Custom software development and consulting services...
                        </p>
    
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="bg-gray-100 px-3 py-1.5 rounded-full text-sm font-medium">Development</span>
                            <span class="bg-gray-100 px-3 py-1.5 rounded-full text-sm font-medium">Software</span>
                            <span class="bg-gray-100 px-3 py-1.5 rounded-full text-sm font-medium">Tech</span>
                            <span class="bg-gray-100 px-3 py-1.5 rounded-full text-sm font-medium">7 Years</span>
                        </div>
    
                        <button
                            class="bg-[#6759FF] text-white py-2.5 px-6 rounded-lg hover:bg-indigo-700 transition-colors text-sm font-medium w-full">
                            Contact
                        </button>
                    </div>
                </div>
    
                <!-- Service Card 4 -->
                <div class="bg-white rounded-xl shadow p-6">
                    <!-- Same structure as above, with different content -->
                    <div class="flex justify-end space-x-2 mb-6">
                        <button class="bg-[#6759FF] text-white px-4 py-1.5 rounded-lg text-sm font-medium">
                            Top Rated
                        </button>
                        <div class="bg-green-500 text-white px-3 py-1.5 rounded-lg text-sm flex items-center">
                            <span class="mr-1">★</span>
                            <span>4.6 (85)</span>
                        </div>
                    </div>
    
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                            <img src="https://images.unsplash.com/photo-1551434678-e076c223a692" alt="Profile Picture"
                                class="w-full h-full object-cover">
                        </div>
                        <div>
                            <div class="text-gray-900 font-semibold">Creative Studio</div>
                            <div class="text-gray-500 text-sm">@creative • 2h</div>
                        </div>
                        <button
                            class="ml-auto text-gray-600 bg-gray-100 p-2 hover:bg-gray-200 rounded-lg transition-colors">
                            •••
                        </button>
                    </div>
                    <hr class="my-2">
                    <div>
                        <h2 class="text-md font-semibold text-gray-800 mb-3">Digital Marketing Agency</h2>
                        <div class="flex items-center space-x-6 mb-4">
                            <!-- Available Status with Clock Icon -->
                            <div class="flex items-center space-x-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="text-green-600 text-sm font-medium">Available</span>
                            </div>
                            <!-- Location with Icon -->
                            <div class="flex items-center space-x-1 text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span class="text-sm">Angola, south Africa</span>
                            </div>
                        </div>
                        <p class="text-gray-500 text-sm mb-6">
                            Full-service digital marketing and branding solutions...
                        </p>
    
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="bg-gray-100 px-3 py-1.5 rounded-full text-sm font-medium">Marketing</span>
                            <span class="bg-gray-100 px-3 py-1.5 rounded-full text-sm font-medium">Digital</span>
                            <span class="bg-gray-100 px-3 py-1.5 rounded-full text-sm font-medium">Branding</span>
                            <span class="bg-gray-100 px-3 py-1.5 rounded-full text-sm font-medium">4 Years</span>
                        </div>
    
                        <button
                            class="bg-[#6759FF] text-white py-2.5 px-6 rounded-lg hover:bg-indigo-700 transition-colors text-sm font-medium w-full">
                            Contact
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
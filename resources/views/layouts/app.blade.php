<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen flex flex-col bg-gray-100 dark:bg-gray-900">
            <livewire:layouts.navbar />

            <!-- Page Heading -->
            {{-- @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif --}}

            <!-- Page Content -->
            <div class="flex flex-1 my-[5.5rem] ml-10">
                <!-- aside -->
                <livewire:layouts.aside>
                <main>
                    {{ $slot }}
                </main>
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
              try {
                const mainSearch = document.querySelector('.max-w-full');
                const navSearch = document.getElementById('navSearch');
                const mainSearchInput = document.querySelector('.max-w-full input[type="text"]');
                const navSearchInput = document.getElementById('navSearchInput');
        
                // Sync inputs
                function syncInputs(source, target) {
                  source.addEventListener('input', () => {
                    target.value = source.value;
                  });
                }
        
                // Sync both ways
                syncInputs(mainSearchInput, navSearchInput);
                syncInputs(navSearchInput, mainSearchInput);
        
                const observer = new IntersectionObserver(
                  (entries) => {
                    entries.forEach(entry => {
                      if (!entry.isIntersecting) {
                        // Search is out of view
                        navSearch.classList.remove('hidden');
                        requestAnimationFrame(() => {
                          navSearch.classList.remove('opacity-0');
                        });
                      } else {
                        // Search is in view
                        navSearch.classList.add('opacity-0');
                        navSearch.addEventListener('transitionend', () => {
                          if (entry.isIntersecting) {
                            navSearch.classList.add('hidden');
                          }
                        }, { once: true });
                      }
                    });
                  },
                  {
                    threshold: 0,
                    rootMargin: '-64px 0px 0px 0px' // Adjusts for the nav bar height
                  }
                );
        
                observer.observe(mainSearch);
        
                // Cleanup
                window.addEventListener('unload', () => {
                  observer.disconnect();
                });
        
              } catch (error) {
                console.error('Error initializing search functionality:', error);
              }
            });
        
            function categorySlider() {
              return {
                currentSlide: 0,
                slides: [],
                itemsPerSlide: 10, // Updated to 10 items per slide
                categories: [
                  { name: 'AC Repair', bgColor: 'bg-yellow-100', icon: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 18a2 2 0 01-2-2V8a2 2 0 012-2h4l2-2h4a2 2 0 012 2v3m-6 4v6m4-6v6m6-3v-3" />' },
                  { name: 'AC Repair', bgColor: 'bg-yellow-100', icon: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 18a2 2 0 01-2-2V8a2 2 0 012-2h4l2-2h4a2 2 0 012 2v3m-6 4v6m4-6v6m6-3v-3" />' },
                  { name: 'AC Repair', bgColor: 'bg-yellow-100', icon: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 18a2 2 0 01-2-2V8a2 2 0 012-2h4l2-2h4a2 2 0 012 2v3m-6 4v6m4-6v6m6-3v-3" />' },
                  { name: 'AC Repair', bgColor: 'bg-yellow-100', icon: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 18a2 2 0 01-2-2V8a2 2 0 012-2h4l2-2h4a2 2 0 012 2v3m-6 4v6m4-6v6m6-3v-3" />' },
                  { name: 'AC Repair', bgColor: 'bg-yellow-100', icon: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 18a2 2 0 01-2-2V8a2 2 0 012-2h4l2-2h4a2 2 0 012 2v3m-6 4v6m4-6v6m6-3v-3" />' },
                  { name: 'Beauty', bgColor: 'bg-purple-100', icon: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 017 12V7z" />' },
                  { name: 'Appliance', bgColor: 'bg-green-100', icon: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />' },
                  { name: 'Appliance', bgColor: 'bg-green-100', icon: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />' },
                  { name: 'Appliance', bgColor: 'bg-green-100', icon: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />' },
                  { name: 'Appliance', bgColor: 'bg-green-100', icon: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />' },
                  // Add more categories as needed...
                ],
        
                init() {
                  // Ensure each slide has exactly itemsPerSlide items
                  this.slides = this.categories.reduce((acc, curr, i) => {
                    if (i % this.itemsPerSlide === 0) acc.push([]);
                    acc[Math.floor(i / this.itemsPerSlide)].push(curr);
                    // Pad the last slide with empty items if needed
                    if (i === this.categories.length - 1) {
                      const lastSlide = acc[acc.length - 1];
                      while (lastSlide.length < this.itemsPerSlide) {
                        lastSlide.push({ name: '', bgColor: 'bg-transparent', icon: '' });
                      }
                    }
                    return acc;
                  }, []);
        
                  this.initSwipe();
                },
        
                nextSlide() {
                  if (this.currentSlide < this.slides.length - 1) {
                    this.currentSlide++;
                  }
                },
        
                previousSlide() {
                  if (this.currentSlide > 0) {
                    this.currentSlide--;
                  }
                },
        
                goToSlide(index) {
                  this.currentSlide = index;
                },
        
                initSwipe() {
                  const container = this.$refs.slidesContainer;
                  let startX, moveX;
        
                  container.addEventListener('touchstart', (e) => {
                    startX = e.touches[0].clientX;
                  });
        
                  container.addEventListener('touchmove', (e) => {
                    moveX = e.touches[0].clientX;
                  });
        
                  container.addEventListener('touchend', () => {
                    const diff = startX - moveX;
                    if (Math.abs(diff) > 50) { // Minimum swipe distance
                      if (diff > 0) {
                        this.nextSlide();
                      } else {
                        this.previousSlide();
                      }
                    }
                  });
                }
              }
            }
        </script>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SerendibMade - Authentic Sri Lankan Crafts</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&family=Raleway:wght@400;500;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#D97706',
                        secondary: '#059669',
                        accent: '#DC2626'
                    }
                }
            }
        }
    </script>
    <style>
        .cinzel-decorative {
            font-family: 'Cinzel Decorative', serif;
        }
        .raleway {
            font-family: 'Raleway', sans-serif;
        }
        .dropdown:hover .dropdown-menu {
            display: block;
        }
        .carousel-container {
            position: relative;
            overflow: hidden;
        }
        .carousel-slide {
            display: none;
            animation: fadeIn 0.5s ease-in-out;
        }
        .carousel-slide.active {
            display: block;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .gradient-overlay {
            background: linear-gradient(45deg, rgba(217, 119, 6, 0.8), rgba(5, 150, 105, 0.8));
        }
    </style>
</head>

<body class="#F3E9DC">
        <!-- Discount Bar -->
        <div class="bg-accent text-white text-center py-2 px-4 text-sm font-medium">
            <span>🎉 Get 10% discount on your first order! Use code: WELCOME10</span>
            <button class="ml-4 text-white hover:text-gray-200" onclick="this.parentElement.style.display='none'">×</button>
        </div>

        <!-- Navigation -->
        <nav class="bg-white shadow-lg sticky top-0 z-50">
            <div class="container mx-auto px-4">
                <div class="flex justify-between items-center py-4">
                    <!-- Logo -->
                    <div class="flex items-center space-x-2">
                        <a href="/" class="flex items-center">
                            <img 
                                src="{{ asset('Images_used/homepage_images/SERENDIB-Made.png') }}" 
                                alt="SerendibMade Logo"
                                class="h-10 w-auto mr-2"
                            >
                            <div class="text-2xl font-bold">
                                <span style="font-family: 'Cinzel Decorative', serif; color: #007D7D">Serendib</span>
                                <span style="font-family: 'Raleway', sans-serif; color: #7b8b8e">MADE</span>
                            </div>
                        </a>
                    </div>

                    <!-- Desktop Navigation -->
                    <div class="hidden lg:flex items-center space-x-8">
                        <a href="#" class="text-gray-700 hover:text-[#007D7D] transition">Home</a>
                        
                        <!-- Products Dropdown -->
                        <div class="relative dropdown">
                            <button class="text-gray-700 hover:text-[#007D7D] transition flex items-center dropdown-btn">
                                Products <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"></path></svg>
                            </button>
                            <div class="dropdown-menu absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 hidden">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#F2E6D8]">Traditional Art</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#F2E6D8]">Batik</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#F2E6D8]">Spices</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#F2E6D8]">Tea</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#F2E6D8]">Masks</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#F2E6D8]">Gems</a>
                            </div>
                        </div>

                        <a href="#" class="text-gray-700 hover:text-[#007D7D] transition">About Us</a>
                        <a href="#" class="text-gray-700 hover:text-[#007D7D] transition">Artisan</a>
                        <a href="#" class="text-gray-700 hover:text-[#007D7D] transition">Contact Us</a>
                        <a href="#" class="text-gray-700 hover:text-[#007D7D] transition">Gift</a>
                        
                        <!-- Language Button -->
                        <div class="relative dropdown">
                            <button class="text-gray-700 hover:text-[#007D7D] transition flex items-center dropdown-btn">
                                <span id="currentLang">EN</span> <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"></path></svg>
                            </button>
                            <div class="dropdown-menu absolute right-0 mt-2 w-24 bg-white rounded-md shadow-lg py-1 hidden">
                                <button onclick="changeLang('EN')" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-[#F2E6D8]">English</button>
                                <button onclick="changeLang('JP')" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-[#F2E6D8]">日本語</button>
                            </div>
                        </div>
                    </div>

                    <!-- Icons -->
                    <div class="flex items-center space-x-4">
                        <button class="text-gray-700 hover:text-[#007D7D] transition">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"></path></svg>
                        </button>
                        <button class="text-gray-700 hover:text-[#007D7D] transition">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        </button>
                        <button class="text-gray-700 hover:text-[#007D7D] transition relative">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                        </button>
                        <button class="text-gray-700 hover:text-[#007D7D] transition relative">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.293 2.293A1 1 0 0 0 5.414 17H19M7 13v4a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-4m-8 6h8"></path></svg>
                        </button>
                        
                        <!-- Mobile Menu Button -->
                        <button class="lg:hidden text-gray-700 hover:text-[#007D7D]" id="mobileMenuButton">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile Menu -->
                <div id="mobileMenu" class="lg:hidden hidden border-t">
                    <div class="py-4 space-y-4">
                        <a href="#" class="block text-gray-700 hover:text-[#007D7D]">Home</a>
                        <div>
                            <button onclick="toggleProductsMenu()" class="flex items-center justify-between w-full text-gray-700 hover:text-[#007D7D]">
                                Products <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"></path></svg>
                            </button>
                            <div id="mobileProductsMenu" class="hidden ml-4 mt-2 space-y-2">
                                <a href="#" class="block text-sm text-gray-600 hover:text-[#007D7D]">Traditional Art</a>
                                <a href="#" class="block text-sm text-gray-600 hover:text-[#007D7D]">Batik</a>
                                <a href="#" class="block text-sm text-gray-600 hover:text-[#007D7D]">Spices</a>
                                <a href="#" class="block text-sm text-gray-600 hover:text-[#007D7D]">Tea</a>
                                <a href="#" class="block text-sm text-gray-600 hover:text-[#007D7D]">Masks</a>
                                <a href="#" class="block text-sm text-gray-600 hover:text-[#007D7D]">Gems</a>
                            </div>
                        </div>
                        <a href="#" class="block text-gray-700 hover:text-[#007D7D]">About Us</a>
                        <a href="#" class="block text-gray-700 hover:text-[#007D7D]">Artisan</a>
                        <a href="#" class="block text-gray-700 hover:text-[#007D7D]">Contact Us</a>
                        <a href="#" class="block text-gray-700 hover:text-[#007D7D]">Gift</a>
                    </div>
                </div>
            </div>
        </nav>

        <script>
            // Dropdown functionality for desktop
            document.addEventListener('DOMContentLoaded', function() {
                // Desktop dropdowns
                const dropdownBtns = document.querySelectorAll('.dropdown-btn');
                
                dropdownBtns.forEach(btn => {
                    btn.addEventListener('click', function(e) {
                        e.stopPropagation();
                        const dropdown = this.closest('.dropdown');
                        const menu = dropdown.querySelector('.dropdown-menu');
                        
                        // Close all other dropdowns first
                        document.querySelectorAll('.dropdown-menu').forEach(m => {
                            if (m !== menu) m.classList.add('hidden');
                        });
                        
                        // Toggle current dropdown
                        menu.classList.toggle('hidden');
                    });
                });
                
                // Close dropdowns when clicking outside
                document.addEventListener('click', function() {
                    document.querySelectorAll('.dropdown-menu').forEach(menu => {
                        menu.classList.add('hidden');
                    });
                });
                
                // Mobile menu toggle
                const mobileMenuButton = document.getElementById('mobileMenuButton');
                const mobileMenu = document.getElementById('mobileMenu');
                
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
                
                // Mobile dropdown toggle
                const mobileDropdownBtns = document.querySelectorAll('.mobile-dropdown-btn');
                
                mobileDropdownBtns.forEach(btn => {
                    btn.addEventListener('click', function() {
                        const menu = document.getElementById('mobileProductsMenu');
                        menu.classList.toggle('hidden');
                    });
                });
                
                // Language change function
                window.changeLang = function(lang) {
                    document.getElementById('currentLang').textContent = lang;
                    // Close the dropdown
                    document.querySelectorAll('.dropdown-menu').forEach(menu => {
                        menu.classList.add('hidden');
                    });
                };
            });
        </script>

        <!-- Hero Carousel -->
       <section class="carousel-container h-[85vh] max-h-[800px] relative overflow-hidden">
                <!-- Slide 1 -->
                <div class="carousel-slide active relative h-full transition-opacity duration-1000 ease-in-out">
                    <img src="{{ asset('Images_used/homepage_images/bg_2.png') }}" alt="Sri Lankan Crafts" 
                        class="absolute inset-0 w-full h-full object-cover object-center transform transition-transform duration-1000 ease-in-out scale-100 group-hover:scale-105">
                    
                    <!-- Elegant gradient overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-black/20"></div>
                    
                    <div class="relative z-10 h-full flex items-center justify-center px-4">
                        <div class="text-center max-w-4xl px-4 transform transition-all duration-700 ease-in-out translate-y-0 opacity-100">
                            <h1 class="text-4xl md:text-5xl font-bold mb-6 text-white font-cinzel-decorative tracking-wide">
                                Discover Authentic Sri Lankan Crafts & Culture
                            </h1>
                            <p class="text-xl md:text-2xl mb-8 text-gray-100 font-raleway leading-relaxed max-w-2xl mx-auto">
                                Handcrafted treasures from the pearl of the Indian Ocean
                            </p>
                            <button class="bg-white text-primary px-10 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-all 
                                        duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Shop Now →
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Slide 2 -->
                <div class="carousel-slide relative h-full transition-opacity duration-1000 ease-in-out">
                    <img src="{{ asset('Images_used/homepage_images/bg_1.png') }}" alt="Local Artisans" 
                        class="absolute inset-0 w-full h-full object-cover object-center transform transition-transform duration-1000 ease-in-out scale-100 group-hover:scale-105">
                    
                    <!-- Different gradient direction for variety -->
                    <div class="absolute inset-0 bg-gradient-to-br from-primary/30 via-black/50 to-black/70"></div>
                    
                    <div class="relative z-10 h-full flex items-center justify-center px-4">
                        <div class="text-center max-w-4xl px-4 transform transition-all duration-700 ease-in-out translate-y-0 opacity-100">
                            <h1 class="text-4xl md:text-6xl font-bold mb-6 text-white font-cinzel-decorative tracking-wide">
                                Support Local Artisans
                            </h1>
                            <p class="text-xl md:text-2xl mb-8 text-gray-100 font-raleway leading-relaxed max-w-2xl mx-auto">
                                Every purchase supports traditional craftspeople and preserves heritage
                            </p>
                            <button class="bg-white text-primary px-10 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-all 
                                        duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Learn More →
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Slide 3 -->
                <div class="carousel-slide relative h-full transition-opacity duration-1000 ease-in-out">
                    <img src="{{ asset('Images_used/homepage_images/bg_3.png') }}" alt="Ceylon Tea" 
                        class="absolute inset-0 w-full h-full object-cover object-center transform transition-transform duration-1000 ease-in-out scale-100 group-hover:scale-105">
                    
                    <!-- Radial gradient overlay -->
                    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,rgba(0,0,0,0.3)_0%,rgba(0,0,0,0.7)_100%)]"></div>
                    
                    <div class="relative z-10 h-full flex items-center justify-center px-4">
                        <div class="text-center max-w-4xl px-4 transform transition-all duration-700 ease-in-out translate-y-0 opacity-100">
                            <h1 class="text-4xl md:text-6xl font-bold mb-6 text-white font-cinzel-decorative tracking-wide">
                                From Sri Lanka's Hands To Your Heart
                            </h1>
                            <p class="text-xl md:text-2xl mb-8 text-gray-100 font-raleway leading-relaxed max-w-2xl mx-auto">
                                Experience the finest flavors of Sri Lanka's lush plantations
                            </p>
                            <button class="bg-white text-primary px-10 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-all 
                                        duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                Explore →
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Carousel Controls -->
                <button onclick="previousSlide()" 
                        class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white/10 backdrop-blur-sm hover:bg-white/20 text-white p-3 rounded-full 
                            transition-all duration-300 hover:scale-110 shadow-lg border border-white/20">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                
                <button onclick="nextSlide()" 
                        class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white/10 backdrop-blur-sm hover:bg-white/20 text-white p-3 rounded-full 
                            transition-all duration-300 hover:scale-110 shadow-lg border border-white/20">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>

                <!-- Elegant Carousel Indicators -->
                <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex space-x-3">
                    <button onclick="goToSlide(0)" 
                            class="carousel-indicator active w-12 h-1.5 bg-white/80 hover:bg-white rounded-full transition-all duration-300"></button>
                    <button onclick="goToSlide(1)" 
                            class="carousel-indicator w-12 h-1.5 bg-white/50 hover:bg-white rounded-full transition-all duration-300"></button>
                    <button onclick="goToSlide(2)" 
                            class="carousel-indicator w-12 h-1.5 bg-white/50 hover:bg-white rounded-full transition-all duration-300"></button>
                </div>
        </section>

        <!-- Product Categories Section -->
        <!--<section class="py-12 bg-white">-->
        <section class="py-12" style="background-color: #FAF5EF;">
            <div class="container mx-auto px-4">
                <h1 class="text-4xl font-bold text-center mb-4" style="color: #5E3023;">Featured Products</h1>
                <p class="text-lg text-center mb-8 max-w-2xl mx-auto" style="color: #7b8b8e;">Explore our authentic Sri Lankan made collections</p>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Traditional Art -->
                    <div class="relative group rounded-xl overflow-hidden h-64 shadow-lg hover:shadow-xl transition-all">
                        <!--<img src="Images\cover_art.png" alt="Traditional Art" class="w-full h-full object-cover">-->
                        <img src="{{ asset('Images_used/homepage_images/cover_art.png') }}" alt="Traditional Art" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex flex-col justify-end p-6">
                        <h2 class="text-white text-3xl font-bold mb-2">TRADITIONAL ART</h2>
                        <button class="self-start bg-white text-gray-900 px-6 py-2 rounded-full text-sm font-semibold hover:bg-gray-100 transition">
                            SHOP NOW →
                        </button>
                        </div>
                    </div>

                    <!-- Spices -->
                    <div class="relative group rounded-xl overflow-hidden h-64 shadow-lg hover:shadow-xl transition-all">
                        <!--<img src="Images/cover_spices.png" alt="Spices" class="w-full h-full object-cover">-->
                        <img src="{{ asset('Images_used/homepage_images/cover_spices.png') }}" alt="Traditional Art" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex flex-col justify-end p-6">
                        <h2 class="text-white text-3xl font-bold mb-2">SPICES</h2>
                        <button class="self-start bg-white text-gray-900 px-6 py-2 rounded-full text-sm font-semibold hover:bg-gray-100 transition">
                            SHOP NOW →
                        </button>
                        </div>
                    </div>

                    <!-- Tea -->
                    <div class="relative group rounded-xl overflow-hidden h-64 shadow-lg hover:shadow-xl transition-all">
                        <!--<img src="Images/cover_tea.png" alt="Tea" class="w-full h-full object-cover">-->
                        <img src="{{ asset('Images_used/homepage_images/cover_tea.png') }}" alt="Traditional Art" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex flex-col justify-end p-6">
                        <h2 class="text-white text-3xl font-bold mb-2">TEA</h2>
                        <button class="self-start bg-white text-gray-900 px-6 py-2 rounded-full text-sm font-semibold hover:bg-gray-100 transition">
                            SHOP NOW →
                        </button>
                        </div>
                    </div>

                    <!-- Batik -->
                    <div class="relative group rounded-xl overflow-hidden h-64 shadow-lg hover:shadow-xl transition-all">
                        <!--<img src="Images/cover_batik.png" alt="Batik" class="w-full h-full object-cover">-->
                        <img src="{{ asset('Images_used/homepage_images/cover_batik.png') }}" alt="Traditional Art" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex flex-col justify-end p-6">
                        <h2 class="text-white text-3xl font-bold mb-2">BATIK</h2>
                        <button class="self-start bg-white text-gray-900 px-6 py-2 rounded-full text-sm font-semibold hover:bg-gray-100 transition">
                            SHOP NOW →
                        </button>
                        </div>
                    </div>

                    <!-- Gems -->
                    <div class="relative group rounded-xl overflow-hidden h-64 shadow-lg hover:shadow-xl transition-all">
                        <!--<img src="Images/cover_gems.png" alt="Team" class="w-full h-full object-cover">-->
                        <img src="{{ asset('Images_used/homepage_images/cover_gems.png') }}" alt="Traditional Art" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex flex-col justify-end p-6">
                        <h2 class="text-white text-3xl font-bold mb-2">GEMS</h2>
                        <button class="self-start bg-white text-gray-900 px-6 py-2 rounded-full text-sm font-semibold hover:bg-gray-100 transition">
                            SHOP NOW →
                        </button>
                        </div>
                    </div>

                    <!-- Masks -->
                    <div class="relative group rounded-xl overflow-hidden h-64 shadow-lg hover:shadow-xl transition-all">
                        <!--<img src="Images/cover_mask.png" alt="Masks" class="w-full h-full object-cover">-->
                        <img src="{{ asset('Images_used/homepage_images/cover_mask.png') }}" alt="Traditional Art" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex flex-col justify-end p-6">
                        <h2 class="text-white text-3xl font-bold mb-2">MASKS</h2>
                        <button class="self-start bg-white text-gray-900 px-6 py-2 rounded-full text-sm font-semibold hover:bg-gray-100 transition">
                            SHOP NOW →
                        </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Best Selling Products -->
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-3" style="color: #5E3023;">Best Selling Products</h2>
                <p class="text-lg  max-w-2xl mx-auto" style="color: #7b8b8e;">Discover our most popular items loved by customers</p>
            </div>

            <!-- Carousel Container -->
            <div class="relative">
                <!-- Slides Wrapper -->
                <div class="overflow-hidden">
                    <div id="carousel" class="flex transition-transform duration-300 ease-in-out">
                        <!-- Slide 1 -->
                        <div class="min-w-full">
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                                @foreach([1, 2, 3] as $product)
                                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                                    <div class="aspect-w-3 aspect-h-2">
                                        <img src="https://via.placeholder.com/600x400?text=Product+{{ $product }}" 
                                            alt="Product {{ $product }}" 
                                            class="w-full h-64 object-cover">
                                    </div>
                                    <div class="p-6">
                                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Premium Product {{ $product }}</h3>
                                        <p class="text-gray-600 mb-4">Exceptional quality with outstanding performance and durability.</p>
                                        <div class="flex justify-between items-center">
                                            <span class="text-lg font-bold text-indigo-600">Rs. {{ 1000 + ($product * 200) }}</span>
                                            <button class="text-sm font-medium text-indigo-600 hover:text-indigo-500 transition-colors">
                                                View Details
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="min-w-full">
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                                @foreach([4, 5, 6] as $product)
                                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                                    <div class="aspect-w-3 aspect-h-2">
                                        <img src="https://via.placeholder.com/600x400?text=Product+{{ $product }}" 
                                            alt="Product {{ $product }}" 
                                            class="w-full h-64 object-cover">
                                    </div>
                                    <div class="p-6">
                                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Premium Product {{ $product }}</h3>
                                        <p class="text-gray-600 mb-4">Exceptional quality with outstanding performance and durability.</p>
                                        <div class="flex justify-between items-center">
                                            <span class="text-lg font-bold text-indigo-600">Rs. {{ 1000 + ($product * 200) }}</span>
                                            <button class="text-sm font-medium text-indigo-600 hover:text-indigo-500 transition-colors">
                                                View Details
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation Controls -->
                <button onclick="prevSlide()" 
                        class="absolute left-0 top-1/2 -translate-y-1/2 -ml-4 bg-white p-3 rounded-full shadow-md text-gray-700 hover:text-indigo-600 hover:bg-gray-50 transition-colors focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button onclick="nextSlide()" 
                        class="absolute right-0 top-1/2 -translate-y-1/2 -mr-4 bg-white p-3 rounded-full shadow-md text-gray-700 hover:text-indigo-600 hover:bg-gray-50 transition-colors focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>

                <!-- Indicators -->
                <div class="flex justify-center mt-8 space-x-2">
                    @foreach([1, 2] as $slide)
                    <button onclick="goToSlide({{ $loop->index }})" 
                            class="w-3 h-3 rounded-full bg-gray-300 hover:bg-indigo-500 transition-colors focus:outline-none"
                            :class="{ 'bg-indigo-600': currentSlide === {{ $loop->index }} }">
                        <span class="sr-only">Go to slide {{ $slide }}</span>
                    </button>
                    @endforeach
                </div>
            </div>
        </section>

        <script>
            let currentSlide = 0;
            const carousel = document.getElementById('carousel');
            const slides = document.querySelectorAll('#carousel > div');
            const totalSlides = slides.length;

            function updateSlidePosition() {
                // Remove transition for instant wrap-around
                if (currentSlide === -1 || currentSlide === totalSlides) {
                    carousel.style.transition = 'none';
                } else {
                    carousel.style.transition = 'transform 300ms ease-in-out';
                }

                // Handle infinite looping
                if (currentSlide === -1) {
                    currentSlide = totalSlides - 1;
                } else if (currentSlide === totalSlides) {
                    currentSlide = 0;
                }

                const offset = currentSlide * -100;
                carousel.style.transform = `translateX(${offset}%)`;

                // Force reflow to apply the transition change
                void carousel.offsetWidth;
            }

            function nextSlide() {
                currentSlide++;
                updateSlidePosition();
            }

            function prevSlide() {
                currentSlide--;
                updateSlidePosition();
            }

            function goToSlide(index) {
                currentSlide = index;
                updateSlidePosition();
            }
        </script>

        <!-- Explore Sri Lanka -->
        <section class="py-16 bg-white relative overflow-hidden">
            <!-- Doodle Animation Background -->
            <div id="doodle-container" class="absolute inset-0 overflow-hidden pointer-events-none"></div>
            
            <div class="container mx-auto px-4 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-3xl font-bold mb-6 text-gray-800">Explore Sri Lanka</h2>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Discover the rich cultural heritage of Sri Lanka through our authentic products. Each item tells a story of traditional craftsmanship passed down through generations. From the vibrant colors of batik art to the aromatic spices that define our cuisine, experience the essence of the pearl of the Indian Ocean.
                        </p>
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-primary">500+</div>
                                <div class="text-sm text-gray-600">Unique Products</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-primary">200+</div>
                                <div class="text-sm text-gray-600">Local Artisans</div>
                            </div>
                        </div>
                        <button class="bg-primary text-white px-6 py-3 rounded-lg hover:bg-orange-600 transition">Discover More</button>
                    </div>
                    <!--Sri lanka map-->
                    <div class="w-70 h-96 rounded-lg overflow-hidden mx-auto">
                        <img src="{{ asset('Images_used/homepage_images/sri-lanka.png') }}" alt="SriLankan_Map" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            <style>
                .doodle {
                    position: absolute;
                    opacity: 0.3;
                    animation: float linear infinite;
                    z-index: 1;
                }
                @keyframes float {
                    0% {
                        transform: translateY(0) rotate(0deg);
                    }
                    100% {
                        transform: translateY(-100vh) rotate(360deg);
                    }
                }
            </style>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const doodles = [
                        '🪷', // lotus (for batik)
                        '🎭', // traditional mask
                        '🧵', // handloom/textiles
                        '🍵', // pottery/tea
                        '🧺', // cane crafts
                        '🌿', // spices
                        '🖌️', // painting
                        '🧶', // knitting
                        '🪡'  // sewing
                    ];

                    const container = document.getElementById('doodle-container');
                    const sectionHeight = document.querySelector('section').offsetHeight;
                    const sectionWidth = document.querySelector('section').offsetWidth;

                    for (let i = 0; i < 30; i++) {
                        const span = document.createElement('span');
                        span.className = 'doodle';
                        span.style.left = `${Math.random() * sectionWidth}px`;
                        span.style.top = `${Math.random() * sectionHeight + sectionHeight}px`;
                        span.style.fontSize = `${Math.random() * 20 + 20}px`;
                        span.style.animationDuration = `${Math.random() * 20 + 10}s`;
                        span.style.animationDelay = `${Math.random() * 5}s`;
                        span.innerText = doodles[Math.floor(Math.random() * doodles.length)];
                        container.appendChild(span);
                    }
                });
            </script>
        </section>

        <!-- Want to Join as an Artist -->
        <section class="py-16 bg-gradient-to-r from-[#007D7D] to-[#663399]">
            <div class="container mx-auto px-4 text-center text-white">
                <h2 class="text-3xl font-bold mb-6">Want to Join as an Artist?</h2>
                <p class="text-xl mb-8 max-w-2xl mx-auto">
                    Share your talents with the world. Join our community of skilled artisans and showcase your traditional crafts to a global audience.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="bg-[#CC3333] text-white px-8 py-3 rounded-lg font-semibold hover:bg-[#b82e2e] transition">Apply Now</button>
                    <button class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-[#FFCC00] hover:text-[#007D7D] transition">Learn More</button>
                </div>
            </div>
        </section>

        <!-- Artisan Spotlight -->
        <section class="py-16 bg-gray-100">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Artisan Spotlight</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Batik Artist -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden text-center">
                        <div class="h-48 overflow-hidden">
                            <img src="{{ asset('Images_used/homepage_images/artist1.png') }}" alt="Traditional Art" class="w-full h-full object-cover">

                        </div>
                        <div class="p-6">
                            <h3 class="font-semibold text-xl mb-2">Kamal Perera</h3>
                            <p class="text-primary font-medium mb-2">Batik Artist</p>
                            <p class="text-gray-600 text-sm">Master of traditional batik techniques with 25 years of experience creating stunning textile art.</p>
                        </div>
                    </div>
                    
                    <!-- Wood Carver -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden text-center">
                        <div class="h-48 overflow-hidden">
                           <img src="{{ asset('Images_used/homepage_images/artist3.png') }}" alt="Traditional Art" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="font-semibold text-xl mb-2">Rajan Silva</h3>
                            <p class="text-primary font-medium mb-2">Wood Carver</p>
                            <p class="text-gray-600 text-sm">Specializes in traditional mask carving and wooden sculptures, preserving ancient techniques.</p>
                        </div>
                    </div>
                    
                    <!-- Jewelry Designer -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden text-center">
                        <div class="h-48 overflow-hidden">
                            <img src="{{ asset('Images_used/homepage_images/artist4.png') }}" alt="Traditional Art" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="font-semibold text-xl mb-2">Nirmala Fernando</h3>
                            <p class="text-primary font-medium mb-2">Jewelry Designer</p>
                            <p class="text-gray-600 text-sm">Creates exquisite jewelry using traditional Sri Lankan gemstones and contemporary designs.</p>
                        </div>
                    </div>

                    <!-- Pottery Maker -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden text-center">
                        <div class="h-48 overflow-hidden">
                            <img src="{{ asset('Images_used/homepage_images/artist2.png') }}" alt="Traditional Art" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="font-semibold text-xl mb-2">Sunila Rathnayake</h3>
                            <p class="text-primary font-medium mb-2">Pottery Maker</p>
                            <p class="text-gray-600 text-sm">Creates beautiful terracotta pottery using traditional Sri Lankan methods passed down through generations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Customer Reviews Section -->
        <section class="py-20 bg-[#FDF9F5]">
        <div class="max-w-6xl mx-auto px-6">
            <!-- Section Header -->
            <div class="text-center mb-16">
            <h2 class="text-3xl font-serif font-bold text-[#5E3023] mb-4">Experiences That Speak Volumes</h2>
            <p class="text-lg text-[#5E3023]/90">Discover why thousands trust our craftsmanship</p>
            </div>

            <!-- Reviews Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Review 1 -->
            <div class="bg-white p-8 rounded-xl border border-[#F2E6D8] shadow-md hover:shadow-lg transition-all">
                <div class="flex mb-5">
                {[1, 2, 3, 4, 5].map((star) => (
                    <svg class="w-6 h-6 text-[#FFCC00]" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                ))}
                </div>
                <blockquote class="text-lg italic text-[#5E3023] mb-6 leading-relaxed">
                "The batik arrived framed in handmade teak – a stunning presentation."
                </blockquote>
                <div class="pt-5 border-t border-[#F2E6D8]">
                <p class="font-medium text-[#5E3023]">Vorandi Sakithma</p>
                <p class="text-sm text-[#007D7D] mt-1 flex items-center">
                    <svg class="w-4 h-4 mr-1 text-[#339966]" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    Verified Collector
                </p>
                </div>
            </div>

            <!-- Review 2 -->
            <div class="bg-white p-8 rounded-xl border border-[#F2E6D8] shadow-md hover:shadow-lg transition-all">
                <div class="flex mb-5">
                {[1, 2, 3, 4, 5].map((star) => (
                    <svg class="w-6 h-6 text-[#FFCC00]" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                ))}
                </div>
                <blockquote class="text-lg italic text-[#5E3023] mb-6 leading-relaxed">
                "Our office now serves this Ceylon tea exclusively."
                </blockquote>
                <div class="pt-5 border-t border-[#F2E6D8]">
                <p class="font-medium text-[#5E3023]">Hiruni Hansika</p>
                <p class="text-sm text-[#007D7D] mt-1 flex items-center">
                    <svg class="w-4 h-4 mr-1 text-[#339966]" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    Corporate Buyer
                </p>
                </div>
            </div>

            <!-- Review 3 -->
            <div class="bg-white p-8 rounded-xl border border-[#F2E6D8] shadow-md hover:shadow-lg transition-all">
                <div class="flex mb-5">
                {[1, 2, 3, 4, 5].map((star) => (
                    <svg class="w-6 h-6 text-[#FFCC00]" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                ))}
                </div>
                <blockquote class="text-lg italic text-[#5E3023] mb-6 leading-relaxed">
                "The Kolam mask now takes pride of place in our Bali villa."
                </blockquote>
                <div class="pt-5 border-t border-[#F2E6D8]">
                <p class="font-medium text-[#5E3023]">Tharun Adithya</p>
                <p class="text-sm text-[#007D7D] mt-1 flex items-center">
                    <svg class="w-4 h-4 mr-1 text-[#339966]" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    International Client
                </p>
                </div>
            </div>
            </div>

            <!-- CTA -->
            <div class="mt-16 text-center">
            <a href="#" class="inline-flex items-center px-8 py-3 text-base font-medium rounded-lg text-white bg-[#007D7D] hover:bg-[#006666] transition-colors group">
                Read More Stories
                <svg class="ml-2 w-5 h-5 transition-transform group-hover:translate-x-1" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                </svg>
            </a>
            </div>
        </div>
        </section>

        <!-- FAQ -->
        <section class="py-16 bg-gray-100">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Frequently Asked Questions</h2>
                <div class="max-w-3xl mx-auto">
                    <div class="space-y-4">
                        <div class="bg-white rounded-lg shadow-md">
                            <button onclick="toggleFaq(0)" class="w-full text-left p-6 focus:outline-none">
                                <div class="flex justify-between items-center">
                                    <h3 class="font-semibold text-lg">How do I know if a product is authentic?</h3>
                                    <svg class="w-5 h-5 faq-icon transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                                <div class="faq-content hidden mt-4 text-gray-600">
                                    All our products come with authenticity certificates. We work directly with local artisans and ensure every item meets our quality standards. Each product page includes detailed information about the artisan and crafting process.
                                </div>
                            </button>
                        </div>
                        
                        <div class="bg-white rounded-lg shadow-md">
                            <button onclick="toggleFaq(1)" class="w-full text-left p-6 focus:outline-none">
                                <div class="flex justify-between items-center">
                                    <h3 class="font-semibold text-lg">What is your shipping policy?</h3>
                                    <svg class="w-5 h-5 faq-icon transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                                <div class="faq-content hidden mt-4 text-gray-600">
                                    We offer worldwide shipping with tracking. Standard delivery takes 7-14 business days internationally. Express shipping is available for faster delivery. Free shipping on orders over $75.
                                </div>
                            </button>
                        </div>
                        
                        <div class="bg-white rounded-lg shadow-md">
                            <button onclick="toggleFaq(2)" class="w-full text-left p-6 focus:outline-none">
                                <div class="flex justify-between items-center">
                                    <h3 class="font-semibold text-lg">Do you offer custom orders?</h3>
                                    <svg class="w-5 h-5 faq-icon transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                                <div class="faq-content hidden mt-4 text-gray-600">
                                    Yes! We work with our artisans to create custom pieces. Contact us with your requirements and we'll provide a quote. Custom orders typically take 2-4 weeks to complete.
                                </div>
                            </button>
                        </div>
                        
                        <div class="bg-white rounded-lg shadow-md">
                            <button onclick="toggleFaq(3)" class="w-full text-left p-6 focus:outline-none">
                                <div class="flex justify-between items-center">
                                    <h3 class="font-semibold text-lg">What is your return policy?</h3>
                                    <svg class="w-5 h-5 faq-icon transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                                <div class="faq-content hidden mt-4 text-gray-600">
                                    We offer a 30-day return policy for unused items in original condition. Custom orders and perishables (like tea and spices) are non-returnable. Return shipping costs are covered by the customer unless the item is defective.
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <!-- Footer -->
        <footer class="bg-gray-800 text-white py-12">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Company Info -->
                    <div>
                        <div class="flex items-center mb-4">
                            <div class="text-2xl font-bold">
                                <span style="font-family: 'Cinzel Decorative', serif; color: #004d40">Serendib</span>
                                <span style="font-family: 'Raleway', sans-serif; color: #7b8b8e">MADE</span>
                            </div>
                        </div>
                        <p class="text-gray-300 mb-4">Bringing authentic Sri Lankan crafts to the world, supporting local artisans and preserving traditional techniques.</p>
                        <div class="flex space-x-4">
                            <button class="text-gray-300 hover:text-primary transition">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                            </button>
                            <button class="text-gray-300 hover:text-primary transition">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/></svg>
                            </button>
                            <button class="text-gray-300 hover:text-primary transition">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.042-3.441.219-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.097.118.112.221.083.343-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.012.001z"/></svg>
                            </button>
                            <button class="text-gray-300 hover:text-primary transition">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Quick Links -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-300 hover:text-primary transition">About Us</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-primary transition">Our Artisans</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-primary transition">Quality Promise</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-primary transition">Shipping Info</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-primary transition">Returns</a></li>
                        </ul>
                    </div>
                    
                    <!-- Categories -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Categories</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-300 hover:text-primary transition">Traditional Art</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-primary transition">Batik</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-primary transition">Ceylon Tea</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-primary transition">Spices</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-primary transition">Gemstones</a></li>
                        </ul>
                    </div>
                    
                    <!-- Contact -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                        <div class="space-y-2 text-gray-300">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span>Colombo, Sri Lanka</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                <span>+94 11 123 4567</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                <span>hello@serendibmade.com</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Bottom Footer -->
                <div class="border-t border-gray-700 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
                    <div class="text-gray-300 text-sm">
                        © 2025 SerendibMade. All rights reserved.
                    </div>
                    <div class="flex space-x-6 mt-4 md:mt-0">
                        <a href="#" class="text-gray-300 hover:text-primary text-sm transition">Privacy Policy</a>
                        <a href="#" class="text-gray-300 hover:text-primary text-sm transition">Terms of Service</a>
                        <a href="#" class="text-gray-300 hover:text-primary text-sm transition">Cookie Policy</a>
                    </div>
                </div>
            </div>
        </footer>

        <script>
            // Carousel functionality
            /*let currentSlide = 0;
            const slides = document.querySelectorAll('.carousel-slide');
            const indicators = document.querySelectorAll('.carousel-indicator');
            
            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle('active', i === index);
                });
                indicators.forEach((indicator, i) => {
                    indicator.classList.toggle('active', i === index);
                    if (i === index) {
                        indicator.classList.add('bg-opacity-100');
                        indicator.classList.remove('bg-opacity-50');
                    } else {
                        indicator.classList.add('bg-opacity-50');
                        indicator.classList.remove('bg-opacity-100');
                    }
                });
            }
            
            function nextSlide() {
                currentSlide = (currentSlide + 1) % slides.length;
                showSlide(currentSlide);
            }
            
            function previousSlide() {
                currentSlide = (currentSlide - 1 + slides.length) % slides.length;
                showSlide(currentSlide);
            }
            
            function goToSlide(index) {
                currentSlide = index;
                showSlide(currentSlide);
            }*/
            
            // Auto-advance carousel
            //setInterval(nextSlide, 5000);
            
            // Mobile menu toggle
            /*function toggleMobileMenu() {
                const mobileMenu = document.getElementById('mobileMenu');
                mobileMenu.classList.toggle('hidden');
            }
            
            function toggleProductsMenu() {
                const productsMenu = document.getElementById('mobileProductsMenu');
                productsMenu.classList.toggle('hidden');
            }
            
            // Language switcher
            function changeLang(lang) {
                document.getElementById('currentLang').textContent = lang;
            }*/
            
            // FAQ toggle
            function toggleFaq(index) {
                const faqItems = document.querySelectorAll('.faq-content');
                const faqIcons = document.querySelectorAll('.faq-icon');
                
                const content = faqItems[index];
                const icon = faqIcons[index];
                
                content.classList.toggle('hidden');
                
                if (content.classList.contains('hidden')) {
                    icon.style.transform = 'rotate(0deg)';
                } else {
                    icon.style.transform = 'rotate(180deg)';
                }
            }
            
            // Initialize indicators
           // showSlide(0);
        </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SerendibMade - Authentic Sri Lankan Crafts & Products</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
    <style>
        .hero-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .product-card {
            transition: all 0.3s ease;
        }
        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        .category-section {
            scroll-margin-top: 100px;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <!-- Logo - Updated to match second navbar -->
                <div class="flex items-center space-x-2">
                    <div class="w-10 h-10 bg-gradient-to-r from-orange-500 to-red-500 rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="text-2xl font-bold text-primary">SerendibMade</div>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="#" class="text-gray-700 hover:text-primary transition">Home</a>
                    
                    <!-- Products Dropdown -->
                    <div class="relative dropdown">
                        <button class="text-gray-700 hover:text-primary transition flex items-center">
                            Products <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"></path></svg>
                        </button>
                        <div class="dropdown-menu absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 hidden">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Traditional Art</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Batik</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Spices</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Tea</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Masks</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Gems</a>
                        </div>
                    </div>

                    <a href="#" class="text-gray-700 hover:text-primary transition">About Us</a>
                    <a href="#" class="text-gray-700 hover:text-primary transition">Artisan</a>
                    <a href="#" class="text-gray-700 hover:text-primary transition">Contact Us</a>
                    <a href="#" class="text-gray-700 hover:text-primary transition">Gift</a>
                    
                    <!-- Language Button -->
                    <div class="relative dropdown">
                        <button class="text-gray-700 hover:text-primary transition flex items-center">
                            <span id="currentLang">EN</span> <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"></path></svg>
                        </button>
                        <div class="dropdown-menu absolute right-0 mt-2 w-24 bg-white rounded-md shadow-lg py-1 hidden">
                            <button onclick="changeLang('EN')" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">English</button>
                            <button onclick="changeLang('JP')" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">日本語</button>
                        </div>
                    </div>
                </div>

                <!-- Icons -->
                <div class="flex items-center space-x-4">
                    <button class="text-gray-700 hover:text-primary transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"></path></svg>
                    </button>
                    <button class="text-gray-700 hover:text-primary transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    </button>
                    <button class="text-gray-700 hover:text-primary transition relative">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                        <span class="absolute -top-2 -right-2 bg-accent text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">3</span>
                    </button>
                    <button class="text-gray-700 hover:text-primary transition relative">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.293 2.293A1 1 0 0 0 5.414 17H19M7 13v4a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-4m-8 6h8"></path></svg>
                        <span class="absolute -top-2 -right-2 bg-accent text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">2</span>
                    </button>
                    
                    <!-- Mobile Menu Button -->
                    <button class="lg:hidden text-gray-700" onclick="toggleMobileMenu()">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobileMenu" class="lg:hidden hidden border-t">
                <div class="py-4 space-y-4">
                    <a href="#" class="block text-gray-700 hover:text-primary">Home</a>
                    <div>
                        <button onclick="toggleProductsMenu()" class="flex items-center justify-between w-full text-gray-700 hover:text-primary">
                            Products <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"></path></svg>
                        </button>
                        <div id="mobileProductsMenu" class="hidden ml-4 mt-2 space-y-2">
                            <a href="#" class="block text-sm text-gray-600">Traditional Art</a>
                            <a href="#" class="block text-sm text-gray-600">Batik</a>
                            <a href="#" class="block text-sm text-gray-600">Spices</a>
                            <a href="#" class="block text-sm text-gray-600">Tea</a>
                            <a href="#" class="block text-sm text-gray-600">Masks</a>
                            <a href="#" class="block text-sm text-gray-600">Gems</a>
                        </div>
                    </div>
                    <a href="#" class="block text-gray-700 hover:text-primary">About Us</a>
                    <a href="#" class="block text-gray-700 hover:text-primary">Artisan</a>
                    <a href="#" class="block text-gray-700 hover:text-primary">Contact Us</a>
                    <a href="#" class="block text-gray-700 hover:text-primary">Gift</a>
                </div>
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const carousel = document.getElementById('product-carousel');
                const prevBtn = document.getElementById('prev-btn');
                const nextBtn = document.getElementById('next-btn');
                const productWidth = document.querySelector('.md\\:w-1\\/3').offsetWidth;
                let currentIndex = 0;
                const totalProducts = 9;
                const visibleProducts = 3;
                
                function updateCarousel() {
                    const maxIndex = totalProducts - visibleProducts;
                    if (currentIndex > maxIndex) currentIndex = 0;
                    if (currentIndex < 0) currentIndex = maxIndex;
                    
                    const offset = -currentIndex * productWidth;
                    carousel.style.transform = `translateX(${offset}px)`;
                }
                
                nextBtn.addEventListener('click', function() {
                    currentIndex++;
                    if (currentIndex > totalProducts - visibleProducts) {
                        currentIndex = 0;
                    }
                    updateCarousel();
                });
                
                prevBtn.addEventListener('click', function() {
                    currentIndex--;
                    if (currentIndex < 0) {
                        currentIndex = totalProducts - visibleProducts;
                    }
                    updateCarousel();
                });
                
                // Auto-rotate every 5 seconds
                setInterval(function() {
                    currentIndex++;
                    if (currentIndex > totalProducts - visibleProducts) {
                        currentIndex = 0;
                    }
                    updateCarousel();
                }, 5000);
                
                // Initialize
                updateCarousel();
            });
        </script>
    </nav>

    <!-- Hero Section -->
    <section class="hero-gradient text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-5xl font-bold mb-4">Discover Sri Lankan Heritage</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Authentic handcrafted products from the Pearl of the Indian Ocean. Each piece tells a story of tradition and artistry.</p>
            <button class="bg-white text-blue-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition-colors">
                Shop Now
            </button>
        </div>
    </section>

    <!-- Traditional Art Section -->
    <section id="traditional-art" class="category-section py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h3 class="text-4xl font-bold text-gray-800 mb-4">Traditional Art</h3>
                <p class="text-gray-600 max-w-2xl mx-auto">Exquisite paintings and sculptures that capture the essence of Sri Lankan culture and spirituality</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="product-card bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=400&h=300&fit=crop" alt="Traditional Painting" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-semibold mb-2">Buddha Lotus Painting</h4>
                        <p class="text-gray-600 mb-4">Hand-painted traditional artwork on canvas</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">$89.99</span>
                            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1576398289164-c48dc021b4e1?w=400&h=300&fit=crop" alt="Wood Carving" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-semibold mb-2">Elephant Wood Carving</h4>
                        <p class="text-gray-600 mb-4">Handcrafted from teak wood</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">$124.99</span>
                            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=400&h=300&fit=crop" alt="Temple Art" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-semibold mb-2">Temple Scene Canvas</h4>
                        <p class="text-gray-600 mb-4">Traditional Sri Lankan temple artwork</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">$67.99</span>
                            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Batik Section -->
    <section id="batik" class="category-section py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h3 class="text-4xl font-bold text-gray-800 mb-4">Batik</h3>
                <p class="text-gray-600 max-w-2xl mx-auto">Vibrant wax-resist dyeing technique creating stunning patterns on fabric</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="product-card bg-gray-50 rounded-lg shadow-md overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1594736797933-d0b22cad7de1?w=400&h=300&fit=crop" alt="Batik Dress" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-semibold mb-2">Traditional Batik Dress</h4>
                        <p class="text-gray-600 mb-4">Handcrafted silk batik dress</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">$156.99</span>
                            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-gray-50 rounded-lg shadow-md overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1594736797933-d0b22cad7de1?w=400&h=300&fit=crop" alt="Batik Wall Art" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-semibold mb-2">Batik Wall Hanging</h4>
                        <p class="text-gray-600 mb-4">Decorative batik art piece</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">$78.99</span>
                            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-gray-50 rounded-lg shadow-md overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1594736797933-d0b22cad7de1?w=400&h=300&fit=crop" alt="Batik Scarf" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-semibold mb-2">Silk Batik Scarf</h4>
                        <p class="text-gray-600 mb-4">Luxurious silk scarf with batik print</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">$42.99</span>
                            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Masks Section -->
    <section id="masks" class="category-section py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h3 class="text-4xl font-bold text-gray-800 mb-4">Traditional Masks</h3>
                <p class="text-gray-600 max-w-2xl mx-auto">Ceremonial and decorative masks used in Sri Lankan traditional performances</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="product-card bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=400&h=300&fit=crop" alt="Devil Mask" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-semibold mb-2">Kolam Devil Mask</h4>
                        <p class="text-gray-600 mb-4">Traditional performance mask</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">$95.99</span>
                            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=400&h=300&fit=crop" alt="Raksha Mask" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-semibold mb-2">Raksha Demon Mask</h4>
                        <p class="text-gray-600 mb-4">Protective demon mask</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">$112.99</span>
                            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=400&h=300&fit=crop" alt="Sanni Mask" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-semibold mb-2">Sanni Healing Mask</h4>
                        <p class="text-gray-600 mb-4">Traditional healing ceremony mask</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">$87.99</span>
                            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Spices Section -->
    <section id="spices" class="category-section py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h3 class="text-4xl font-bold text-gray-800 mb-4">Ceylon Spices</h3>
                <p class="text-gray-600 max-w-2xl mx-auto">Aromatic spices from the spice gardens of Sri Lanka</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="product-card bg-gray-50 rounded-lg shadow-md overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1596040033229-a9821ebd058d?w=400&h=300&fit=crop" alt="Ceylon Cinnamon" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-semibold mb-2">Ceylon Cinnamon</h4>
                        <p class="text-gray-600 mb-4">Premium quality true cinnamon</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">$24.99</span>
                            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-gray-50 rounded-lg shadow-md overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1596040033229-a9821ebd058d?w=400&h=300&fit=crop" alt="Cardamom" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-semibold mb-2">Ceylon Cardamom</h4>
                        <p class="text-gray-600 mb-4">Aromatic green cardamom pods</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">$18.99</span>
                            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-gray-50 rounded-lg shadow-md overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1596040033229-a9821ebd058d?w=400&h=300&fit=crop" alt="Spice Mix" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-semibold mb-2">Curry Spice Mix</h4>
                        <p class="text-gray-600 mb-4">Authentic Sri Lankan curry blend</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">$16.99</span>
                            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gems Section -->
    <section id="gems" class="category-section py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h3 class="text-4xl font-bold text-gray-800 mb-4">Ceylon Gems</h3>
                <p class="text-gray-600 max-w-2xl mx-auto">Precious and semi-precious stones from the gem capital of the world</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="product-card bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1515562141207-7a88fb7ce338?w=400&h=300&fit=crop" alt="Blue Sapphire" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-semibold mb-2">Ceylon Blue Sapphire</h4>
                        <p class="text-gray-600 mb-4">2.5 carat natural blue sapphire</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">$1,299.99</span>
                            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1515562141207-7a88fb7ce338?w=400&h=300&fit=crop" alt="Star Ruby" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-semibold mb-2">Star Ruby</h4>
                        <p class="text-gray-600 mb-4">Rare star ruby with asterism</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">$899.99</span>
                            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1515562141207-7a88fb7ce338?w=400&h=300&fit=crop" alt="Yellow Sapphire" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-semibold mb-2">Yellow Sapphire</h4>
                        <p class="text-gray-600 mb-4">Brilliant yellow sapphire stone</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">$756.99</span>
                            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tea Section -->
    <section id="tea" class="category-section py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h3 class="text-4xl font-bold text-gray-800 mb-4">Ceylon Tea</h3>
                <p class="text-gray-600 max-w-2xl mx-auto">World-renowned tea from the highlands of Sri Lanka</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="product-card bg-gray-50 rounded-lg shadow-md overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1556679343-c7306c1976bc?w=400&h=300&fit=crop" alt="Earl Grey Tea" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-semibold mb-2">Ceylon Earl Grey</h4>
                        <p class="text-gray-600 mb-4">Premium black tea with bergamot</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">$19.99</span>
                            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-gray-50 rounded-lg shadow-md overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1556679343-c7306c1976bc?w=400&h=300&fit=crop" alt="Pekoe Tea" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-semibold mb-2">Orange Pekoe</h4>
                        <p class="text-gray-600 mb-4">High-grade Ceylon black tea</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">$15.99</span>
                            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-gray-50 rounded-lg shadow-md overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1556679343-c7306c1976bc?w=400&h=300&fit=crop" alt="Green Tea" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-semibold mb-2">Ceylon Green Tea</h4>
                        <p class="text-gray-600 mb-4">Organic green tea leaves</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">$22.99</span>
                            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <!--<section class="bg-gray-800 text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h3 class="text-3xl font-bold mb-4">Stay Updated</h3>
            <p class="text-gray-300 mb-8">Subscribe to our newsletter for exclusive offers and new arrivals</p>
            <div class="flex justify-center">
                <div class="flex max-w-md w-full">
                    <input type="email" placeholder="Your email address" class="flex-1 px-4 py-3 rounded-l-lg text-gray-800 focus:outline-none">
                    <button class="bg-blue-600 px-6 py-3 rounded-r-lg hover:bg-blue-700 transition-colors">
                        Subscribe
                    </button>
                </div>
            </div>
        </div>
    </section>-->

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Company Info -->
                    <div>
                        <div class="text-2xl font-bold text-primary mb-4">SerendibMade</div>
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

    </body>
    </html>
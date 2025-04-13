<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Birthday, Mom!</title>
    <!-- Use either asset or Vite, but be consistent -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Custom CSS for animations */
        .fade-in {
            animation: fadeIn 1.5s ease-in;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .slide-up {
            animation: slideUp 1s ease-out;
        }

        @keyframes slideUp {
            from { transform: translateY(50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .testimonial-card:hover {
            transform: translateY(-10px);
            transition: all 0.3s ease;
        }
        
        /* Navbar styles */
        .navbar-link {
            color: #4B5563; /* text-gray-600 */
            padding: 0.5rem 0.75rem; /* px-3 py-2 */
            border-radius: 0.375rem; /* rounded-md */
            font-size: 0.875rem; /* text-sm */
            font-weight: 500; /* font-medium */
            transition: color 0.3s ease;
        }
        
        .navbar-link:hover {
            color: #9333EA; /* hover:text-purple-600 */
        }

        .mobile-menu {
            display: none;
            position: absolute;
            top: 4rem; /* top-16 */
            left: 0;
            right: 0;
            background-color: white;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            transform-origin: top right;
            transition: all 0.3s ease;
            opacity: 0;
            transform: scale(0.95);
        }

        .mobile-menu.open {
            display: block;
            opacity: 1;
            transform: scale(1);
        }
        
        @media (min-width: 768px) {
            .mobile-menu {
                display: none !important;
            }
        }

        /* Special animation keyframes */
        @keyframes floatUp {
            0% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0); }
        }

        @keyframes shine {
            0% { background-position: -100% 0; }
            100% { background-position: 200% 0; }
        }

        /* Photo cards styling */
        .photo-grid {
            display: grid;
            grid-template-columns: repeat(1, minmax(0, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }
        
        @media (min-width: 640px) {
            .photo-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }
        
        @media (min-width: 1024px) {
            .photo-grid {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
        }
        
        .photo-card {
            background-color: white;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
            transition: all 0.5s ease;
            opacity: 0;
            transform: translateY(50px);
        }
        
        .photo-card.animated {
            animation: slideUp 0.8s ease forwards;
        }
        
        .photo-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 30px -10px rgba(0, 0, 0, 0.15);
        }
        
        .photo-img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.8s ease;
        }
        
        .photo-card:hover .photo-img {
            transform: scale(1.1);
        }
        
        .photo-content {
            padding: 1.5rem;
        }
        
        .photo-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #4B5563;
            margin-bottom: 0.5rem;
        }
        
        .photo-description {
            color: #6B7280;
            font-size: 0.875rem;
            line-height: 1.5;
        }
        
        .memory-date {
            display: inline-block;
            background: linear-gradient(90deg, #f9a8d4, #c084fc, #f9a8d4);
            background-size: 200% auto;
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            margin-top: 1rem;
            animation: shine 3s linear infinite;
        }
        
        .section-title {
            text-align: center;
            font-size: 2.25rem;
            font-weight: 700;
            color: #9333EA;
            margin: 2rem 0;
            opacity: 0;
            animation: fadeIn 1s ease 0.2s forwards;
            position: relative;
        }
        
        .section-title::after {
            content: "";
            display: block;
            width: 100px;
            height: 3px;
            background: linear-gradient(90deg, #f9a8d4, #c084fc);
            margin: 0.5rem auto 0;
        }
        
        .section-subtitle {
            text-align: center;
            color: #6B7280;
            max-width: 600px;
            margin: 0 auto 3rem;
            opacity: 0;
            animation: fadeIn 1s ease 0.4s forwards;
        }
        
        /* Floating hearts animation */
        .hearts-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 100;
            overflow: hidden;
        }
        
        .heart {
            position: absolute;
            opacity: 0;
            animation: floatUp 4s ease-in infinite;
        }
    </style>
</head>
<body class="bg-gradient-to-r from-pink-100 to-purple-100">
   <nav class="bg-white shadow-lg relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}" class="text-2xl font-bold text-purple-600 hover:text-purple-700 transition-colors duration-300">
                       <span class="bg-pink-300 rounded-md p-2"> Nessa's</span> Page! 🎉
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="{{ route('home') }}" class="navbar-link">Home</a>
                    <a href="{{ route('biography') }}" class="navbar-link">Biography</a>
                    <a href="{{ route('gallery') }}" class="navbar-link">Gallery</a>
                    <a href="{{ route('contact') }}" class="navbar-link">Contact</a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" aria-expanded="false" aria-label="Toggle navigation menu" class="text-gray-600 hover:text-purple-600 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="{{ route('home') }}" class="navbar-link block">Home</a>
                <a href="{{ route('biography') }}" class="navbar-link block">Biography</a>
                <a href="{{ route('gallery') }}" class="navbar-link block">Gallery</a>
                <a href="{{ route('contact') }}" class="navbar-link block">Contact</a>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

        <footer class="bg-purple-600 text-white mt-12 py-6">
            <div class="max-w-7xl mx-auto px-4 text-center">
                <div class="flex justify-center items-center space-x-6 mb-4">
                    <a href="https://web.facebook.com/vanessa.awanyo" class="hover:text-purple-200 flex items-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4 fill-current">
                                <path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256z"/>
                            </svg>
                            <span>Facebook</span>
                        </a>

                    
                    <a href="https://www.linkedin.com/in/vanessa-awanyo-5b4676159/" class="hover:text-purple-200 flex items-center space-x-1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-4 h-4 fill-current">
                            <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/>
                        </svg>
                        <span>LinkedIn</span>
                    </a>

                    <a href="#" class="hover:text-purple-200">Twitter</a>
                </div>
                <p class="text-sm">&copy; {{ date('Y') }} Created with ❤️ by cschild</p>
            </div>
        </footer>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu toggle
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function(event) {
                    event.stopPropagation();
                    mobileMenu.classList.toggle('open');
                    
                    // Toggle aria-expanded state
                    const isExpanded = mobileMenuButton.getAttribute('aria-expanded') === 'true';
                    mobileMenuButton.setAttribute('aria-expanded', !isExpanded);
                });

                // Close menu when clicking outside
                document.addEventListener('click', function(event) {
                    if (mobileMenu.classList.contains('open') && 
                        !mobileMenu.contains(event.target) && 
                        !mobileMenuButton.contains(event.target)) {
                        mobileMenu.classList.remove('open');
                        mobileMenuButton.setAttribute('aria-expanded', 'false');
                    }
                });

                // Close menu on resize
                window.addEventListener('resize', function() {
                    if (window.innerWidth >= 768) {
                        mobileMenu.classList.remove('open');
                        mobileMenuButton.setAttribute('aria-expanded', 'false');
                    }
                });
            }

            // Animate cards on scroll
            const cards = document.querySelectorAll('.photo-card');
            
            function checkCardVisibility() {
                const triggerBottom = window.innerHeight * 0.8;
                
                cards.forEach((card, index) => {
                    const cardTop = card.getBoundingClientRect().top;
                    
                    if (cardTop < triggerBottom) {
                        // Add delay based on card index for staggered animation
                        setTimeout(() => {
                            card.classList.add('animated');
                        }, 200 * index);
                    }
                });
            }
            
            // Check visibility on load
            checkCardVisibility();
            
            // Check visibility on scroll
            window.addEventListener('scroll', checkCardVisibility);
            
            // Create floating hearts animation
            const heartsContainer = document.getElementById('hearts-container');
            const heartColors = ['#f9a8d4', '#e879f9', '#c084fc', '#a78bfa', '#818cf8'];
            
            function createHeart() {
                if (!heartsContainer) return;
                
                const heart = document.createElement('div');
                heart.classList.add('heart');
                
                // Random position, size, and color
                const size = Math.random() * 20 + 10;
                const left = Math.random() * 100;
                const delay = Math.random() * 5;
                const duration = Math.random() * 3 + 3;
                const color = heartColors[Math.floor(Math.random() * heartColors.length)];
                
                heart.innerHTML = '❤';
                heart.style.fontSize = `${size}px`;
                heart.style.left = `${left}%`;
                heart.style.bottom = '-20px';
                heart.style.color = color;
                heart.style.animationDuration = `${duration}s`;
                heart.style.animationDelay = `${delay}s`;
                heart.style.opacity = '0';
                
                heartsContainer.appendChild(heart);
                
                // Remove heart after animation completes
                setTimeout(() => {
                    heart.remove();
                }, (delay + duration) * 1000);
            }
            
            // Create hearts periodically
            setInterval(createHeart, 300);
        });
    </script>
</body>
</html>
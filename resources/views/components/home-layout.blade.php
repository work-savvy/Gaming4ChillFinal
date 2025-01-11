<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gaming 4 Chill</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{asset('css/custom-colors.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Rubik+Wet+Paint&display=swap" rel="stylesheet">
          integrity="..." crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <style>
        @keyframes wiggle {
            0%, 100% {
                transform: rotate(0deg);
            }
            25% {
                transform: rotate(-10deg);
            }
            75% {
                transform: rotate(10deg);
            }
        }

        .animate-wiggle {
            animation: wiggle 0.3s ease-in-out;
        }
    </style>
    <style>
        @keyframes fade-in-down {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-down {
            animation: fade-in-down 0.5s ease-out;
        }
    </style>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-900">
<!-- Place this right after your opening body tag or at the start of your main content -->
<div class="fixed bottom-5 right-4 z-50 space-y-4 w-96">
    @if (session('success'))
        <div
            class="relative bg-green-900/60 backdrop-blur-lg border border-green-500/50 text-white px-6 py-4 rounded-lg shadow-lg transform transition-all duration-500 ease-in-out animate-fade-in-down"
            x-data="{ show: true }"
            x-show="show"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform -translate-x-20"
            x-transition:enter-end="opacity-100 transform translate-x-0"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 transform translate-x-0"
            x-transition:leave-end="opacity-0 transform translate-x-20">
            <div class="flex items-center space-x-3">
                <svg class="h-6 w-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <p class="font-medium">{{ session('success') }}</p>
            </div>
            <button @click="show = false" class="absolute top-2 right-2 text-green-200 hover:text-white">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    @endif

    @if (session('error'))
        <div
            class="relative bg-red-900/60 backdrop-blur-lg border border-red-500/50 text-white px-6 py-4 rounded-lg shadow-lg transform transition-all duration-500 ease-in-out animate-fade-in-down"
            x-data="{ show: true }"
            x-show="show"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform -translate-x-20"
            x-transition:enter-end="opacity-100 transform translate-x-0"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 transform translate-x-0"
            x-transition:leave-end="opacity-0 transform translate-x-20">
            <div class="flex items-center space-x-3">
                <svg class="h-6 w-6 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <p class="font-medium">{{ session('error') }}</p>
            </div>
            <button @click="show = false" class="absolute top-2 right-2 text-red-200 hover:text-white">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    @endif
</div>

<!-- Add these styles to your CSS or in a style tag -->

<nav
    class="bg-gray-800/70 backdrop-blur-lg fixed w-full z-50 top-0 left-0 shadow-md transition-shadow duration-300 hover:shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
        <div class="flex items-center justify-between h-16">
            <div class="flex-shrink-0">
                <a href="/" class="text-xl font-bold text-white">
                    <span class="font-['anton'] text-3xl tracking-wider">Gaming 4 Chill</span>
                </a>
            </div>
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                    <a href="{{route('home')}}" class="nav-link">Home</a>
                    <a href="{{route('view-tournament')}}" class="nav-link">Tournament</a>
                    <a href="{{route('view-stats')}}" class="nav-link">Stats</a>
                    <a href="{{route('tournament.winners')}}" class="nav-link">Winners</a>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">
                    @if (Auth::check())
                        <div class="ml-3 relative">
                            <div>
                                <a href="{{ route('profile.edit') }}" class="user-menu-button" id="user-menu-button"
                                        aria-expanded="false" aria-haspopup="true">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-8 w-8 rounded-full"
                                         src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}"
                                         alt="">
                                </a>
                            </div>
                        </div>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                           class="ml-4 text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="btn-primary">Login</a>
                        <a href="{{ route('register') }}" class="btn-secondary ml-4">Signup</a>
                    @endif
                </div>
            </div>
            <div class="-mr-2 flex md:hidden">
                <button type="button" class="mobile-menu-button" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div class="md:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="{{route('home')}}" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Home</a>
            <a href="{{route('view-tournament')}}"
               class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Tournament</a>
            <a href="{{route('view-stats')}}"
               class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Stats</a>
            <a href="{{route('tournament.winners')}}"
               class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Winners</a>
        </div>
        <div class="pt-4 pb-3 border-t border-gray-700">
            @if (Auth::check())
                <div class="flex items-center px-5">
                    <div class="flex-shrink-0">
                        <img class="h-10 w-10 rounded-full"
                             src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}" alt="">
                    </div>
                    <div class="ml-3">
                        <div class="text-base font-medium leading-none text-white">{{ Auth::user()->name }}</div>
                        <div class="text-sm font-medium leading-none text-gray-400">{{ Auth::user()->email }}</div>
                    </div>
                </div>
                <div class="mt-3 px-2 space-y-1">
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                       class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">
                        Logout
                    </a>
                </div>
            @else
                <div class="mt-3 px-2 space-y-1">
                    <a href="{{ route('login') }}"
                       class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Login</a>
                    <a href="{{ route('register') }}"
                       class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Signup</a>
                </div>
            @endif
        </div>
    </div>
</nav>


{{ $slot }}

<footer class="bg-gray-800 text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
            <div>
                <h4 class="text-lg font-bold mb-4">Gaming 4 Chill</h4>
                <p class="text-gray-400">
                    Register your tournament team and compete with others to win exciting prizes.
                </p>
            </div>
            <div>
                <h4 class="text-lg font-bold mb-4">Quick Links</h4>
                <ul class="text-gray-400">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('view-tournament')}}">Tournament</a></li>
                    <li><a href="{{route('view-stats')}}">Stats</a></li>
                    <li><a href="{{route('tournament.winners')}}">Winners</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-bold mb-4">Contact Us</h4>
                <ul class="text-gray-400">
                    <li>Email: info@Gaming4Chill.com</li>
                    <li>Phone: +1 (555) 123-4567</li>
                    <li>Address: 123 Main Street, Anytown USA</li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-bold mb-4">Social Media</h4>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-12 border-t border-gray-700 pt-6 text-center text-gray-400 text-sm">
            &copy; 2025 Gaming4Chill.com All rights reserved.
        </div>
    </div>
</footer>
<div id="modalBackdrop" class="fixed inset-0 bg-gray-900 bg-opacity-50 hidden"></div>

<!-- Modal Content -->
<div id="myModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg shadow-xl max-w-sm w-full p-6 relative">
        <button id="closeModal" class="absolute top-2 right-2 text-gray-600 hover:text-gray-800">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
        <div class="text-center">
            <img src="{{asset('data/images/qrcode2.jpg')}}" alt="Modal Image" class="mb-4 mx-auto rounded-lg">
            <p class="text-gray-800 text-xl mb-4">Pay here</p>
            <button id="sendButton"
                    class="bg-gradient-to-r from-blue-600 to-cyan-600 text-white font-bold py-2 px-4 rounded-lg transform hover:scale-105 transition-transform duration-300">
                Send
            </button>
        </div>
    </div>
</div>


@stack('scripts')

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Function to generate a 5-character alphanumeric ID
        function generateUniqueId(length = 5) {
            const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            let result = '';
            for (let i = 0; i < length; i++) {
                result += characters.charAt(Math.floor(Math.random() * characters.length));
            }
            return result;
        }

        // Populate the hidden input field with the generated ID
        const formUniqueIdInput = document.getElementById('form_unique_id');
        formUniqueIdInput.value = generateUniqueId();
    });
</script>
<script>
    // Get references to the menu elements
    const menuButton = document.querySelector('[aria-controls="mobile-menu"]');
    const mobileMenu = document.getElementById('mobile-menu');

    // Function to toggle the menu's visibility
    function toggleMenu() {
        mobileMenu.classList.toggle('hidden');
    }

    // Add a click event listener to the menu button
    menuButton.addEventListener('click', toggleMenu);

    // Add click event listeners to each menu item
    const menuItems = mobileMenu.querySelectorAll('a');
    menuItems.forEach(item => {
        item.addEventListener('click', () => {
            // Always close the menu when a link is clicked
            mobileMenu.classList.add('hidden');
        });
    });

    // Ensure the menu is closed on page load/refresh
    document.addEventListener('DOMContentLoaded', () => {
        mobileMenu.classList.add('hidden');
    });
</script>
</body>
</html>

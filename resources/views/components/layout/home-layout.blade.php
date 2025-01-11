<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
<nav class="bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo Section -->
            <div class="flex-shrink-0">
                <a href="#" class="flex items-center">
                    <span class="text-2xl font-bold text-purple-500">GAME<span class="text-cyan-400">HUB</span></span>
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="#"
                   class="text-gray-300 hover:text-purple-400 transition-colors duration-200 font-medium">Home</a>
                <a href="#"
                   class="text-gray-300 hover:text-purple-400 transition-colors duration-200 font-medium">Games</a>
                <a href="#"
                   class="text-gray-300 hover:text-purple-400 transition-colors duration-200 font-medium">About</a>
                <a href="#" class="text-gray-300 hover:text-purple-400 transition-colors duration-200 font-medium">Contact</a>
            </div>

            <!-- Authentication Buttons -->
            <div class="hidden md:flex items-center space-x-4">
                @guest
                    <a href="{{ route('login') }}"
                       class="px-4 py-2 rounded-md text-gray-300 hover:text-white hover:bg-purple-600 transition-colors duration-200">
                        Login
                    </a>
                    <a href="{{ route('register') }}"
                       class="px-4 py-2 rounded-md bg-purple-600 hover:bg-purple-700 transition-colors duration-200">
                        Sign Up
                    </a>
                @else
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open"
                                class="flex items-center space-x-2 px-4 py-2 rounded-md bg-gray-800 hover:bg-gray-700 transition-colors duration-200">
                            <img src="{{ Auth::user()->avatar ?? 'https://via.placeholder.com/32' }}" alt="Profile"
                                 class="w-8 h-8 rounded-full">
                            <span>{{ Auth::user()->name }}</span>
                        </button>

                        <!-- Profile Dropdown -->
                        <div x-show="open" @click.away="open = false"
                             class="absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-gray-800 ring-1 ring-black ring-opacity-5">
                            <div class="py-1">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">Profile</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">Settings</a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"
                                            class="block w-full text-left px-4 py-2 text-sm text-gray-300 hover:bg-gray-700">
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endguest
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button type="button"
                        class="mobile-menu-button p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none"
                        x-data="{ open: false }"
                        @click="open = !open"
                        :aria-expanded="open">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="md:hidden mobile-menu hidden">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="#" class="block px-3 py-2 rounded-md text-gray-300 hover:text-white hover:bg-gray-700">Home</a>
            <a href="#" class="block px-3 py-2 rounded-md text-gray-300 hover:text-white hover:bg-gray-700">Games</a>
            <a href="#" class="block px-3 py-2 rounded-md text-gray-300 hover:text-white hover:bg-gray-700">About</a>
            <a href="#" class="block px-3 py-2 rounded-md text-gray-300 hover:text-white hover:bg-gray-700">Contact</a>

            @guest
                <a href="{{ route('login') }}"
                   class="block px-3 py-2 rounded-md text-gray-300 hover:text-white hover:bg-gray-700">
                    Login
                </a>
                <a href="{{ route('register') }}"
                   class="block px-3 py-2 rounded-md text-gray-300 hover:text-white hover:bg-gray-700">
                    Sign Up
                </a>
            @else
                <a href="#"
                   class="block px-3 py-2 rounded-md text-gray-300 hover:text-white hover:bg-gray-700">Profile</a>
                <a href="#"
                   class="block px-3 py-2 rounded-md text-gray-300 hover:text-white hover:bg-gray-700">Settings</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                            class="block w-full text-left px-3 py-2 rounded-md text-gray-300 hover:text-white hover:bg-gray-700">
                        Logout
                    </button>
                </form>
            @endguest
        </div>
    </div>
</nav>

<script>
    // Mobile menu toggle
    document.querySelector('.mobile-menu-button').addEventListener('click', function () {
        document.querySelector('.mobile-menu').classList.toggle('hidden');
    });
</script>
<script>
    // Mobile menu toggle
    document.querySelector('.mobile-menu-button').addEventListener('click', function () {
        document.querySelector('.mobile-menu').classList.toggle('hidden');
    });
</script>
</body>
</html>

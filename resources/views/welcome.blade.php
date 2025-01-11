{{-- resources/views/welcome.blade.php --}}
<x-home-layout>


    <div class="relative min-h-screen bg-gradient-to-br from-gray-900 via-blue-900 to-gray-900 overflow-hidden pt-24">
        <!-- Animated Background Grid -->
        <div
            class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0zNiAxMmgtOHYtMmg4djJ6bTAgMmgtOHYyaDh2LTJ6IiBmaWxsPSJyZ2JhKDI1NSwgMjU1LCAyNTUsIDAuMSkiLz48L2c+PC9zdmc+')] opacity-10"></div>

        <!-- Content Container -->
        <div class="relative container mx-auto px-6 py-8 md:py-16">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->

                <div class="space-y-8">
                    <h1 class="font-['Bebas_Neue'] text-4xl md:text-5xl lg:text-6xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-600 animate-pulse leading-relaxed">
                        {{ $homeSettings->title }}
                    </h1>
                    <p class="text-gray-300 text-lg md:text-xl leading-relaxed">
                        {{ $homeSettings->description }}
                    </p>

                    <!-- Social Links -->
                    <div class="flex space-x-6">
                        <!-- Instagram -->
                        <a href="{{ $homeSettings->instagram_link }}"
                           class="transform hover:scale-110 transition-transform duration-300">
                            <div
                                class="w-12 h-12 rounded-lg bg-pink-600 hover:bg-pink-500 flex items-center justify-center">
                                <i class="fab fa-instagram text-xl text-white"></i>
                            </div>
                        </a>

                        <!-- YouTube/Channel -->
                        <a href="{{ $homeSettings->channel_link }}"
                           class="transform hover:scale-110 transition-transform duration-300">
                            <div
                                class="w-12 h-12 rounded-lg bg-red-600 hover:bg-red-500 flex items-center justify-center">
                                <i class="fab fa-youtube text-xl text-white"></i>
                            </div>
                        </a>

                        <!-- WhatsApp -->
                        <a href="{{ $homeSettings->whatsapp_link }}"
                           class="transform hover:scale-110 transition-transform duration-300">
                            <div
                                class="w-12 h-12 rounded-lg bg-green-600 hover:bg-green-500 flex items-center justify-center">
                                <i class="fab fa-whatsapp text-xl text-white"></i>
                            </div>
                        </a>
                    </div>

                    <!-- Tournament Button -->
                    <div class="pt-4">
                        <a href="{{route('view-tournament')}}"
                           class="group relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-white transition-all duration-300 ease-in-out bg-gradient-to-r from-blue-600 to-cyan-600 rounded-lg hover:from-blue-500 hover:to-cyan-500 focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:ring-offset-2 focus:ring-offset-gray-900 transform hover:scale-105 overflow-hidden">
                        <span class="relative z-10 flex items-center">
                            <i class="fas fa-trophy mr-2 text-yellow-300"></i>
                            Join Tournament
                            <i class="fas fa-chevron-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                        </span>
                            <!-- Animated background effect -->
                            <div
                                class="absolute inset-0 w-full h-full bg-gradient-to-r from-blue-400 to-cyan-400 opacity-0 group-hover:opacity-20 transition-opacity duration-300 animate-pulse"></div>
                            <!-- Border glow effect -->
                            <div
                                class="absolute -inset-0.5 bg-gradient-to-r from-cyan-400 to-blue-500 rounded-lg blur opacity-30 group-hover:opacity-50 transition duration-300 animate-pulse"></div>
                        </a>
                    </div>
                </div>

{{--                <h1 class="font-['Bebas_Neue'] text-4xl md:text-5xl lg:text-6xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-600 animate-pulse leading-relaxed">--}}
{{--                    How to Participate--}}
{{--                </h1>--}}
                <!-- Right Content - Video -->
                <div class="relative">
                    <div
                        class="w-full h-0 pb-[56.25%] relative rounded-lg overflow-hidden border-4 border-cyan-500 shadow-2xl transform hover:scale-105 transition-transform duration-300">
                        <iframe
                            src="{{ $homeSettings->embeded_video_link }}"
                            class="absolute top-0 left-0 w-full h-full"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>

                    <!-- Decorative Elements -->
                    <div
                        class="absolute -top-4 -left-4 w-24 h-24 bg-cyan-500 opacity-20 rounded-full blur-xl animate-pulse"></div>
                    <div
                        class="absolute -bottom-4 -right-4 w-32 h-32 bg-blue-500 opacity-20 rounded-full blur-xl animate-pulse"></div>
                </div>
            </div>
        </div>

        <!-- Animated Corner Accents -->
        <div
            class="absolute top-0 left-0 w-32 h-32 bg-gradient-to-br from-cyan-500 to-transparent opacity-20 transform -rotate-45"></div>
        <div
            class="absolute bottom-0 right-0 w-32 h-32 bg-gradient-to-tl from-blue-500 to-transparent opacity-20 transform rotate-45"></div>
    </div>
</x-home-layout>

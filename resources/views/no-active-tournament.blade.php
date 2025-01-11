<x-home-layout>
    <div class="relative min-h-screen bg-gradient-to-br from-gray-900 via-blue-900 to-gray-900 pt-24 pb-12">
        <!-- Animated Background Grid -->
        <div
            class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0zNiAxMmgtOHYtMmg4djJ6bTAgMmgtOHYyaDh2LTJ6IiBmaWxsPSJyZ2JhKDI1NSwgMjU1LCAyNTUsIDAuMSkiLz48L2c+PC9zdmc+')] opacity-10"></div>

        <!-- Empty State Container -->
            <div class="container mx-auto px-4 py-8">
                <!-- Section Title -->
                    <h2 class="font-['Bebas_Neue'] text-4xl md:text-5xl text-center mb-12 text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-600">
                        Tournaments
                    </h2>

                <!-- Empty State Card -->
                    <div class="max-w-2xl mx-auto">
                        <div
                            class="bg-gray-800/50 backdrop-blur-lg rounded-lg overflow-hidden shadow-2xl border border-cyan-500/30 p-8 text-center">
                            <!-- Icon -->
                            <div class="mb-6 relative">
                                <div class="w-24 h-24 mx-auto bg-gray-700/50 rounded-full flex items-center justify-center">
                                    <i class="fas fa-trophy text-4xl text-gray-400"></i>
                                </div>
                                <!-- Decorative circles -->
                                <div
                                    class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-32 h-32 bg-cyan-500/10 rounded-full animate-pulse"></div>
                                <div
                                    class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-40 h-40 bg-blue-500/5 rounded-full animate-pulse delay-150"></div>
                            </div>

                            <!-- Message -->
                            <h3 class="font-['Press_Start_2P'] text-xl text-white mb-4">
                                No Active Tournaments
                            </h3>
                            <p class="text-gray-400 mb-8">
                                There are no tournaments running at the moment. Subscribe to our newsletter to get notified when
                                new tournaments are announced!
                            </p>

                            <!-- Newsletter Subscription -->
        {{--                    <div class="max-w-md mx-auto">--}}
        {{--                        <form class="flex flex-col sm:flex-row gap-4">--}}
        {{--                            <input--}}
        {{--                                type="email"--}}
        {{--                                placeholder="Enter your email"--}}
        {{--                                class="flex-1 px-4 py-3 bg-gray-900/50 border border-cyan-500/30 rounded-lg focus:outline-none focus:border-cyan-500 text-white placeholder-gray-500"--}}
        {{--                            >--}}
        {{--                            <button--}}
        {{--                                type="submit"--}}
        {{--                                class="group relative inline-flex items-center justify-center px-6 py-3 text-sm font-bold text-white transition-all duration-300 ease-in-out bg-gradient-to-r from-blue-600 to-cyan-600 rounded-lg hover:from-blue-500 hover:to-cyan-500 focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:ring-offset-2 focus:ring-offset-gray-900"--}}
        {{--                            >--}}
        {{--                            <span class="relative z-10 flex items-center">--}}
        {{--                                Subscribe--}}
        {{--                                <i class="fas fa-bell ml-2 group-hover:animate-wiggle"></i>--}}
        {{--                            </span>--}}
        {{--                                <!-- Button glow effect -->--}}
        {{--                                <div--}}
        {{--                                    class="absolute -inset-0.5 bg-gradient-to-r from-cyan-400 to-blue-500 rounded-lg blur opacity-30 group-hover:opacity-50 transition duration-300"></div>--}}
        {{--                            </button>--}}
        {{--                        </form>--}}
        {{--                    </div>--}}

                            <!-- Social Links -->
                            <div class="mt-8 pt-8 border-t border-gray-700">
                                <p class="text-gray-400 mb-4">Follow us on social media for updates</p>
                                <div class="flex justify-center space-x-4">
                                    <!-- Instagram -->
                                    <a href="#" class="transform hover:scale-110 transition-transform duration-300">
                                        <div
                                            class="w-10 h-10 rounded-lg bg-pink-600 hover:bg-pink-500 flex items-center justify-center">
                                            <i class="fab fa-instagram text-white"></i>
                                        </div>
                                    </a>
                                    <!-- YouTube -->
                                    <a href="#" class="transform hover:scale-110 transition-transform duration-300">
                                        <div
                                            class="w-10 h-10 rounded-lg bg-red-600 hover:bg-red-500 flex items-center justify-center">
                                            <i class="fab fa-youtube text-white"></i>
                                        </div>
                                    </a>
                                    <!-- Discord -->
                                    <a href="#" class="transform hover:scale-110 transition-transform duration-300">
                                        <div
                                            class="w-10 h-10 rounded-lg bg-indigo-600 hover:bg-indigo-500 flex items-center justify-center">
                                            <i class="fab fa-discord text-white"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                </div>
        </div>
    </div>


</x-home-layout>

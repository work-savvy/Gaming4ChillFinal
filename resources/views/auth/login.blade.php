<x-home-layout>
    <div
        class="min-h-screen bg-gradient-to-br from-gray-900 via-blue-900 to-gray-900 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <!-- Animated Background Grid -->
        <div
            class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0zNiAxMmgtOHYtMmg4djJ6bTAgMmgtOHYyaDh2LTJ6IiBmaWxsPSJyZ2JhKDI1NSwgMjU1LCAyNTUsIDAuMSkiLz48L2c+PC9zdmc+')] opacity-10"></div>

        <div class="relative sm:mx-auto sm:w-full sm:max-w-md">
            <!-- Logo/Title -->
            <div class="text-center mb-8">
                <h2 class="font-['Press_Start_2P'] text-3xl text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-600 animate-pulse">
                    Gaming4Chill
                </h2>
            </div>

            <!-- Login Card -->
            <div
                class="relative bg-gray-800/70 backdrop-blur-lg py-8 px-4 shadow-xl sm:rounded-lg sm:px-10 border border-cyan-500/30">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')"/>

                <form class="space-y-6" method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-300">
                            {{ __('Email') }}
                        </label>
                        <div class="mt-1">
                            <input id="email" name="email" type="email" required autocomplete="username"
                                   class="appearance-none block w-full px-3 py-2 border border-cyan-500/30 rounded-md shadow-sm bg-gray-700/50 text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent"
                                   :value="old('email')"/>
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-400"/>
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-300">
                            {{ __('Password') }}
                        </label>
                        <div class="mt-1">
                            <input id="password" name="password" type="password" required
                                   autocomplete="current-password"
                                   class="appearance-none block w-full px-3 py-2 border border-cyan-500/30 rounded-md shadow-sm bg-gray-700/50 text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent"/>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-400"/>
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember_me" name="remember" type="checkbox"
                                   class="h-4 w-4 rounded border-gray-300 text-cyan-600 focus:ring-cyan-500 bg-gray-700"/>
                            <label for="remember_me" class="ml-2 block text-sm text-gray-300">
                                {{ __('Remember me') }}
                            </label>
                        </div>

                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}"
                               class="text-sm text-cyan-400 hover:text-cyan-300 transition-colors">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>

                    <div>
                        <button type="submit"
                                class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-gradient-to-r from-blue-600 to-cyan-600 hover:from-blue-500 hover:to-cyan-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 transform hover:scale-105 transition-all duration-300">
                            {{ __('Log in') }}
                        </button>
                    </div>
                </form>

                <!-- Register Link -->
                <div class="mt-6 text-center">
                    <p class="text-sm text-gray-400">
                        {{ __("Don't have an account?") }}
                        <a href="{{ route('register') }}"
                           class="font-medium text-cyan-400 hover:text-cyan-300 transition-colors">
                            {{ __('Sign up') }}
                        </a>
                    </p>
                </div>
            </div>

            <!-- Decorative Elements -->
            <div
                class="absolute -top-4 -left-4 w-24 h-24 bg-cyan-500 opacity-20 rounded-full blur-xl animate-pulse"></div>
            <div
                class="absolute -bottom-4 -right-4 w-32 h-32 bg-blue-500 opacity-20 rounded-full blur-xl animate-pulse"></div>
        </div>
    </div>
</x-home-layout>

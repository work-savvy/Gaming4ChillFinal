{{--<x-home-layout>--}}
{{--    @auth--}}
{{--        @php--}}
{{--            $registrations = auth()->user()->registrations()->with('tournament')->get();--}}
{{--        @endphp--}}
{{--        <div class="mt-24"></div>--}}
{{--        @if($registrations->isNotEmpty())--}}
{{--            @foreach($registrations as $registration)--}}
{{--                <div class="bg-gray-800/50 rounded-lg border border-cyan-500 p-6 backdrop-blur-sm my-6">--}}
{{--                    <!-- Tournament Header -->--}}
{{--                    <div class="border-b border-cyan-500/30 pb-4 mb-6">--}}
{{--                        <h2 class="font-['Bebas_Neue'] text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-600">--}}
{{--                            {{ $registration->tournament->name }}--}}
{{--                        </h2>--}}
{{--                        <p class="text-gray-400 text-sm mt-2">Registration ID: {{ $registration->form_unique_id }}</p>--}}
{{--                    </div>--}}

{{--                    <!-- Registration Data -->--}}
{{--                    <div class="space-y-8">--}}
{{--                        @php--}}
{{--                            $formData = $registration->form_data;--}}

{{--                            // Group the data into categories--}}
{{--                            $teamInfo = [];--}}
{{--                            $mainPlayers = [];--}}
{{--                            $substitutes = [];--}}
{{--                            $contactInfo = [];--}}

{{--                            foreach($formData as $key => $value) {--}}
{{--                                if($key === 'team_name' || $key === 'form_unique_id') {--}}
{{--                                    $teamInfo[$key] = $value;--}}
{{--                                }--}}
{{--                                elseif(str_starts_with($key, 'player_')) {--}}
{{--                                    $mainPlayers[$key] = $value;--}}
{{--                                }--}}
{{--                                elseif(str_starts_with($key, 'sub_')) {--}}
{{--                                    $substitutes[$key] = $value;--}}
{{--                                }--}}
{{--                                elseif($key === 'whatsapp') {--}}
{{--                                    $contactInfo[$key] = $value;--}}
{{--                                }--}}
{{--                            }--}}
{{--                        @endphp--}}

{{--                            <!-- Team Information -->--}}
{{--                        @if(!empty($teamInfo))--}}
{{--                            <div class="space-y-4">--}}
{{--                                <h3 class="text-xl font-semibold text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500">--}}
{{--                                    Team Information--}}
{{--                                </h3>--}}
{{--                                <div class="bg-gray-900/50 rounded-lg p-4">--}}
{{--                                    @foreach($teamInfo as $key => $value)--}}
{{--                                        <div class="flex justify-between items-center">--}}
{{--                                            <span--}}
{{--                                                class="text-gray-400 capitalize">{{ str_replace('_', ' ', $key) }}</span>--}}
{{--                                            <span class="text-white">{{ $value }}</span>--}}
{{--                                        </div>--}}
{{--                                    @endforeach--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endif--}}

{{--                        <!-- Main Players -->--}}
{{--                        @if(!empty($mainPlayers))--}}
{{--                            <div class="space-y-4">--}}
{{--                                <h3 class="text-xl font-semibold text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500">--}}
{{--                                    Main Squad--}}
{{--                                </h3>--}}
{{--                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">--}}
{{--                                    @for($i = 1; $i <= count($mainPlayers) / 2; $i++)--}}
{{--                                        <div class="bg-gray-900/50 rounded-lg p-4 space-y-2">--}}
{{--                                            <h4 class="text-cyan-400 font-medium">Player {{ $i }}</h4>--}}
{{--                                            <div class="grid grid-cols-2 gap-4">--}}
{{--                                                <div>--}}
{{--                                                    <p class="text-gray-400 text-sm">Name</p>--}}
{{--                                                    <p class="text-white">{{ $formData["player_{$i}_name"] }}</p>--}}
{{--                                                </div>--}}
{{--                                                <div>--}}
{{--                                                    <p class="text-gray-400 text-sm">UID</p>--}}
{{--                                                    <p class="text-white">{{ $formData["player_{$i}_uid"] }}</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    @endfor--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endif--}}

{{--                        <!-- Substitute Players -->--}}
{{--                        @if(!empty($substitutes))--}}
{{--                            <div class="space-y-4">--}}
{{--                                <h3 class="text-xl font-semibold text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500">--}}
{{--                                    Substitute Players--}}
{{--                                </h3>--}}
{{--                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">--}}
{{--                                    @for($i = 1; $i <= count($substitutes) / 2; $i++)--}}
{{--                                        <div class="bg-gray-900/50 rounded-lg p-4 space-y-2">--}}
{{--                                            <h4 class="text-cyan-400 font-medium">Substitute {{ $i }}</h4>--}}
{{--                                            <div class="grid grid-cols-2 gap-4">--}}
{{--                                                <div>--}}
{{--                                                    <p class="text-gray-400 text-sm">Name</p>--}}
{{--                                                    <p class="text-white">{{ $formData["sub_{$i}_name"] }}</p>--}}
{{--                                                </div>--}}
{{--                                                <div>--}}
{{--                                                    <p class="text-gray-400 text-sm">UID</p>--}}
{{--                                                    <p class="text-white">{{ $formData["sub_{$i}_uid"] }}</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    @endfor--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endif--}}

{{--                        <!-- Contact Information -->--}}
{{--                        @if(!empty($contactInfo))--}}
{{--                            <div class="space-y-4">--}}
{{--                                <h3 class="text-xl font-semibold text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500">--}}
{{--                                    Contact Information--}}
{{--                                </h3>--}}
{{--                                <div class="bg-gray-900/50 rounded-lg p-4">--}}
{{--                                    @foreach($contactInfo as $key => $value)--}}
{{--                                        <div class="flex justify-between items-center">--}}
{{--                                            <span--}}
{{--                                                class="text-gray-400 capitalize">{{ str_replace('_', ' ', $key) }}</span>--}}
{{--                                            <span class="text-white">{{ $value }}</span>--}}
{{--                                        </div>--}}
{{--                                    @endforeach--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endif--}}

{{--                        <!-- Payment Status -->--}}
{{--                        <div class="space-y-4">--}}
{{--                            <h3 class="text-xl font-semibold text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500">--}}
{{--                                Payment Details--}}
{{--                            </h3>--}}
{{--                            <div class="bg-gray-900/50 rounded-lg p-4">--}}
{{--                                <div class="flex items-center justify-between">--}}
{{--                                    <span class="text-gray-400">Status</span>--}}
{{--                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium--}}
{{--                                        @if($registration->payment_status === 'paid')--}}
{{--                                            bg-green-100 text-green-800--}}
{{--                                        @elseif($registration->payment_status === 'failed')--}}
{{--                                            bg-red-100 text-red-800--}}
{{--                                        @else--}}
{{--                                            bg-yellow-100 text-yellow-800--}}
{{--                                        @endif">--}}
{{--                                        {{ ucfirst($registration->payment_status) }}--}}
{{--                                    </span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        @else--}}
{{--            <div class="flex flex-col items-center justify-center mt-12 space-y-4">--}}
{{--                <div class="text-gray-400 text-center">--}}
{{--                    <i class="fas fa-clipboard-list text-4xl mb-4"></i>--}}
{{--                    <p class="text-lg">You have not registered for any tournaments yet.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endif--}}
{{--    @endauth--}}
{{--</x-home-layout>--}}

<x-home-layout>
    @auth
        <div class="mt-24"></div>
        @php
            $registrations = auth()->user()->registrations()->with('tournament')->latest()->get();
        @endphp
        <div class="mt-16"></div>
        @if($registrations->isNotEmpty())
            @foreach($registrations as $registration)
                <div class="bg-gray-800/50 rounded-lg border border-cyan-500 p-4 backdrop-blur-sm mb-4">
                    <!-- Tournament Header -->
                    <div class="border-b border-cyan-500/30 pb-2 mb-3">
                        <h2 class="font-['Bebas_Neue'] text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-600">
                            {{ $registration->tournament->name }}
                            <span
                                class="text-xl font-normal text-gray-400 ml-2">ID: {{ $registration->form_unique_id }}</span>
                        </h2>
                    </div>

                    <!-- Registration Data -->
                    <div class="space-y-4">
                        @php
                            $formData = $registration->form_data;
                            $teamInfo = array_filter($formData, fn($key) => in_array($key, ['team_name', 'form_unique_id']), ARRAY_FILTER_USE_KEY);
                            $mainPlayers = array_filter($formData, fn($key) => str_starts_with($key, 'player_'), ARRAY_FILTER_USE_KEY);
                            $substitutes = array_filter($formData, fn($key) => str_starts_with($key, 'sub_'), ARRAY_FILTER_USE_KEY);
                            $contactInfo = array_filter($formData, fn($key) => $key === 'whatsapp', ARRAY_FILTER_USE_KEY);
                        @endphp

                            <!-- Team Info & Contact -->
                        <div class="grid grid-cols-2 gap-2">
                            @if(!empty($teamInfo))
                                <div class="bg-gray-900/50 rounded-lg p-2">
                                    <h3 class="text-sm font-medium text-cyan-400 mb-1">Team Info</h3>
                                    @foreach($teamInfo as $key => $value)
                                        @if($key === 'team_name')
                                            <p class="text-white text-sm">{{ $value }}</p>
                                        @endif
                                    @endforeach
                                </div>
                            @endif
                            @if(!empty($contactInfo))
                                <div class="bg-gray-900/50 rounded-lg p-2">
                                    <h3 class="text-sm font-medium text-cyan-400 mb-1">Contact</h3>
                                    <p class="text-white text-sm">{{ $contactInfo['whatsapp'] }}</p>
                                </div>
                            @endif
                        </div>

                        <!-- Main Players -->
                        @if(!empty($mainPlayers))
                            <div>
                                <h3 class="text-sm font-medium text-cyan-400 mb-2">Main Squad</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">
                                    @for($i = 1; $i <= count($mainPlayers) / 2; $i++)
                                        <div class="bg-gray-900/50 rounded-lg p-2">
                                            <div class="flex justify-between text-sm">
                                                <span class="text-white">{{ $formData["player_{$i}_name"] }}</span>
{{--                                                <span class="text-gray-400">{{ $formData["player_{$i}_uid"] }}</span>--}}
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        @endif

                        <!-- Substitute Players -->
                        @if(!empty($substitutes))
                            <div>
                                <h3 class="text-sm font-medium text-cyan-400 mb-2">Substitutes</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">
                                    @for($i = 1; $i <= count($substitutes) / 2; $i++)
                                        <div class="bg-gray-900/50 rounded-lg p-2">
                                            <div class="flex justify-between text-sm">
                                                <span class="text-white">{{ $formData["sub_{$i}_name"] }}</span>
{{--                                                <span class="text-gray-400">{{ $formData["sub_{$i}_uid"] }}</span>--}}
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        @endif

                        <!-- Payment Status -->
                        <div class="flex items-center justify-between bg-gray-900/50 rounded-lg p-2">
                            <span class="text-sm text-cyan-400">Payment Status</span>
                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium
                                @if($registration->payment_status === 'paid')
                                    bg-green-100 text-green-800
                                @elseif($registration->payment_status === 'failed')
                                    bg-red-100 text-red-800
                                @else
                                    bg-yellow-100 text-yellow-800
                                @endif">
                                {{ ucfirst($registration->payment_status) }}
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
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
                            No Registration Found
                        </h3>
                        <p class="text-gray-400 mb-8">
                            There are no Registration for the active tournament. Register to to view your registration details.
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
        @endif
    @endauth
</x-home-layout>

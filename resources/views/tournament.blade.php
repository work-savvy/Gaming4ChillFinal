<x-home-layout>
    <div class="relative min-h-screen bg-gradient-to-br from-gray-900 via-blue-900 to-gray-900 pt-24 pb-12">
        <!-- Animated Background Grid -->
        <div
            class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0zNiAxMmgtOHYtMmg4djJ6bTAgMmgtOHYyaDh2LTJ6IiBmaWxsPSJyZ2JhKDI1NSwgMjU1LCAyNTUsIDAuMSkiLz48L2c+PC9zdmc+')] opacity-10"></div>
        @if($activeTournament)
        <!-- Tournament Cards Container -->
        <div class="container mx-auto px-4 pt-8">
            <!-- Section Title -->
            <h2 class="font-['Bebas_Neue'] text-4xl md:text-5xl text-center mb-12 text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-600">
                Active Tournament
            </h2>

            <!-- Tournament Card -->
{{--            <div--}}
{{--                class="relative bg-gray-800/50 backdrop-blur-lg rounded-lg overflow-hidden shadow-2xl border border-cyan-500/30 hover:border-cyan-500/50 transition-all duration-300 group">--}}
{{--                <!-- Tournament Image Background -->--}}
{{--                <div class="absolute inset-0 bg-[url('/api/placeholder/1200/400')] bg-cover bg-center opacity-30"></div>--}}

{{--                <!-- Content Container -->--}}
{{--                <div class="relative p-6 md:p-8">--}}
{{--                    <!-- Tournament Header -->--}}
{{--                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">--}}
{{--                        <div>--}}
{{--                            <h3 class="font-['Bebas_Neue'] text-xl md:text-4xl text-white mb-2">--}}
{{--                                {{$activeTournament->name ? $activeTournament->name : 'Fortnite Championship 2025'}}--}}
{{--                            </h3>--}}
{{--                            <p class="text-gray-300 text-sm md:text-base">--}}
{{--                                {{$activeTournament->description ? $activeTournament->description : 'Battle Royale Solo Tournament - Compete against the best players!'}}--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                        <div class="flex items-center space-x-2">--}}
{{--                        <span class="px-4 py-2 bg-green-600/20 text-green-400 rounded-full text-sm font-semibold">--}}
{{--                            Registration Open--}}
{{--                        </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <!-- Tournament Details Grid -->--}}
{{--                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-8">--}}
{{--                        <!-- Prize Pool -->--}}
{{--                        <div class="bg-gray-900/50 p-4 rounded-lg border border-cyan-500/20">--}}
{{--                            <div class="flex items-center space-x-2 mb-2">--}}
{{--                                <i class="fas fa-trophy text-yellow-500"></i>--}}
{{--                                <span class="text-gray-400 text-sm">Prize Pool</span>--}}
{{--                            </div>--}}
{{--                            <span class="text-2xl font-bold text-white">{{$activeTournament->prize_pool ? '₹'. $activeTournament->prize_pool : '₹1000'}}</span>--}}
{{--                        </div>--}}

{{--                        <!-- Registration Fee -->--}}
{{--                        <div class="bg-gray-900/50 p-4 rounded-lg border border-cyan-500/20">--}}
{{--                            <div class="flex items-center space-x-2 mb-2">--}}
{{--                                <i class="fas fa-ticket-alt text-purple-500"></i>--}}
{{--                                <span class="text-gray-400 text-sm">Entry Fee</span>--}}
{{--                            </div>--}}
{{--                            <span class="text-2xl font-bold text-white">{{$activeTournament->entry_fee ? '₹'. $activeTournament->entry_fee : '₹10'}}</span>--}}
{{--                        </div>--}}

{{--                        <!-- Players -->--}}
{{--                        <div class="bg-gray-900/50 p-4 rounded-lg border border-cyan-500/20">--}}
{{--                            <div class="flex items-center space-x-2 mb-2">--}}
{{--                                <i class="fas fa-users text-blue-500"></i>--}}
{{--                                <span class="text-gray-400 text-sm">Players</span>--}}
{{--                            </div>--}}
{{--                            <span class="text-2xl font-bold text-white">64/100</span>--}}
{{--                        </div>--}}

{{--                        <!-- Dates -->--}}
{{--                        <div class="bg-gray-900/50 p-4 rounded-lg border border-cyan-500/20">--}}
{{--                            <div class="flex items-center space-x-2 mb-2">--}}
{{--                                <i class="fas fa-calendar text-red-500"></i>--}}
{{--                                <span class="text-gray-400 text-sm">Tournament Dates</span>--}}
{{--                            </div>--}}
{{--                            <div class="flex flex-col">--}}
{{--                                <span class="text-sm text-white">Start: {{$activeTournament->start_date}}</span>--}}
{{--                                <span class="text-sm text-white">End: {{$activeTournament->end_date}}</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <!-- Register Button -->--}}
{{--                    <div class="mt-8 flex justify-center">--}}
{{--                        @auth--}}


{{--                        <a href="{{route('viewform')}}"--}}
{{--                           class="group relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-white transition-all duration-300 ease-in-out bg-gradient-to-r from-blue-600 to-cyan-600 rounded-lg hover:from-blue-500 hover:to-cyan-500 focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:ring-offset-2 focus:ring-offset-gray-900 transform hover:scale-105">--}}
{{--                        <span class="relative z-10 flex items-center">--}}
{{--                            <i class="fas fa-gamepad mr-2"></i>--}}
{{--                            Register Now--}}
{{--                            <i class="fas fa-chevron-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>--}}
{{--                        </span>--}}
{{--                            <div--}}
{{--                                class="absolute -inset-0.5 bg-gradient-to-r from-cyan-400 to-blue-500 rounded-lg blur opacity-30 group-hover:opacity-50 transition duration-300 animate-pulse"></div>--}}
{{--                        </a>--}}
{{--                        @endauth--}}
{{--                            @guest--}}



{{--                                <a href="{{route('login')}}"--}}
{{--                                   class="group relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-white transition-all duration-300 ease-in-out bg-gradient-to-r from-blue-600 to-cyan-600 rounded-lg hover:from-blue-500 hover:to-cyan-500 focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:ring-offset-2 focus:ring-offset-gray-900 transform hover:scale-105">--}}
{{--                        <span class="relative z-10 flex items-center">--}}
{{--                            <i class="fas fa-gamepad mr-2"></i>--}}
{{--                            Login to register--}}
{{--                            <i class="fas fa-chevron-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>--}}
{{--                        </span>--}}
{{--                                    <div--}}
{{--                                        class="absolute -inset-0.5 bg-gradient-to-r from-cyan-400 to-blue-500 rounded-lg blur opacity-30 group-hover:opacity-50 transition duration-300 animate-pulse"></div>--}}
{{--                                </a>--}}
{{--                            @endguest--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

            <div
                class="relative bg-gray-800/50 backdrop-blur-lg rounded-lg overflow-hidden shadow-2xl border border-cyan-500/30 hover:border-cyan-500/50 transition-all duration-300 group">
                <div class="absolute inset-0 bg-[url('/api/placeholder/1200/400')] bg-cover bg-center opacity-30"></div>

                <div class="relative p-6 md:p-8">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                        <div>
                            <h3 class="font-['Bebas_Neue'] text-xl md:text-4xl text-white mb-2">
                                {{$activeTournament->name ? $activeTournament->name : 'Fortnite Championship 2025'}}
                            </h3>
                            <p class="text-gray-300 text-sm md:text-base">
                                {{$activeTournament->description ? $activeTournament->description : 'Battle Royale Solo Tournament - Compete against the best players!'}}
                            </p>
                        </div>
                        <div class="flex items-center space-x-2">
                <span class="px-4 py-2 bg-green-600/20 text-green-400 rounded-full text-sm font-semibold">
                    Registration Open
                </span>
                        </div>
                    </div>

                    {{-- Mobile-first grid --}}
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mt-8">
                        <div class="bg-gray-900/50 p-4 rounded-lg border border-cyan-500/20">
                            <div class="flex items-center space-x-2 mb-2">
                                <i class="fas fa-trophy text-yellow-500"></i>
                                <span class="text-gray-400 text-sm">Prize Pool</span>
                            </div>
                            <span
                                class="text-2xl font-bold text-white">1st place: {{$activeTournament->prize_pool ? '₹'. $activeTournament->prize_pool : '₹1000'}}</span>
                            <span
                                class="text-2xl font-bold text-white"><br> 2nd place: {{$activeTournament->prize_pool3 ? '₹'. $activeTournament->prize_pool2 : '₹500'}}</span>
                            <span
                                class="text-2xl font-bold text-white"><br>3rd place: {{$activeTournament->prize_pool2 ? '₹'. $activeTournament->prize_pool3: '₹400'}}</span>
                        </div>

                        <div class="bg-gray-900/50 p-4 rounded-lg border border-cyan-500/20">
                            <div class="flex items-center space-x-2 mb-2">
                                <i class="fas fa-ticket-alt text-purple-500"></i>
                                <span class="text-gray-400 text-sm">Entry Fee</span>
                            </div>
                            <span
                                class="text-2xl font-bold text-white">{{$activeTournament->entry_fee ? '₹'. $activeTournament->entry_fee : '₹10'}}</span>
                        </div>

                        <div class="bg-gray-900/50 p-4 rounded-lg border border-cyan-500/20">
                            <div class="flex items-center space-x-2 mb-2">
                                <i class="fas fa-users text-blue-500"></i>
                                <span class="text-gray-400 text-sm">Players</span>
                            </div>
                            <span class="text-2xl font-bold text-white">64/100</span>
                        </div>

                        <div class="bg-gray-900/50 p-4 rounded-lg border border-cyan-500/20">
                            <div class="flex items-center space-x-2 mb-2">
                                <i class="fas fa-calendar text-red-500"></i>
                                <span class="text-gray-400 text-sm">Tournament Dates</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-sm text-white">Start: {{$activeTournament->start_date}}</span>
                                <span class="text-sm text-white">End: {{$activeTournament->end_date}}</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 flex justify-center">
                        @auth
                            @php
                                $registration = auth()->user()->registrations()->with('tournament')->latest()->first();
                                $isRegistered = $registration && $registration->tournament_id == $activeTournament->id;
                            @endphp
                            @if(!$isRegistered)
                            <a href="{{route('viewform')}}"
                               class="group relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-white transition-all duration-300 ease-in-out bg-gradient-to-r from-blue-600 to-cyan-600 rounded-lg hover:from-blue-500 hover:to-cyan-500 focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:ring-offset-2 focus:ring-offset-gray-900 transform hover:scale-105">
                    <span class="relative z-10 flex items-center">
                        <i class="fas fa-gamepad mr-2"></i>
                        Register Now
                        <i class="fas fa-chevron-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                    </span>
                                <div
                                    class="absolute -inset-0.5 bg-gradient-to-r from-cyan-400 to-blue-500 rounded-lg blur opacity-30 group-hover:opacity-50 transition duration-300 animate-pulse"></div>
                            </a>
                            @endif
                        @endauth
                        @guest
                            <a href="{{route('login')}}"
                               class="group relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-white transition-all duration-300 ease-in-out bg-gradient-to-r from-blue-600 to-cyan-600 rounded-lg hover:from-blue-500 hover:to-cyan-500 focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:ring-offset-2 focus:ring-offset-gray-900 transform hover:scale-105">
                    <span class="relative z-10 flex items-center">
                        <i class="fas fa-gamepad mr-2"></i>
                        Login to register
                        <i class="fas fa-chevron-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                    </span>
                                <div
                                    class="absolute -inset-0.5 bg-gradient-to-r from-cyan-400 to-blue-500 rounded-lg blur opacity-30 group-hover:opacity-50 transition duration-300 animate-pulse"></div>
                            </a>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
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
                            No Active Tournaments
                        </h3>
                        <p class="text-gray-400 mb-8">
                            There are no tournaments running at the moment. Subscribe to our newsletter to get notified
                            when
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
        @endif
{{--      No Active tournaments--}}


    </div>

    @auth
        @php
            $registration = auth()->user()->registrations()->with('tournament')->latest()->first();
        @endphp
        <div class="mt-16"></div>
        @if($registration)
                <div class="bg-gray-800/50 rounded-lg border border-cyan-500 p-4 backdrop-blur-sm mb-4">
                    <!-- Tournament Header -->
                    <div class="border-b border-cyan-500/30 pb-2 mb-3 flex justify-between">
                        <h2 class="font-['Bebas_Neue'] text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-600">
                            <span
                                class="text-xl font-normal text-gray-400 ml-2">ID: {{ $registration->form_unique_id }}</span>
                        </h2>
                        <div>
                        <span class="inline-flex items-center px-4 py-1 rounded-full text-lg font-medium
                                @if($registration->payment_status === 'paid')
                                    bg-green-100 text-green-800
                                @elseif($registration->payment_status === 'failed')
                                    bg-red-100 text-red-800
                                @else
                                    bg-yellow-100 text-yellow-800
                                @endif">Payment Status :
                                {{ ucfirst($registration->payment_status) }}
                            </span>
                        @if($registration->payment_status === 'pending')
                        <button id="openModalButton" class="inline-flex items-center px-4 py-1 rounded-full text-lg font-medium bg-green-100 text-green-800">
                                Pay
                            </button>
                        @endif
                        </div>
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

{{--                        <!-- Payment Status -->--}}
{{--                        <div class="flex items-center justify-between bg-gray-900/50 rounded-lg p-2">--}}
{{--                            <span class="text-sm text-cyan-400">Payment Status</span>--}}
{{--                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium--}}
{{--                                @if($registration->payment_status === 'paid')--}}
{{--                                    bg-green-100 text-green-800--}}
{{--                                @elseif($registration->payment_status === 'failed')--}}
{{--                                    bg-red-100 text-red-800--}}
{{--                                @else--}}
{{--                                    bg-yellow-100 text-yellow-800--}}
{{--                                @endif">--}}
{{--                                {{ ucfirst($registration->payment_status) }}--}}
{{--                            </span>--}}

{{--                        </div>--}}
                    </div>
                </div>
        @endif
    @endauth

    @push('scripts')
        @auth()
        @if($registration)
        <script>
            // Get modal elements
            const modal = document.getElementById("myModal");
            const closeModalButton = document.getElementById("closeModal");
            const openModalButton = document.getElementById("openModalButton"); // Assuming you have this button somewhere
            const sendButton = document.getElementById("sendButton");

            // Function to open the modal
            openModalButton.addEventListener("click", function () {
                modal.classList.remove("hidden");
            });

            // Function to close the modal
            closeModalButton.addEventListener("click", function () {
                modal.classList.add("hidden");
            });

            // Function to send WhatsApp message
            sendButton.addEventListener("click", function () {
                const number = "919979661249";
                const message = "hello there {{ $registration->form_unique_id }}";
                const url = `https://wa.me/${number}?text=${encodeURIComponent(message)}`;

                window.open(url, '_blank');
                modal.classList.add("hidden");
            });
            const showModal = '{{ session('showModal') }}';
            if (showModal === '1') {
                modal.classList.remove("hidden");

                // Remove the showModal flag from the session to prevent it from showing again on refresh
                // You'll need to add a route and controller method to handle this AJAX request
                fetch('/remove-modal-flag', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                });
            }
            @endif
            @endauth
        </script>
    @endpush

</x-home-layout>

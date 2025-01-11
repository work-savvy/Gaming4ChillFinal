{{--<!-- resources/views/tournament/winners.blade.php -->--}}
{{--<x-home-layout>--}}
{{--    <div--}}
{{--        class="relative min-h-screen bg-gradient-to-br from-gray-900 via-blue-900 to-gray-900 pt-24 pb-12 px-4 sm:px-6 lg:px-8">--}}
{{--        <!-- Background Grid Pattern -->--}}
{{--        <div--}}
{{--            class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0zNiAxMmgtOHYtMmg4djJ6bTAgMmgtOHYyaDh2LTJ6IiBmaWxsPSJyZ2JhKDI1NSwgMjU1LCAyNTUsIDAuMSkiLz48L2c+PC9zdmc+')] opacity-10"></div>--}}

{{--        <div class="relative max-w-7xl mx-auto">--}}
{{--            <!-- Header -->--}}
{{--            <div class="text-center mb-12">--}}
{{--                <h1 class="font-['Bebas_Neue'] text-4xl md:text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-600 mb-4">--}}
{{--                    Previous Tournament Winners--}}
{{--                </h1>--}}
{{--                <p class="text-gray-300 text-lg">Celebrating the champions of our previous tournaments</p>--}}
{{--            </div>--}}

{{--            <!-- Winners Grid -->--}}
{{--            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">--}}
{{--                @foreach($tournaments as $tournament)--}}
{{--                    @if($tournament->first_place_registration_id && $tournament->firstPlaceRegistration)--}}
{{--                        <div--}}
{{--                            class="flex items-center justify-between bg-gradient-to-r from-yellow-600/20 to-yellow-500/20 p-4 rounded-lg">--}}
{{--                            <div class="flex items-center">--}}
{{--                                <i class="fas fa-trophy text-yellow-500 text-2xl mr-4"></i>--}}
{{--                                <div>--}}
{{--                                    <p class="text-yellow-500 font-bold">1st Place</p>--}}
{{--                                    <p class="text-white">--}}
{{--                                        {{ $tournament->firstPlaceRegistration->form_data['team_name'] ??--}}
{{--                                           'Team ' . ($tournament->firstPlaceRegistration->form_data['player_1_name'] ?? 'Unknown') }}--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <p class="text-yellow-500 font-bold">₹{{ $tournament->prize_pool }}</p>--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    @if($tournament->second_place_registration_id && $tournament->secondPlaceRegistration)--}}
{{--                        <div--}}
{{--                            class="flex items-center justify-between bg-gradient-to-r from-gray-400/20 to-gray-300/20 p-4 rounded-lg">--}}
{{--                            <div class="flex items-center">--}}
{{--                                <i class="fas fa-medal text-gray-400 text-2xl mr-4"></i>--}}
{{--                                <div>--}}
{{--                                    <p class="text-gray-400 font-bold">2nd Place</p>--}}
{{--                                    <p class="text-white">--}}
{{--                                        {{ $tournament->secondPlaceRegistration->form_data['team_name'] ??--}}
{{--                                           'Team ' . ($tournament->secondPlaceRegistration->form_data['player_1_name'] ?? 'Unknown') }}--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <p class="text-gray-400 font-bold">₹{{ $tournament->prize_pool2 }}</p>--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    @if($tournament->third_place_registration_id && $tournament->thirdPlaceRegistration)--}}
{{--                        <div--}}
{{--                            class="flex items-center justify-between bg-gradient-to-r from-orange-700/20 to-orange-600/20 p-4 rounded-lg">--}}
{{--                            <div class="flex items-center">--}}
{{--                                <i class="fas fa-award text-orange-700 text-2xl mr-4"></i>--}}
{{--                                <div>--}}
{{--                                    <p class="text-orange-700 font-bold">3rd Place</p>--}}
{{--                                    <p class="text-white">--}}
{{--                                        {{ $tournament->thirdPlaceRegistration->form_data['team_name'] ??--}}
{{--                                           'Team ' . ($tournament->thirdPlaceRegistration->form_data['player_1_name'] ?? 'Unknown') }}--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <p class="text-orange-700 font-bold">₹{{ $tournament->prize_pool3 }}</p>--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-home-layout>--}}
<x-home-layout>
    <div
        class="relative min-h-screen bg-gradient-to-br from-gray-900 via-blue-900 to-gray-900 pt-24 pb-12 px-4 sm:px-6 lg:px-8">
        <!-- Background Grid Pattern -->
        <div
            class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0zNiAxMmgtOHYtMmg4djJ6bTAgMmgtOHYyaDh2LTJ6IiBmaWxsPSJyZ2JhKDI1NSwgMjU1LCAyNTUsIDAuMSkiLz48L2c+PC9zdmc+')] opacity-10"></div>

        <!-- Main Content Container -->
        <div class="relative max-w-7xl mx-auto mt-2">
            <!-- Header Section -->
            <div class="text-center mb-16">
                <div class="font-['Bebas_Neue'] text-7xl lg:text-6xl  font-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-600">
                    Hall of Fame
                </div>
                <p class="text-gray-300 text-lg md:text-xl">Celebrating our tournament champions</p>
            </div>

            <!-- Tournament Cards Container -->
            <div class="space-y-4">
                @foreach($tournaments as $tournament)
                    <div
                        class="bg-gradient-to-b from-gray-800/50 via-blue-900/30 to-gray-800/50 rounded-2xl shadow-2xl backdrop-blur-sm border border-blue-500/20 overflow-hidden transform hover:scale-[1.02] transition-all duration-300">
                        <!-- Tournament Header -->
                        <div class="bg-gradient-to-r from-blue-900/50 to-cyan-900/50 p-6 border-b border-blue-500/20">
                            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                                <div>
                                    <h2 class="text-2xl md:text-3xl font-bold text-white mb-2">{{ $tournament->name }}</h2>
                                    <div class="flex items-center gap-4 text-gray-300">
                                        <span class="flex items-center">
                                            <i class="fas fa-calendar-alt mr-2 text-cyan-400"></i>
                                            {{ $tournament->end_date }}
                                        </span>
{{--                                        <span class="flex items-center">--}}
{{--                                            <i class="fas fa-gamepad mr-2 text-cyan-400"></i>--}}
{{--                                            {{ str_replace('_', ' ', $tournament->type === 'CS_Squad' ? 'clash squad squad' : 'no tournament') }}--}}
{{--                                        </span>--}}
                                    </div>
                                </div>
                                <div class="px-4 py-2 bg-blue-500/20 rounded-lg border border-blue-400/30">
                                    <span class="text-cyan-400 font-semibold">Prize Pool: </span>
                                    <span
                                        class="text-white">₹{{ $tournament->prize_pool + $tournament->prize_pool2 + $tournament->prize_pool3 }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Winners Section -->
                        <div class="p-6 space-y-4">
                            <!-- First Place -->
                            @if($tournament->first_place_registration_id && $tournament->firstPlaceRegistration)
                                <div
                                    class="flex items-center justify-between p-4 rounded-xl bg-gradient-to-r from-green-500/20 via-green-400/10 to-green-500/20 border border-green-500/30">
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="flex items-center justify-center w-12 h-12 rounded-full bg-green-500/20">
                                            <i class="fas fa-trophy text-yellow-500 text-xl"></i>
                                        </div>
                                        <div>
                                            <div class="text-yellow-500 font-bold mb-1">Champion</div>
                                            <div class="text-white text-lg">
                                                {{ $tournament->firstPlaceRegistration->form_data['team_name'] ??
                                                   'Team ' . ($tournament->firstPlaceRegistration->form_data['player_1_name'] ?? 'Unknown') }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-xl font-bold text-yellow-500">
                                        ₹{{ number_format($tournament->prize_pool) }}</div>
                                </div>
                            @endif

                            <!-- Second Place -->
                            @if($tournament->second_place_registration_id && $tournament->secondPlaceRegistration)
                                <div
                                    class="flex items-center justify-between p-4 rounded-xl bg-gradient-to-r from-gray-500/20 via-gray-400/10 to-gray-500/20 border border-gray-400/30">
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="flex items-center justify-center w-12 h-12 rounded-full bg-gray-500/20">
                                            <i class="fas fa-medal text-gray-400 text-xl"></i>
                                        </div>
                                        <div>
                                            <div class="text-gray-400 font-bold mb-1">Runner Up</div>
                                            <div class="text-white text-lg">
                                                {{ $tournament->secondPlaceRegistration->form_data['team_name'] ??
                                                   'Team ' . ($tournament->secondPlaceRegistration->form_data['player_1_name'] ?? 'Unknown') }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-xl font-bold text-gray-400">
                                        ₹{{ number_format($tournament->prize_pool2) }}</div>
                                </div>
                            @endif

                            <!-- Third Place -->
                            @if($tournament->third_place_registration_id && $tournament->thirdPlaceRegistration)
                                <div
                                    class="flex items-center justify-between p-4 rounded-xl bg-gradient-to-r from-orange-700/20 via-orange-600/10 to-orange-700/20 border border-orange-700/30">
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="flex items-center justify-center w-12 h-12 rounded-full bg-orange-700/20">
                                            <i class="fas fa-award text-orange-700 text-xl"></i>
                                        </div>
                                        <div>
                                            <div class="text-orange-700 font-bold mb-1">Second Runner Up</div>
                                            <div class="text-white text-lg">
                                                {{ $tournament->thirdPlaceRegistration->form_data['team_name'] ??
                                                   'Team ' . ($tournament->thirdPlaceRegistration->form_data['player_1_name'] ?? 'Unknown') }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-xl font-bold text-orange-700">
                                        ₹{{ number_format($tournament->prize_pool3) }}</div>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach

                @if($tournaments->isEmpty())
                    <div class="text-center py-12">
                        <div class="text-gray-400 text-xl">No previous tournament winners yet</div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-home-layout>

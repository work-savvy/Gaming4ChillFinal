<x-home-layout>
    @php
        $registration = auth()->user()->registrations()->with('tournament')->latest()->first();
    @endphp
    <div
        class="relative min-h-screen bg-gradient-to-br from-gray-900 via-blue-900 to-gray-900 pt-24 pb-12 px-4 sm:px-6 lg:px-8">
        <!-- Background Grid Pattern -->
        <div
            class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0zNiAxMmgtOHYtMmg4djJ6bTAgMmgtOHYyaDh2LTJ6IiBmaWxsPSJyZ2JhKDI1NSwgMjU1LCAyNTUsIDAuMSkiLz48L2c+PC9zdmc+')] opacity-10"></div>

        <!-- Form Container -->
        <div class="relative max-w-4xl mx-auto">
            <div
                class="bg-gradient-to-b from-gray-800/50 via-blue-900/30 to-gray-800/50 rounded-2xl shadow-2xl backdrop-blur-sm border border-blue-500/20">
                <form  action="{{route('registrations.store', $tournament->id)}}"  method="POST"  class="p-8 space-y-8">
                    @csrf

                    <!-- Form Header -->
                    <div class="text-center space-y-3">
                        <h1 class="font-['Bebas_Neue'] text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-600">
                            Registration for {{$tournament->name}}
                        </h1>
                        <p class="text-gray-300">Enter your team details to participate in the tournament</p>
                    </div>

                    <!-- Team Information -->
                    @if($formVariables['substitute_player_count'] !==0)

                        <div class="space-y-6">
                            <div class="group">
                                <label for="team_name" class="block text-cyan-400 font-medium mb-2">Team Name</label>
                                <input type="text" id="team_name" name="team_name" required
                                       class="w-full bg-gray-900/50 border border-blue-500/30 rounded-lg py-3 px-4 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition duration-300"
                                       placeholder="Enter your team name">
                            </div>
                        </div>
                    @endif

                    <!-- Main Players Section -->
                    <div class="space-y-6">
                        <h2 class="text-2xl font-semibold text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500">
                            Main Squad
                        </h2>
                        <div class="grid gap-6">
                            @for ($i = 1; $i <= $formVariables['player_count']; $i++)
                                <div
                                    class="group p-4 bg-gray-800/30 rounded-lg border border-blue-500/20 hover:border-blue-500/40 transition-all duration-300">
                                    <h3 class="text-cyan-400 font-medium mb-4">Player {{$i}}</h3>
                                    <div class="grid gap-4">
                                        <div>
                                            <input type="text" name="player_{{$i}}_name" required
                                                   class="w-full bg-gray-900/50 border border-blue-500/30 rounded-lg py-3 px-4 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition duration-300"
                                                   placeholder="Player Name">
                                        </div>
{{--                                        <div>--}}
{{--                                            <input type="text" name="player_{{$i}}_uid" required--}}
{{--                                                   class="w-full bg-gray-900/50 border border-blue-500/30 rounded-lg py-3 px-4 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition duration-300"--}}
{{--                                                   placeholder="Player UID">--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>

                    <!-- Substitute Players Section -->
                    <div class="space-y-6">
                        @if($formVariables['substitute_player_count'] !==0)
                        <h2 class="text-2xl font-semibold text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500">
                            Substitute Players
                        </h2>
                        @endif
                        <div class="grid gap-6">
                            @for ($i = 1; $i <= $formVariables['substitute_player_count']; $i++)
                                <div
                                    class="group p-4 bg-gray-800/30 rounded-lg border border-blue-500/20 hover:border-blue-500/40 transition-all duration-300">
                                    <h3 class="text-cyan-400 font-medium mb-4">Substitute {{$i}}</h3>
                                    <div class="grid gap-4">
                                        <div>
                                            <input type="text" name="sub_{{$i}}_name"
                                                   class="w-full bg-gray-900/50 border border-blue-500/30 rounded-lg py-3 px-4 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition duration-300"
                                                   placeholder="Substitute Name">
                                        </div>
{{--                                        <div>--}}
{{--                                            <input type="text" name="sub_{{$i}}_uid"--}}
{{--                                                   class="w-full bg-gray-900/50 border border-blue-500/30 rounded-lg py-3 px-4 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition duration-300"--}}
{{--                                                   placeholder="Substitute UID">--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="space-y-6">
                        <h2 class="text-2xl font-semibold text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500">
                            Contact Details
                        </h2>
                        <div class="group">
                            <label for="whatsapp" class="block text-cyan-400 font-medium mb-2">WhatsApp Number</label>
                            <input type="tel" id="whatsapp" name="whatsapp" required
                                   class="w-full bg-gray-900/50 border border-blue-500/30 rounded-lg py-3 px-4 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition duration-300"
                                   placeholder="Enter WhatsApp number">
                            <label for="secret" class="block text-cyan-400 font-medium mb-2">Secret Code</label>
                            <input type="text" id="secret" name="secret"
                                   class="w-full bg-gray-900/50 border border-blue-500/30 rounded-lg py-3 px-4 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition duration-300"
                                   placeholder="Enter secret code">
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-6">
                        <button type="submit"
                                class="group relative w-full inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-white transition-all duration-300 ease-in-out bg-gradient-to-r from-blue-600 to-cyan-600 rounded-lg hover:from-blue-500 hover:to-cyan-500 focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:ring-offset-2 focus:ring-offset-gray-900 transform hover:scale-105">
                            <span class="relative z-10 flex items-center justify-center">
                                <i class="fas fa-paper-plane mr-2"></i>
                                Register Team
                                <i class="fas fa-chevron-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                            </span>
                            <div
                                class="absolute -inset-0.5 bg-gradient-to-r from-cyan-400 to-blue-500 rounded-lg blur opacity-30 group-hover:opacity-50 transition duration-300 animate-pulse"></div>
                        </button>
                    </div>
                    <input type="hidden" id="form_unique_id" name="form_unique_id" value="">

                </form>
            </div>

            <!-- Decorative Elements -->
            <div
                class="absolute -top-4 -left-4 w-24 h-24 bg-cyan-500 opacity-20 rounded-full blur-xl animate-pulse"></div>
            <div
                class="absolute -bottom-4 -right-4 w-32 h-32 bg-blue-500 opacity-20 rounded-full blur-xl animate-pulse"></div>
        </div>
    </div>
</x-home-layout>

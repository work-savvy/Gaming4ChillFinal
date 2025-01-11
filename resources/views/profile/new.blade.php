<x-home-layout>
    <div class="min-h-screen bg-gradient-to-br from-gray-900 via-blue-900 to-gray-900">
        <!-- Header -->
        <div class="pt-24 pb-8">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="font-['Press_Start_2P'] text-3xl text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-600">
                    {{ __('Profile Settings') }}
                </h2>
            </div>
        </div>

        <!-- Content -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8 pb-12">
            <!-- Profile Information -->
            <div class="relative bg-gray-800/70 backdrop-blur-lg shadow-xl rounded-lg border border-cyan-500/30">
                <div class="p-6 sm:p-8">
                    <section>
                        <header class="mb-6">
                            <h3 class="text-xl font-semibold text-cyan-400">
                                {{ __('Profile Information') }}
                            </h3>
                            <p class="mt-1 text-sm text-gray-400">
                                {{ __("Update your account's profile information and email address.") }}
                            </p>
                        </header>

                        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                            @csrf
                        </form>

                        <form method="post" action="{{ route('profile.update') }}" class="space-y-6">
                            @csrf
                            @method('patch')

                            <div>
                                <label for="name"
                                       class="block text-sm font-medium text-gray-300">{{ __('Name') }}</label>
                                <input id="name" name="name" type="text"
                                       class="mt-1 block w-full px-3 py-2 bg-gray-700/50 border border-cyan-500/30 rounded-md text-gray-100 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent"
                                       :value="old('name', $user->name)" required autofocus/>
                                <x-input-error class="mt-2 text-red-400" :messages="$errors->get('name')"/>
                            </div>

                            <div>
                                <label for="email"
                                       class="block text-sm font-medium text-gray-300">{{ __('Email') }}</label>
                                <input id="email" name="email" type="email"
                                       class="mt-1 block w-full px-3 py-2 bg-gray-700/50 border border-cyan-500/30 rounded-md text-gray-100 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent"
                                       :value="old('email', $user->email)" required/>
                                <x-input-error class="mt-2 text-red-400" :messages="$errors->get('email')"/>

                                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                    <div class="mt-2">
                                        <p class="text-sm text-yellow-400">
                                            {{ __('Your email address is unverified.') }}

                                            <button form="send-verification"
                                                    class="text-cyan-400 hover:text-cyan-300 underline ml-1">
                                                {{ __('Click here to re-send the verification email.') }}
                                            </button>
                                        </p>

                                        @if (session('status') === 'verification-link-sent')
                                            <p class="mt-2 text-sm text-green-400">
                                                {{ __('A new verification link has been sent to your email address.') }}
                                            </p>
                                        @endif
                                    </div>
                                @endif
                            </div>

                            <div class="flex items-center gap-4">
                                <button type="submit"
                                        class="px-4 py-2 bg-gradient-to-r from-blue-600 to-cyan-600 text-white rounded-md hover:from-blue-500 hover:to-cyan-500 focus:outline-none focus:ring-2 focus:ring-cyan-500 transform hover:scale-105 transition-all duration-300">
                                    {{ __('Save Changes') }}
                                </button>

                                @if (session('status') === 'profile-updated')
                                    <p x-data="{ show: true }" x-show="show" x-transition
                                       x-init="setTimeout(() => show = false, 2000)"
                                       class="text-sm text-green-400">
                                        {{ __('Saved.') }}
                                    </p>
                                @endif
                            </div>
                        </form>
                    </section>
                </div>
                <!-- Decorative corner glow -->
                <div
                    class="absolute -top-4 -left-4 w-24 h-24 bg-cyan-500 opacity-20 rounded-full blur-xl animate-pulse"></div>
            </div>

            <!-- Password Update -->
            <div class="relative bg-gray-800/70 backdrop-blur-lg shadow-xl rounded-lg border border-cyan-500/30">
                <div class="p-6 sm:p-8">
                    <section>
                        <header class="mb-6">
                            <h3 class="text-xl font-semibold text-cyan-400">
                                {{ __('Update Password') }}
                            </h3>
                            <p class="mt-1 text-sm text-gray-400">
                                {{ __('Ensure your account is using a long, random password to stay secure.') }}
                            </p>
                        </header>

                        <form method="post" action="{{ route('password.update') }}" class="space-y-6">
                            @csrf
                            @method('put')

                            <div>
                                <label for="current_password" class="block text-sm font-medium text-gray-300">
                                    {{ __('Current Password') }}
                                </label>
                                <input id="current_password" name="current_password" type="password"
                                       class="mt-1 block w-full px-3 py-2 bg-gray-700/50 border border-cyan-500/30 rounded-md text-gray-100 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent"/>
                                <x-input-error :messages="$errors->updatePassword->get('current_password')"
                                               class="mt-2 text-red-400"/>
                            </div>

                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-300">
                                    {{ __('New Password') }}
                                </label>
                                <input id="password" name="password" type="password"
                                       class="mt-1 block w-full px-3 py-2 bg-gray-700/50 border border-cyan-500/30 rounded-md text-gray-100 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent"/>
                                <x-input-error :messages="$errors->updatePassword->get('password')"
                                               class="mt-2 text-red-400"/>
                            </div>

                            <div>
                                <label for="password_confirmation" class="block text-sm font-medium text-gray-300">
                                    {{ __('Confirm Password') }}
                                </label>
                                <input id="password_confirmation" name="password_confirmation" type="password"
                                       class="mt-1 block w-full px-3 py-2 bg-gray-700/50 border border-cyan-500/30 rounded-md text-gray-100 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent"/>
                                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')"
                                               class="mt-2 text-red-400"/>
                            </div>

                            <div class="flex items-center gap-4">
                                <button type="submit"
                                        class="px-4 py-2 bg-gradient-to-r from-blue-600 to-cyan-600 text-white rounded-md hover:from-blue-500 hover:to-cyan-500 focus:outline-none focus:ring-2 focus:ring-cyan-500 transform hover:scale-105 transition-all duration-300">
                                    {{ __('Save Password') }}
                                </button>

                                @if (session('status') === 'password-updated')
                                    <p x-data="{ show: true }" x-show="show" x-transition
                                       x-init="setTimeout(() => show = false, 2000)"
                                       class="text-sm text-green-400">
                                        {{ __('Saved.') }}
                                    </p>
                                @endif
                            </div>
                        </form>
                    </section>
                </div>
                <!-- Decorative corner glow -->
                <div
                    class="absolute -bottom-4 -right-4 w-24 h-24 bg-blue-500 opacity-20 rounded-full blur-xl animate-pulse"></div>
            </div>

{{--            <!-- Delete Account -->--}}
{{--            <div class="relative bg-gray-800/70 backdrop-blur-lg shadow-xl rounded-lg border border-red-500/30">--}}
{{--                <div class="p-6 sm:p-8">--}}
{{--                    <section class="space-y-6">--}}
{{--                        <header>--}}
{{--                            <h3 class="text-xl font-semibold text-red-400">--}}
{{--                                {{ __('Delete Account') }}--}}
{{--                            </h3>--}}
{{--                            <p class="mt-1 text-sm text-gray-400">--}}
{{--                                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}--}}
{{--                            </p>--}}
{{--                        </header>--}}

{{--                        <button x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"--}}
{{--                                class="px-4 py-2 bg-gradient-to-r from-red-600 to-red-500 text-white rounded-md hover:from-red-500 hover:to-red-400 focus:outline-none focus:ring-2 focus:ring-red-500 transform hover:scale-105 transition-all duration-300">--}}
{{--                            {{ __('Delete Account') }}--}}
{{--                        </button>--}}

{{--                        <!-- Delete Account Modal -->--}}
{{--                        <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>--}}
{{--                            <form method="post" action="{{ route('profile.destroy') }}"--}}
{{--                                  class="p-6 bg-gray-800 rounded-lg">--}}
{{--                                @csrf--}}
{{--                                @method('delete')--}}

{{--                                <h2 class="text-lg font-medium text-red-400">--}}
{{--                                    {{ __('Are you sure you want to delete your account?') }}--}}
{{--                                </h2>--}}

{{--                                <p class="mt-1 text-sm text-gray-400">--}}
{{--                                    {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}--}}
{{--                                </p>--}}

{{--                                <div class="mt-6">--}}
{{--                                    <input id="password" name="password" type="password"--}}
{{--                                           class="block w-3/4 px-3 py-2 bg-gray-700/50 border border-red-500/30 rounded-md text-gray-100 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent"--}}
{{--                                           placeholder="{{ __('Password') }}"/>--}}
{{--                                    <x-input-error :messages="$errors->userDeletion->get('password')"--}}
{{--                                                   class="mt-2 text-red-400"/>--}}
{{--                                </div>--}}

{{--                                <div class="mt-6 flex justify-end gap-4">--}}
{{--                                    <button type="button" x-on:click="$dispatch('close')"--}}
{{--                                            class="px-4 py-2 bg-gray-700 text-gray-300 rounded-md hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500">--}}
{{--                                        {{ __('Cancel') }}--}}
{{--                                    </button>--}}

{{--                                    <button type="submit"--}}
{{--                                            class="px-4 py-2 bg-gradient-to-r from-red-600 to-red-500 text-white rounded-md hover:from-red-500 hover:to-red-400 focus:outline-none focus:ring-2 focus:ring-red-500">--}}
{{--                                        {{ __('Delete Account') }}--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </x-modal>--}}
{{--                    </section>--}}
{{--                </div>--}}
{{--                <!-- Decorative corner glow -->--}}
{{--                <div--}}
{{--                    class="absolute -bottom-4 -right-4 w-24 h-24 bg-red-500 opacity-20 rounded-full blur-xl animate-pulse"></div>--}}
{{--            </div>--}}
        </div>
    </div>
</x-home-layout>

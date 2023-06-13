<x-guest-layout>
    <section class="bg-gray-50 min-h-screen flex items-center justify-center">
        <div class="bg-gray-100 flex rounded-2xl px-6 py-12 shadow-lg max-w-2xl w-full items-center">
            <div class="md:w-full px-6 md:px-6">
                <form method="POST"  action="{{ route('register') }}">
                    @csrf
                    <h2 class="font-bold text-2xl text-[#002D74]">Register</h2>


                    <div class="mt-4">
                        <x-input-label for="name" :value="__('Full Name')" />
                        <x-text-input id="name" class="block mt-1 w-full px-3 py-2" type="name" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            
                        <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <x-primary-button class="mt-3">
                        {{ __('Register') }}
                    </x-primary-button>

          
                    <div class="mt-3 text-xs flex justify-between items-center text-[#002D74]">
                        <p>Already have an account?</p>
                        <a class="underline text-sm text-gray-600 dark:text-gray-500 hover:text-gray-900 dark:hover:text-gray-400 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                            {{ __('Login') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-guest-layout>

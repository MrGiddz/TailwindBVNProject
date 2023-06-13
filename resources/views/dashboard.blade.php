<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('BVN Verify') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="font-semibold text-center text-3xl md:text-lg lg:text-xl text-gray-100">Welcome</h1>

                    <p class="text-center text-gray-100">Enter your BVN code in the textbox provided to verify</p>
                    <form method="POST" action="{{ route('verify') }}">
                        @csrf
                        
                        <x-text-input id="bvn" class="block mt-1 w-full" type="bvn" placeholder="Enter BVN here" name="bvn" :value="old('email')" required autofocus autocomplete=false/>
                        <x-primary-button class="mt-3">
                            {{ __('Verify') }}
                        </x-primary-button>
                    </form>
                    <span class="text-center text-sm block italic text-gray-300 mt-3">Note that this is for testing purposes only, your bvn will not be saved</span>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

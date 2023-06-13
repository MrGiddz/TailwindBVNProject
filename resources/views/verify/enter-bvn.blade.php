<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Verify BVN') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            @if (session('status') == 'email verified successfully')
                <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                    {{ __('Thanks for verifying your email') }}
                </div>
            @endif

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl flex flex-col justify-center">
                    <form method="POST" action="{{ route('bvn-verification.verify') }}">
                        <div class="mt-4">
                                @csrf
                            <x-input-label for="bvn" :value="__('BVN')" />
                            <x-text-input id="bvn" class="block mt-1 w-full"
                                type="text"
                                name="bvn"
                                placeholder="Enter your BVN"
                                required autocomplete=false />
                            <x-input-error :messages="$errors->get('bvn')" class="mt-2" />
                        </div>
                        <div class="flex flex-col justify-center mt-4">
                            <div class="flex items-center">
                                <x-text-input type="checkbox"  name="consent" class="mr-4"/>
                                <x-input-label for="consent" :value="__('Agree to usage?')" />
                            </div>
                                <x-input-error :messages="$errors->get('consent')" class="mt-2" />
                        </div>
                        <x-primary-button class="mt-3">
                            {{ __('Verify') }}
                        </x-primary-button>    
                    </form>
                </div>
            </div>


        </div>
    </div>
</x-app-layout>

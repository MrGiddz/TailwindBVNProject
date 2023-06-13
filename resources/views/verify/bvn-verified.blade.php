<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Verify BVN') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            @if (session('status') == 'success')
                <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                    {{ __('BVN verification complete, thanks for using our service') }}
                </div>
            @endif

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl flex flex-col justify-center">
                    @if (session('response'))
                        @php
                            $response =json_decode(session('response'));
                            // dd($response->data)
                        @endphp
                        <div class=" w-1/3 flex flex-col p-5 mt-5">
                            <img src="{{ $response->data->image }}" alt="profile image" class="rounded-sm mb-10 block" width="100" height="100">
                            <div class="flex items-center">
                                <p class="text-white text-lg">First Name: </p>
                                <p class="text-white text-lg">{{ $response->data->firstName }}</p>
                            </div>
                            <div class="flex items-center">
                                <p class="text-white text-lg">Middle Name: </p>
                                <p class="text-white text-lg">{{ $response->data->middleName }}</p>
                            </div>
                            <div class="flex items-center">
                                <p class="text-white text-lg">Last Name: </p>
                                <p class="text-white text-lg">{{ $response->data->lastName }}</p>
                            </div>
                            <div class="flex items-center">
                                <p class="text-white text-lg">NIN: </p>
                                <p class="text-white text-lg">{{ $response->data->nin }}</p>
                            </div>
                            <div class="flex items-center">
                                <p class="text-white text-lg">ID: </p>
                                <p class="text-white text-lg">{{ $response->data->idNumber }}</p>
                            </div>
                        </div>
                        @else
                        <p class="text-white text-md">Session Expired</p>
                        <form method="get" action="{{ route('home') }}">
                            @csrf
                
                            <div>
                                <x-primary-button class="mt-3">
                                    {{ __('Go Home') }}
                                </x-primary-button>
                            </div>
                        </form>
                    @endif

                </div>
            </div>

            @push('scripts')
                <script src="{{ mix('js/lottie-animation.js') }}"></script>
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        loadLottieAnimation();
                    });
                </script>
             @endpush

        </div>
    </div>
</x-app-layout>

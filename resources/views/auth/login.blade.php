<x-guest-layout>
    <x-authentication-card>
        {{-- <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot> --}}

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="sm:flex justify-center items-center sm:space-x-8">
                <div class="sm:w-1/2">
                    <img src="{{asset('img/login-image.jpg')}}" alt="imagen login" class="w-full h-auto">
                </div>

                <div class="sm:w-1/2 mt-4 sm:mt-5 ">
                    <div>
                        <x-label for="email" value="{{ __('Email') }}" />
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    </div>

                    <div class="mt-4">
                        <x-label for="password" value="{{ __('Password') }}" />
                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    </div>

                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-checkbox id="remember_me" name="remember" />
                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex flex-col mt-4 sm:flex-row sm:items-center sm:justify-between">
                        <x-button class="w-full mb-4 sm:mb-0 justify-center  sm:w-auto sm:mr-4">
                            {{ __('Log in') }}
                        </x-button>

                        <div class="w-full sm:w-auto">
                            @if (Route::has('password.request'))
                                <a class="block text-center sm:inline-block underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mb-2 sm:mb-0 sm:mr-4" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif

                            @if (Route::has('register'))
                                <a class="block text-center sm:inline-block underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mr-4" href="{{ route('register') }}">
                                    {{ __('Register') }}
                                </a>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>

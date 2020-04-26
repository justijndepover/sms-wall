@extends('layouts.login')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-200 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-sm w-full">
        <div>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 300 300" fill="currentColor" class="w-24 m-auto text-gray-300 dark:text-gray-700">
                <path d="M150,5.1L4.6,203.7L150,294.9l145.4-91.2L150,5.1z M150,272.3L32.1,198.4l31.7-43.3l27.8,17.4l-13.8,18.8 l36.5,22.9v-72.7V86.2L150,37.4V272.3z M185.7,141.5l36.5,49.8l-36.5,22.9V141.5z"></path>
            </svg>
        </div>

        <form class="mt-8" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="">
                <div>
                    <input aria-label="{{ __('E-Mail Address') }}" name="email" type="email" required placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" autocomplete="email" autofocus
                        class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5 @error('email') border-red-500 @enderror"/>

                    @error('email')
                        <span class="text-sm text-red-500" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mt-1">
                    <input aria-label="Password" name="password" type="password" required placeholder="Password" autocomplete="current-password"
                        class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5 @error('password') border-red-500 @enderror" />

                    @error('password')
                        <span class="text-sm text-red-500" role="alert">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mt-6 flex items-center justify-between">
                <div class="flex items-center">
                    <input name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} type="checkbox" class="form-checkbox h-4 w-4 text-teal-600 transition duration-150 ease-in-out" />

                    <label for="remember" class="ml-2 block text-sm leading-5 text-gray-900">
                        {{ __('Remember Me') }}
                    </label>
                </div>

                @if (Route::has('password.request'))
                <div class="text-sm leading-5">
                    <a href="{{ route('password.request') }}" class="font-medium text-teal-600 hover:text-teal-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                        {{ __('Forgot Your Password?') }}
                    </a>
                </div>
                @endif
            </div>

            <div class="mt-6">
                <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-teal-600 hover:bg-teal-500 focus:outline-none focus:border-teal-700 focus:shadow-outline-teal active:bg-teal-700 transition duration-150 ease-in-out">
                    <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                        <svg class="h-5 w-5 text-teal-500 group-hover:text-teal-400 transition ease-in-out duration-150" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                        </svg>
                    </span>
                    {{ __('Login') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

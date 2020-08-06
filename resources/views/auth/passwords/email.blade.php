@extends('layouts.login')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-200 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-sm w-full">
        <div>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 300 300" fill="currentColor" class="w-24 m-auto text-gray-300 dark:text-gray-700">
                <path d="M150,5.1L4.6,203.7L150,294.9l145.4-91.2L150,5.1z M150,272.3L32.1,198.4l31.7-43.3l27.8,17.4l-13.8,18.8 l36.5,22.9v-72.7V86.2L150,37.4V272.3z M185.7,141.5l36.5,49.8l-36.5,22.9V141.5z"></path>
            </svg>
        </div>

        <form class="mt-8" method="POST" action="{{ route('password.email') }}">
            @csrf
            @if (session('status'))
                <div class="py-2 px-4 bg-blue-100 mb-8 text-blue-500 text-sm rounded-lg" role="alert">
                    <span class="flex items-center">
                        <svg viewBox="0 0 20 20" fill="currentColor" strokeWidth="2" class="w-4 h-4 mr-1">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                        </svg>

                        {{ session('status') }}
                    </span>
                </div>
            @endif

            <div class="">
                <div>
                    <input aria-label="{{ __('E-Mail Address') }}" name="email" type="email" required placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" autocomplete="email" autofocus
                        class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-lg focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5 @error('email') border-red-500 @enderror"/>

                    @error('email')
                        <span class="text-sm text-red-500" role="alert">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mt-6 flex items-center justify-between">
                @if (Route::has('login'))
                <div class="text-sm leading-5">
                    <a href="{{ route('login') }}" class="font-medium text-blue-600 hover:text-blue-500 focus:outline-none focus:underline transition ease-in-out duration-150 flex items-center">
                        <svg viewBox="0 0 20 20" fill="currentColor" strokeWidth="2" class="w-4 h-4 mr-1">
                            <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                        </svg>

                        {{ __('Back to login') }}
                    </a>
                </div>
                @endif
            </div>

            <div class="mt-6">
                <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue active:bg-blue-700 transition duration-150 ease-in-out">
                    {{ __('Send Password Reset Link') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@extends('layouts.login')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-200 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-sm w-full">
        <div>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 300 300" fill="currentColor" class="w-24 m-auto text-gray-300 dark:text-gray-700">
                <path d="M150,5.1L4.6,203.7L150,294.9l145.4-91.2L150,5.1z M150,272.3L32.1,198.4l31.7-43.3l27.8,17.4l-13.8,18.8 l36.5,22.9v-72.7V86.2L150,37.4V272.3z M185.7,141.5l36.5,49.8l-36.5,22.9V141.5z"></path>
            </svg>

            <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-800">
                {{ __('Verify Your Email Address') }}
            </h2>

            @if (session('resent'))
                <div class="py-2 px-4 bg-teal-100 mt-4 mb-4 text-teal-500 text-sm rounded-sm" role="alert">
                    <span class="flex items-center">
                        <svg viewBox="0 0 20 20" fill="currentColor" strokeWidth="2" class="w-4 h-4 mr-1">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>

                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </span>
                </div>
            @endif

            <p class="mt-2 text-center text-sm leading-5 text-gray-600">
                {{ __('Before proceeding, please check your email for a verification link.') }}
                {{ __('If you did not receive the email') }},
                <a href="#" onclick="event.preventDefault(); document.getElementById('resend-form').submit();"
                    class="font-medium text-teal-600 hover:text-teal-500 focus:outline-none focus:underline transition ease-in-out duration-150">{{ __('click here to request another') }}</a>.

                <form id="resend-form" class="hidden" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                </form>
            </p>
        </div>
    </div>
</div>
@endsection

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-200 antialiased">
    <div id="app">
        <nav class="bg-blue-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <a href="{{ url('/') }}">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 300 300" fill="currentColor" class="w-8 m-auto text-blue-700">
                                    <path d="M150,5.1L4.6,203.7L150,294.9l145.4-91.2L150,5.1z M150,272.3L32.1,198.4l31.7-43.3l27.8,17.4l-13.8,18.8 l36.5,22.9v-72.7V86.2L150,37.4V272.3z M185.7,141.5l36.5,49.8l-36.5,22.9V141.5z"></path>
                                </svg>
                            </a>
                        </div>

                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline">
                                <a href="{{ route('home') }}" class="px-3 py-2 rounded-md text-sm font-medium @if(Request::is('home')) text-blue-100 bg-blue-900 @else text-blue-200 hover:text-blue-100 hover:bg-blue-700 @endif focus:outline-none focus:text-blue-100 focus:bg-blue-700">Home</a>
                                <a href="{{ route('history') }}" class="ml-4 px-3 py-2 rounded-md text-sm font-medium @if(Request::is('history')) text-blue-100 bg-blue-900 @else text-blue-200 hover:text-blue-100 hover:bg-blue-700 @endif focus:outline-none focus:text-blue-100 focus:bg-blue-700">Geschiedenis</a>
                            </div>
                        </div>
                    </div>

                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">
                            <dropdown :user="{{ Auth::user() }}">
                                <dropdown-item href="/profile">Jouw profiel</dropdown-item>
                                <dropdown-item href="/settings">Instellingen</dropdown-item>
                                <dropdown-item href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</dropdown-item>
                            </dropdown>
                        </div>
                    </div>

                    <div class="-mr-2 flex md:hidden">
                        <menubutton></menubutton>
                    </div>
                </div>
            </div>

            <menu-component :user="{{ Auth::user() }}">
                <menu-component-item class="@if(Request::is('home')) text-blue-100 bg-blue-900 @else text-gray-300 hover:text-blue-100 hover:bg-blue-700 @endif" href="{{ route('home') }}">Home</menu-component-item>
                <menu-component-item class="mt-1 @if(Request::is('history')) text-blue-100 bg-blue-900 @else text-gray-300 hover:text-blue-100 hover:bg-blue-700 @endif" href="{{ route('history') }}">Geschiedenis</menu-component-item>
            </menu-component>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                @csrf
            </form>
        </nav>

        @yield('body')
    </div>
</body>

</html>
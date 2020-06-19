@extends('layouts.app')

@section('body')
<header>
    <div class="max-w-6xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold leading-tight text-blue-400">
            {{ $name }}
        </h1>
    </div>
</header>

<main>
    <div class="max-w-6xl mx-auto pb-6 px-4 sm:px-6 lg:px-8">
        @yield('content')
    </div>
</main>
@endsection
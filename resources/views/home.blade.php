@extends('layouts.default-page', ['name' => 'Home'])

@section('content')
    <div class="flex flex-col sm:flex-row mb-6">
        <div class="shadow rounded-lg bg-white p-6 flex-1 mb-3 sm:mb-0 sm:mr-3">
            <h2 class="text-xs font-semibold text-gray-600 uppercase tracking-wide">Analytics</h2>
            <h3 class="text-2xl font-bold text-blue-400 mt-2">73,329</h3>
        </div>

        <div class="shadow rounded-lg bg-white p-6 flex-1 mb-3 sm:mb-0 sm:mr-3">
            <h2 class="text-xs font-semibold text-gray-600 uppercase tracking-wide">aantal berichten</h2>
            <h3 class="text-2xl font-bold text-blue-400 mt-2">{{ $messagecount }}</h3>
        </div>

        <div class="shadow rounded-lg bg-white p-6 flex-1">
            <h2 class="text-xs font-semibold text-gray-600 uppercase tracking-wide">Totale winst</h2>
            <h3 class="text-2xl font-bold text-blue-400 mt-2">€ 12,4 <small class="text-sm text-gray-600 ml-2">5 cent / sms</small></h3>
        </div>
    </div>

    <div class="shadow rounded-lg bg-white p-6 mb-6">
        <div class="sm:flex sm:flex-row items-center justify-between">
            <div class="">
                <h2 class="text-2xl font-bold leading-tight text-blue-400 mb-4">Stuur een bericht</h2>
                <p class="mb-4 text-gray-600 text-sm">Plaats zelf een bericht op de muur vanaf je dashboard.<br>Klik op onderstaande knop en vul het tekstveld in.</p>
                <message-popup-button><message-popup-button>
            </div>

            <div class="mt-6 sm:mt-0">
                @include('assets.message-svg')
            </div>
        </div>
    </div>
@endsection
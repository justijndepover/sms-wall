<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'SMS Wall') }}</title>
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="bg-gray-200 text-gray-900">
        <div id="app" class="w-screen h-screen">
            <div class="flex items-center justify-center h-screen relative">
                <sms-wall></sms-wall>
            </div>
        </div>

        <script src="{{ mix("js/app.js") }}" defer></script>
    </body>
</html>

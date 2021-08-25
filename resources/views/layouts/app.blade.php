<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        {{-- @livewireStyles --}}
        <livewireStyles /> 
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        
        <livewire:components.navbar /> 
        {{ $slot }}
        {{-- <livewire:home />  --}}
        <livewire:scripts /> 
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        {{-- @livewireScripts --}}
    </body>
</html>

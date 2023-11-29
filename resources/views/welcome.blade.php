<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body>
        <div class="app">
            <app></app>
        </div>
    </body>
    @if(app()->environment('local'))
        <script type="module" src="{{ env('VITE_ASSET_URL', 'http://localhost:3000') }}/src/app.js" defer></script>
    @else
        <script type="module" src="{{ asset('js/app.js') }}" defer></script>
    @endif
</html>

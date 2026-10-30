<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#07110F">
        <meta name="description" content="The personal portfolio of Victor Edward.">

        <title>{{ $title }} | VICTOR EDWARD</title>

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body id="page-top" @if (request()->routeIs('cv')) class="cv-document" @endif>
        <a class="skip-link" href="#main-content">Skip to content</a>

        <x-site-navigation />

        <main id="main-content">
            @yield('content')
        </main>

        <x-site-footer />

        <a class="back-to-top" href="#page-top" aria-label="Back to top" hidden>
            <span aria-hidden="true">&uarr;</span>
        </a>
    </body>
</html>

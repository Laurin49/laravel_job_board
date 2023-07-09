<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Job Board</title>

        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    <body class="max-w-3xl mx-auto mt-10 bg-slate-200 text-slate-700">
        {{ $slot }}
    </body>
</html>
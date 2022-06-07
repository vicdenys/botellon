<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Administration backend login-page for bottelon.be"/>

        <title>{{ config('app.name', 'Botellon Dashboard') }}</title>

        <x-favicon></x-favicon>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

       
    </head>
    <body>
        <div class=" font-bazovy text-[1.5rem] text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>

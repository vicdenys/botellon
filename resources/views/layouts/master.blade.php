<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="TODO" />


    <title>Botellon</title>

    <x-favicon></x-favicon>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>


<body class="antialiased  {{ isset($isDarkTheme) ? 'bg-green' : 'bg-white' }}">

        <div class="min-h-screen font-bazovy" x-data="{menuOpen: false}">
            @include('layouts.navigation-guest', ['isDarkTheme' => isset($isDarkTheme)])

            

            <!-- Page Content -->
            <main>
                @yield('content')
            </main>

            <x-footer-overlay :isDarkTheme="isset($isDarkTheme)"></x-footer-overlay>
        </div>



    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
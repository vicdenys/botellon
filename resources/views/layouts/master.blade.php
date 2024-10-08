<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{  Request::is('/') ? 'overflow-hidden overflow-y-hidden relative' : '' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="brunch & aperitif restaurant! located in the hippest neighborhood of Antwerp, the south part!" />


    <title>
        botellon - 
        @isset($title)
            {{ $title }} 
        @endisset
    </title>

    <x-favicon></x-favicon>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>


<body class="antialiased cursor-none text-green {{  Request::is('/') ? 'overflow-hidden overflow-y-hidden' : '' }} {{ isset($isDarkTheme) ? 'bg-green' : 'bg-white' }}"  x-data="{menuOpen: false}">

        <div class=" h-full font-bazovy" @resize.window="menuOpen = false">
            @include('layouts.navigation-guest', ['isDarkTheme' => isset($isDarkTheme), 'isAboutNav' => false])

            

            <!-- Page Content -->
            <main>
                @yield('content')
            </main>

            <x-footer-overlay :isDarkTheme="isset($isDarkTheme)" ></x-footer-overlay>

            
        </div>
       
        <div id="mouse" class="fixed z-[1000] transform -translate-x-1/2 -translate-y-1/2 w-4 h-4  rounded-full pointer-events-none {{  isset($isDarkTheme) ? 'bg-white ' : 'bg-green' }}" :class="[ menuOpen ? '!bg-green': 'bg-white' ]">
            
        </div>



    <script src="{{ mix('js/app.js') }}" ></script>
</body>

</html>
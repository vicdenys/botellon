@extends('layouts.master' , ['isDarkTheme' => 'true', 'title' => 'Home'])

@section('content')

<div id="homeScrollContainer" class=" relative   max-h-screen snap-mandatory snap-always snap-y"
    :class="[ menuOpen ? 'overflow-hidden overflow-y-hidden':' overflow-y-scroll  ' ]" >
    <div id="homeTopHero" class=" snap-start snap-always">
        <div class=" max-h-screen  relative z-40 mx-auto items-center text-[1.5rem] ">
            <div id="homePageWrapper" class="w-full h-screen flex justify-center">
                <div class="w-full absolute md:h-[calc(100%-12rem)] h-[calc(100%-10rem)] pt-20 fill-white flex justify-center items-center">
                    <h1 class=" md:w-96 w-56  ">
                        <x-application-logo-animated></x-application-logo-animated>
                    </h1>
                </div>
                <div id="homePageSubTitleWrapper" class=" fixed  w-full overflow-hidden bottom-[4.8rem] bottom-[calc(4.8rem+env(safe-area-inset-bottom))] lg:bottom-[calc(5rem+env(safe-area-inset-bottom))] md:h-28 h-20 mx-auto md:py-8 border-t border-t-white text-center font-victorianna-thin text-white text-2xl sm:text-4xl lg:text-6xl">
                    <h2 id="homePageSubTitle" class="relative h-full w-full">
                        <span class=" absolute top-1/2 w-full text-center left-0 transform -translate-y-1/2">
                            <span class="inline-block opacity-0 transform translate-y-full animate-pop-up-out" style="animation-delay: 0.2s;">brunch</span>
                            <span class="inline-block opacity-0 transform translate-y-full animate-pop-up-out" style="animation-delay: 0.25s;">&</span>
                            <span class="inline-block opacity-0 transform translate-y-full animate-pop-up-out" style="animation-delay: 0.3s;">{{ __('home.aperitif') }}</span>
                            <span class="inline-block opacity-0 transform translate-y-full animate-pop-up-out" style="animation-delay: 0.35s;">restaurant</span>
                        </span>
                        <span class="absolute top-1/2 w-full text-center left-0 transform -translate-y-1/2">
                            <span class="inline-block opacity-0 transform translate-y-full animate-pop-up-out" style="animation-delay: 3.2s;">pick</span>
                            <span class="inline-block opacity-0 transform translate-y-full animate-pop-up-out" style="animation-delay: 3.25s;">your</span>
                            <span class="inline-block opacity-0 transform translate-y-full animate-pop-up-out" style="animation-delay: 3.3s;">b(o)ttles</span>
                        </span>
                    </h2>
                </div>
            </div>

        </div>


        <div id="bottleCanvasContainer" class="absolute w-screen z-30 h-screen top-0 left-0" style="height:  100%;">
            <canvas id="bottleCanvas" class="w-full h-full"></canvas>
        </div>
    </div>

    @include('about')

</div>




@stop
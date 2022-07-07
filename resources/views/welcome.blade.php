@extends('layouts.master')

@section('content')


<div class="  relative z-40 mx-auto items-center text-[1.5rem] ">
    <div class="w-full h-screen">
        <div class="w-full md:h-[calc(100%-12rem)] h-[calc(100%-10rem)] pt-20 fill-white flex justify-center items-center">
            <h1 class=" md:w-96 w-56 overflow-hidden">
                <x-application-logo-animated></x-application-logo-animated>
            </h1>
        </div>
        <div class="flex overflow-hidden items-center justify-center md:h-28 h-20 mx-auto md:py-8 border-t border-t-white text-center font-victorianna-thin text-white text-4xl md:text-6xl">
            <h2 class="">
                <span class="inline-block opacity-0 transform translate-y-full animate-pop-up" style="animation-delay: 0.2s;">brunch</span>
                <span class="inline-block opacity-0 transform translate-y-full animate-pop-up" style="animation-delay: 0.25s;">&</span>
                <span class="inline-block opacity-0 transform translate-y-full animate-pop-up" style="animation-delay: 0.3s;">aperitief</span>
                <span class="inline-block opacity-0 transform translate-y-full animate-pop-up" style="animation-delay: 0.35s;">restaurant</span>
            </h2>
        </div>
    </div>

</div>


<div class="fixed w-screen z-30 h-screen top-0 left-0">
    <canvas id="bottleCanvas"class="w-full h-full"></canvas>
</div>

@stop
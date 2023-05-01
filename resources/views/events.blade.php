@extends('layouts.master', ['title' => 'Events'])

@section('content')


<div class="pb-16 md:pb-20  relative z-40 mx-auto text-xl  items-center  mt-16 md:mt-20">

    <div class="text-center py-4 border-b border-green ">
        <h1 class="font-victorianna-thin text-3xl  ">{{ __('events.title') }}</h1>
    </div>

    <div class=" md:flex   md:flex-row-reverse md:border-b border-green">
        <div class="px-8 py-8 md:py-12 space-y-4 bg-white md:w-1/2">
            <p class="text-left space-y-4">
                <span class="block">
                    {{ __('events.1.1') }}<a href="https://botellonantwerp.be/signup">{{ __('events.3.6') }}<u>{{ __('events.3.7') }}</u>{{ __('events.3.8') }}</a></span>
					<span class="block ">
                    ...</span>
                <span class="block">
                    {{ __('events.1.2') }} </span>
					<br>
            </p>
        </div>
        <div data-module-parallax class="parallax-container flex  items-center justify-center relative  max-h-60 md:max-h-[initial]   md:w-1/2 overflow-hidden  border-t md:border-none border-green">
            <div class="absolute top-1/2  left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                <svg class="animate-spin h-8 w-8 rounded-full bg-transparent border border-transparent  border-r-green border-t-green" viewBox="0 0 24 24"></svg>
            </div>
            <img data-parallax data-speed='-0.15' class="paralax-img max-w-none w-full relative md:absolute h-auto" src="/img/bottle-rose.jpeg" alt="picnic cloth ">
        </div>

    </div>

    <div class="text-center py-4 border-b border-green ">
        <h1 class="font-victorianna-thin text-3xl  "><!--{{ __('events.title.2') }}--></h1>
    </div>


    <div class="px-8 md:border-b border-green bg-white">
        <div class="  pt-8 md:pb-8 md:py-12  bg-white ">
            <p class="text-left md:text-center ">
                <span class="block">
                    {{ __('events.2.1') }} </span>
                <span class="block ">
                    {{ __('events.2.2.1') }} </span>
                <span class="block ">
                    {{ __('events.2.2.2') }} </span>
                <span class="block ">
                    {{ __('events.2.2.3') }} </span>
                <span class="block ">
                    {{ __('events.2.2.4') }} </span>
                <span class="block ">
                    {{ __('events.2.2.5') }} </span>
                <span class="block ">
                    ...</span>
            </p>
        </div>
    </div>


    <div class=" md:flex   border-green">
        <div class="px-8 py-8 md:py-12 space-y-4 bg-white md:w-1/2">
            <p class="text-left space-y-4">
                <span class="block">
                    {{ __('events.3.1') }} </span>
                <span class="block mb-4">
                    {{ __('events.3.2') }} </span>
                <span class="block">
                    {{ __('events.3.3') }} </span>
                <span class="block mb-4">
                    {{ __('events.3.4') }} </span>
                <span class="block ">
                    {{ __('events.3.5') }}
                    <a data-hover href="mailto:info@botellonantwerp.be">info@botellonantwerp.be</a> </span>
                </span>
            </p>
        </div>

        <div data-module-parallax class="parallax-container flex  items-center justify-center relative  max-h-60 md:max-h-[initial]   md:w-1/2 overflow-hidden  border-t md:border-none border-green">
            <div class="absolute top-1/2  left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                <svg class="animate-spin h-8 w-8 rounded-full bg-transparent border border-transparent  border-r-green border-t-green" viewBox="0 0 24 24"></svg>
            </div>
            <img data-parallax data-speed='-0.15' class="paralax-img max-w-none w-full relative md:absolute h-auto" src="/img/bruschetta.jpg" alt="bruschetta  ">
        </div>

    </div>
    <!--
    <div class="text-center py-4 border-t border-green ">
        <h1 class="font-victorianna-thin text-3xl  ">{{ __('events.title.3') }}</h1>
    </div>
    -->
    <x-contact-footer></x-contact-footer>
</div>



@stop
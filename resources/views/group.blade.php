@extends('layouts.master', ['title' => 'Groepen'])

@section('content')


<div class="pb-16 md:pb-20  relative z-40 mx-auto text-xl  items-center  mt-16 md:mt-20">

    <div class="text-center py-4 border-b border-green ">
        <h1 class="font-victorianna-thin text-3xl  ">{{ __('group.title') }}</h1>
    </div>

    <div class=" md:flex   md:flex-row-reverse md:border-b border-green">
        <div class="px-8 py-8 md:py-12 space-y-4 bg-white md:w-1/2">
            <p class="text-left space-y-4">
                <span class="block">
                    {{ __('group.1.0') }} </span>
                <span class="block">
                    {{ __('group.1.1') }} </span>
                <span class="block">
                    {{ __('group.1.2') }} </span>
                <span class="block">
                    {{ __('group.1.3') }} </span>
                <span class="block">
                    {{ __('group.1.4') }} </span>
				<span class="block">
                    {{ __('group.1.5') }} </span>
            </p>
        </div>
        <div data-module-parallax class="parallax-container flex  items-center justify-center relative  max-h-60 md:max-h-[initial]   md:w-1/2 overflow-hidden  border-y md:border-none border-green">
            <div class="absolute top-1/2  left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                <svg class="animate-spin h-8 w-8 rounded-full bg-transparent border border-transparent  border-r-green border-t-green" viewBox="0 0 24 24"></svg>
            </div>
            <img data-parallax data-speed='-0.15' class="paralax-img max-w-none w-[150%] md:w-[200%] -mt-[15%]  lg:w-[150%] relative md:absolute h-auto" src="/img/museum.jpg" alt="group group">
        </div>

    </div>

    <div class="px-8  bg-white">
        <div class="px-8 py-8 md:py-12  bg-white ">
            <p class="text-center ">
                <span class="block">
                    {{ __('group.2.1') }} </span>
                <span class="block mb-4">
                    {{ __('group.2.1.2') }} </span>
                <span class="block">
                    {{ __('group.2.2') }} </span>
                <!--<span class="block mb-4">
                    {{ __('group.2.2.2') }} </span>
                <span class="block ">
                    {{ __('group.2.3') }} </span>-->
            </p>
        </div>
    </div>

    <div class="text-center py-4 border-y border-green ">
        <h1 class="font-victorianna-thin text-3xl  ">{{ __('group.title.2') }}</h1>
    </div>

    <div class=" md:flex   border-green">
        <div class="px-8 py-8 md:py-12 space-y-4 bg-white md:w-1/2">
            <p class="text-left space-y-4">
                <span class="block">
                    {{ __('group.3.1') }}
                    <a class="border-b border-green" href="https://reservations.tablebooker.com/?restaurantId=51380481&obmPrimaryColor=%23063e33&obmFontColor=%23f6eee3&lang={{ Config::get('app.locale') }}" target="_blank" class="pb-1" data-hover>link</a></span>
                <span class="block">
                    {{ __('group.3.2') }}
                    <a data-hover href="mailto:info@botellonantwerp.be">info@botellonantwerp.be</a> </span>
                </span>
            </p>
        </div>
        <div data-module-parallax class="parallax-container flex  items-center justify-center relative  max-h-60 md:max-h-[initial]   md:w-1/2 overflow-hidden  border-t md:border-none border-green">
            <div class="absolute top-1/2  left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                <svg class="animate-spin h-8 w-8 rounded-full bg-transparent border border-transparent  border-r-green border-t-green" viewBox="0 0 24 24"></svg>
            </div>
            <img data-parallax data-speed='-0.15' class="paralax-img max-w-none w-full relative md:absolute h-auto" src="/img/bottles.jpg" alt="picnic cloth ">
        </div>

    </div>
    <x-contact-footer></x-contact-footer>
</div>



@stop
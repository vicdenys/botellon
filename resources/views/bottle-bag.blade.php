@extends('layouts.master')

@section('content')


<div class=" mb-20  relative z-40 mx-auto text-xl  items-center  mt-16 md:mt-20">

    <div class="text-center py-4 border-b border-green ">
        <h1 class="font-victorianna-thin text-3xl  ">{{ __('bottle-bag.title') }}</h1>
    </div>

    <div class="px-8 py-8 md:py-12 bg-white">
        <p class="text-left grid  grid-cols-1 sm:grid-cols-2 gap-8 md:gap-12">
            <span class=" space-y-8">
                <span class="block">
                    {{ __('bottle-bag.1.1') }} </span>
                <span class="block">
                    {{ __('bottle-bag.1.2') }} </span>
                <span class="block">
                    {{ __('bottle-bag.1.3') }} </span>
            </span>
            <span class=" space-y-8">
                <span class="block">
                    {{ __('bottle-bag.1.4') }} </span>
                <span class="block">
                    {{ __('bottle-bag.1.5') }} </span>
            </span>
            </span>


        </p>
    </div>

    <div class=" flex min-h-[10rem] sm:min-h-[15rem] bg-white md:border-y border-green">
        <div data-module-parallax class="parallax-container flex  items-center justify-center relative max-h-40  sm:max-h-60 md:max-h-[initial]   w-full overflow-hidden  border-y md:border-none border-green">
            <img data-parallax data-speed='-0.25' class="paralax-img max-w-none w-[150%]  -mt-[15%]  lg:w-full relative md:absolute h-auto" src="/img/quay-antwerp.jpg" alt="quay antwerp images ">
        </div>
    </div>

    <div class="text-center py-4 border-b border-green ">
        <h1 class="font-victorianna-thin text-3xl  ">{{ __('bottle-bag.content.title') }}</h1>
    </div>

    <div class=" md:flex   md:border-b border-green">
        <div class="px-8 py-8 md:py-12 space-y-4 bg-white md:w-1/2">
            <ul class=" space-y-4">
                <li class="flex gap-2">
                    <div class="w-[0.2rem] h-[0.2rem] bg-black mt-4"></div>
                    <span>
                        {{ __('bottle-bag.content.1') }}
                    </span>

                </li>
                <li class="flex gap-2">
                    <div class="w-[0.2rem] h-[0.2rem] bg-black mt-4"></div>
                    <span>
                        {{ __('bottle-bag.content.2') }}
                    </span>

                </li>
                <li class="flex gap-2">
                    <div class="w-[0.2rem] h-[0.2rem] bg-black mt-4"></div>
                    <span>
                        {{ __('bottle-bag.content.3') }}
                    </span>

                </li>
                <li class="flex gap-2">
                    <div class="w-[0.2rem] h-[0.2rem] bg-black mt-4"></div>
                    <span>
                        {{ __('bottle-bag.content.4') }}
                    </span>

                </li>
                <li class="flex gap-2">
                    <div class="w-[0.2rem] h-[0.2rem] bg-black mt-4"></div>
                    <span>
                        {{ __('bottle-bag.content.5') }}
                    </span>

                </li>
                <li class="flex gap-2">
                    <div class="w-[0.2rem] h-[0.2rem] bg-black mt-4"></div>
                    <span>
                        {{ __('bottle-bag.content.6') }}
                    </span>

                </li>
            </ul>

            <p class="text-right space-y-4">
                <span class="block">
                    {{ __('bottle-bag.content.7') }} </span>
                <span class="block">
                    {{ __('bottle-bag.content.8') }} </span>
                <span class="block">
                    {{ __('bottle-bag.content.9') }} </span>
                <span class="block">
            </p>
        </div>
        <div data-module-parallax class="parallax-container flex  items-center justify-center relative  max-h-60 md:max-h-[initial]   md:w-1/2 overflow-hidden  border-y md:border-none border-green">
            <img data-parallax data-speed='-0.15' class="paralax-img max-w-none w-[150%] md:w-[200%]  lg:w-[150%] relative md:absolute h-auto" src="/img/picnic-cloth.jpg" alt="picnic cloth ">
        </div>

    </div>

    <div class="text-center py-4 px-12 md:px-0  border-green ">
        <h1 class="font-victorianna-thin text-3xl  ">{{ __('bottle-bag.end') }}</h1>
    </div>





    <x-contact-footer></x-contact-footer>
</div>



@stop
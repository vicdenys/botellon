@extends('layouts.master', ['title' => 'Menu'])

@section('content')


<div id="menu-container" class=" pb-16 md:pb-20  relative z-40 mx-auto text-xl  items-center  mt-[4.25rem] md:mt-20">
   @if( count($activeFile) )
   <div data-hover-btn id="menuTopSection" class="fixed w-screen left-0 z-50 top-16 bg-white md:top-20  text-center border-b border-green py-8 md:py-16">
      <h1 id="menuTopSectionText" class="font-victorianna-thin text-green text-3xl mb-4 hidden md:block pointer-events-none">{{ __('menu.curious') }}</h1>
      <a data-hover-btn class="bg-green hover:bg-green/95 hover:scale-105 transition-transform text-white  border border-white inline-block   rounded-full font-victorianna-thin text-xl px-6 py-3" href="/menu-files/{{ $activeFile[0]->title }}" target="_blank">{{ __('menu.seemenu') }}</a>
   </div>
   @endif


   <div id="menu-content" class="text-left  {{ count($activeFile) ? 'mt-[11.35rem] md:mt-[19.5rem]' : ''}} flex-wrap flex-wrap-reverse flex md:grid grid-cols-2  lg:gap-8 items-center   overflow-hidden border-green ">
      <div class="px-8 w-full md:w-auto pb-8 md:pt-12 text-center md:text-left md:pl-8 transform translate-y-8 md:transform-none col-span-2 md:col-span-1">

         <p class="font-bazovy">
            <span class="block mb-4">
               {{ __('menu.0.title')  }}
            </span>
            <span class="block mb-4">
               {{ __('menu.0.1') }}
            </span>
            <span class="block mb-4">
               {{ __('menu.0.2') }} </span>
            <span class="block ">

         </p>
      </div>

      <div id="bottleCanvasContainer" class="col-span-2 w-full border-b md:border-none md:mb-0 md:w-auto md:col-span-1 border-green z-30 h-60 md:h-96 top-0 left-0 relative">
         <div id="loadingspinner" class="absolute top-1/2  left-1/2 transform -translate-x-1/2 -translate-y-1/2">
            <svg class="animate-spin h-8 w-8 rounded-full bg-transparent border border-transparent  border-r-green border-t-green" viewBox="0 0 24 24"></svg>
         </div>
         <canvas id="bottleCanvas" class="menuCanvas w-full h-full" width="100%" height="100%"></canvas>
      </div>
   </div>

   <div class="text-center  py-4 border-y border-green ">
      <h1 class="font-victorianna-thin text-3xl  ">BRUNCH</h1>
   </div>
   <div class=" md:flex  md:flex-row-reverse md:border-b border-green">
      <div class="px-8 py-8 md:py-12 bg-white md:w-1/2">
         <p class="font-bazovy">
            <span class="block mb-4">
               {{ __('menu.1.1') }}
            </span>
            <span class="block mb-4">
               {{ __('menu.1.2') }} </span>
            <span class="block ">
               {{ __('menu.1.3') }} </span>
            <span class="block">
               {{ __('menu.1.4') }} </span>

         </p>
      </div>
      <div data-module-parallax class="parallax-container flex  items-center justify-center relative  max-h-60 md:max-h-[initial]   md:w-1/2 overflow-hidden  border-y md:border-none border-green">
         <div class="absolute top-1/2  left-1/2 transform -translate-x-1/2 -translate-y-1/2">
            <svg class="animate-spin h-8 w-8 rounded-full bg-transparent border border-transparent  border-r-green border-t-green" viewBox="0 0 24 24"></svg>
         </div>
         <img data-parallax data-speed='-0.15' class="paralax-img max-w-none w-full relative md:absolute h-auto " src="/img/brunch-botellon.jpeg" alt="brunch images ">
      </div>

   </div>


   <div class="px-8 py-8 md:py-12 bg-white">
      <p class="text-center">
         <span class="block mb-4">
            {{ __('menu.2.1') }} </span>
         <span class="block ">
            {{ __('menu.2.2') }} </span>
         <span class="block ">
            {{ __('menu.2.2.0') }} </span>
         <span class="block mb-4">
            {{ __('menu.2.2.1') }} </span>
         <span class="block">
            {{ __('menu.2.3') }} </span>
         <span class="block mb-4">
            {{ __('menu.2.3.0') }} </span>
         <span class="block mb-4">
            {{ __('menu.2.4') }} </span>
         <span class="block ">
            {{ __('menu.2.5') }}
         </span>
         <span>
            {{ __('menu.2.5.1') }} </span>
         @if(App::getLocale() != 'en')
         <span class="block ">
            {{ __('menu.2.6') }}
         </span>
         @endif


      </p>
   </div>

   <div class="md:flex  md:flex-row-reverse md:border-y border-green">
      <div data-module-parallax class="parallax-container flex  items-center justify-center relative  max-h-60 md:max-h-[initial]   md:w-1/2 overflow-hidden  border-y md:border-none border-green">
         <div class="absolute top-1/2  left-1/2 transform -translate-x-1/2 -translate-y-1/2">
            <svg class="animate-spin h-8 w-8 rounded-full bg-transparent border border-transparent  border-r-green border-t-green" viewBox="0 0 24 24"></svg>
         </div>
         <img data-parallax data-speed='-0.15' class="paralax-img max-w-none w-[150%] md:w-[200%]  lg:w-[150%] relative md:absolute h-auto" src="/img/apero-botellon.jpeg" alt="apero images ">
      </div>

      <div class="px-8 py-8 md:py-12 bg-white md:w-1/2">
         <p class="font-bazovy">
            <span class="block mb-4">
               {{ __('menu.3.1') }} </span>
            <span>
               {{ __('menu.3.2') }} </span>
         </p>
      </div>

   </div>



   <div id="bottleTrigger" class="text-center py-4 border-y md:border-y-0 md:border-b border-green  ">
      <h1 class="font-victorianna-thin text-3xl ">{{ __('menu.aperofrom15') }}</h1>
   </div>

   <div class="px-8 py-8 md:py-12 md:text-center md:flex md:justify-center  bg-white">
      <p class="font-bazovy max-w-xl">
         <span class="block mb-4">
            {{ __('menu.4.1') }} </span>
         <span class="block mb-4">
            {{ __('menu.4.1.5') }} </span>
         <span class="block mb-4">
            {{ __('menu.4.2') }} </span>
      </p>
   </div>

   <x-contact-footer></x-contact-footer>

</div>




@stop
@extends('layouts.master')

@section('content')


<div id="menu-container" class=" mb-20  relative z-40 mx-auto text-xl  items-center  mt-[4.25rem] md:mt-20">
   <div id="menuTopSection" class="sticky z-50 top-[3.75rem] bg-white md:top-20  text-center border-b border-green py-8 md:py-16">
      <h1 id="menuTopSectionText" class="font-victorianna-thin text-3xl mb-4 hidden md:block">{{ __('menu.curious') }}</h1>
      <a data-hover-btn class="bg-green hover:bg-green/95 text-white  border border-green inline-block   rounded-full font-victorianna-thin text-xl px-6 py-3" href="/menu-files/{{ $activeFile->title }}" target="_blank">{{ __('menu.seemenu') }}</a>
   </div>

   <div class="text-left flex flex-row-reverse items-center  border-b overflow-hidden border-green ">
      <div class="w-1/2 pl-8 ">
         <h1 class="font-victorianna-thin text-3xl w-1/2 ">Pick your bottle</h1>
         <h1 class="text-2xl w-1/2 ">here you get some more information about the bottle</h1></h1>
      </div>
      
      <div id="bottleCanvasContainer" class=" border-green w-1/2 z-30 h-96 top-0 left-0 relative">
         <canvas id="bottleCanvas" class="menuCanvas w-full h-full" width="100%" height="100%"></canvas>
      </div>
   </div>


   <div class="text-center py-4 border-b border-green ">
      <h1 class="font-victorianna-thin text-3xl  ">Every day brunch?</h1>
   </div>
   <div class=" md:flex  md:flex-row-reverse md:border-b border-green">
      <div class="px-8 py-8 md:py-12 bg-white md:w-1/2">
         <p class="font-bazovy">
            <span class="block mb-8">
               {{ __('menu.1.1') }}
            </span>
            <span class="block mb-8">
               {{ __('menu.1.2') }} </span>
            <span class="block ">
               {{ __('menu.1.3') }} </span>
            <span class="block">
               {{ __('menu.1.4') }} </span>

         </p>
      </div>
      <div data-module-parallax class="parallax-container max-h-48 sm:max-h-72 relative  md:max-h-[24rem] md:w-1/2 overflow-hidden  border-y md:border-none border-green">
         <img data-parallax data-speed='-0.15' class="paralax-img relative md:absolute   md:w-[120%]  w-full" src="/img/brunch-botellon.jpeg" alt="brunch images ">
      </div>

   </div>


   <div class="px-8 py-8 md:py-12 bg-white">
      <p class="text-center">
         <span class="block mb-8">
            {{ __('menu.2.1') }} </span>
         <span class="block ">
            {{ __('menu.2.2') }} </span>
         <span class="block mb-8">
            {{ __('menu.2.2.1') }} </span>
         <span class="block">
            {{ __('menu.2.3') }} </span>
         <span class="block mb-8">
            {{ __('menu.2.3.1') }} </span>
         <span class="block mb-8">
            {{ __('menu.2.4') }} </span>
         <span class="block ">
            {{ __('menu.2.5') }}
         </span>
         <span>
            {{ __('menu.2.5.1') }} </span>

      </p>
   </div>

   <div class="md:flex  md:flex-row-reverse md:border-y border-green">
      <div data-module-parallax class="parallax-container max-h-48 sm:max-h-72 md:w-1/2 relative md:max-h-max overflow-hidden  border-y md:border-none border-green">
         <img data-parallax data-speed='-0.15' class="paralax-img w-full md:absolute   md:w-[120%] relative" src="/img/apero-botellon.jpeg" alt="apero images ">
      </div>

      <div class="px-8 py-8 md:py-12 bg-white md:w-1/2">
         <p class="font-bazovy">
            <span class="block mb-8">
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
         <span class="block mb-8">
            {{ __('menu.4.1') }} </span>
         <span class="block mb-8">
            {{ __('menu.4.2') }} </span>
         <span>
            {{ __('menu.4.3') }} </span>
      </p>
   </div>

   <x-contact-footer></x-contact-footer>

</div>




@stop
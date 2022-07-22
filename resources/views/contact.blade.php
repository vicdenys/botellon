@extends('layouts.master')

@section('content')


<div class=" mb-20  relative z-40 mx-auto text-xl  items-center  mt-16 md:mt-20">
   <div class="text-center py-4 border-b border-green md:hidden ">
      <h1 class="font-victorianna-thin text-3xl  ">contact</h1>
   </div>

   <div class=" md:flex  border-b border-green">

      <div data-module-parallax class="parallax-container max-h-48 sm:max-h-72 relative  md:max-h-[24rem] md:w-1/2 overflow-hidden  border-y md:border-none border-green">
         <img data-parallax data-speed='-0.15' class="paralax-img relative md:absolute  -mt-[60%]  md:w-[120%]  w-full" src="/img/bottle-rose.jpeg" alt="picnic cloth ">
      </div>
      <div class="px-8 py-8 md:py-12 space-y-4 bg-white md:w-1/2">
         <p class="text-left space-y-4">
            <span class="block">
               {{ __('contact.1.1') }} </span>
            <span class="block">
               {{ __('contact.1.2') }} </span>
            <span class="block">
               {{ __('contact.1.3') }} </span>
            <span class="block">
               {{ __('contact.1.4') }} </span>
            <span class="block">
               {{ __('contact.1.5') }} </span>
         </p>
      </div>

   </div>

   <div class="text-center py-4 border-b border-green ">
      <h1 class="font-victorianna-thin text-3xl  ">{{ __('contact.title') }}</h1>
   </div>

   <div class=" md:flex    md:border-b border-green">
      <div class="px-8 py-8 md:py-12 space-y-4 bg-white md:w-1/2">
         <p class="text-center md:text-left space-y-4">
            <span class="block">
               Botellón Antwerp
               <br>
               Waalsekaai 45a
               <br>
               2000 {{ __('contact.3.1') }}

            </span>
            <span class="block">
               {{ __('contact.3.2') }} BE0673 935 115</span>
            <span class="block">
               <a data-hover href="mailto:info@botellonantwerp.be">info@botellonantwerp.be</a> </span>
            <span class="block">
               03/216.31.60 </span>
         </p>
      </div>
      <div  class=" max-h-48 sm:max-h-72 relative  md:max-h-[24rem] md:w-1/2 overflow-hidden  border-y md:border-none border-green">
      <iframe src="https://snazzymaps.com/embed/409585" width="100%" height="100%" style="border:none;"></iframe>
      </div>

   </div>

   <div class="text-center py-4 border-b border-green ">
      <h1 class="font-victorianna-thin text-3xl  ">{{ __('contact.title.1') }}</h1>
   </div>


   <div class="px-8  border-green bg-white">
      <div class="  py-8  md:py-12  bg-white ">
         <p class="text-center ">
            <span class="block">
               {{ __('contact.2.1') }} </span>
            <span class="block  mb-4">
               {{ __('contact.2.2') }} </span>
            <span class="block ">
               {{ __('contact.2.3') }} </span>
            <span class="block mb-4">
               {{ __('contact.2.4') }} </span>
         </p>
      </div>
   </div>

   <x-contact-footer></x-contact-footer>
</div>



@stop
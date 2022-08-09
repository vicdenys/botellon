@extends('layouts.master', ['title' => 'Contact'])

@section('content')


<div class="pb-16 md:pb-20  relative z-40 mx-auto text-xl  items-center  mt-16 md:mt-20">
   <div class="text-center py-4 border-b border-green md:hidden ">
      <h1 class="font-victorianna-thin text-3xl  ">contact</h1>
   </div>

   <div class=" md:flex  border-b border-green">

      <div data-module-parallax class="parallax-container flex  items-center justify-center relative  max-h-60 md:max-h-[initial]   md:w-1/2 overflow-hidden  border-y md:border-none border-green">
         <div class="absolute top-1/2  left-1/2 transform -translate-x-1/2 -translate-y-1/2">
            <svg class="animate-spin h-8 w-8 rounded-full bg-transparent border border-transparent  border-r-green border-t-green" viewBox="0 0 24 24"></svg>
         </div>
         <img data-parallax data-speed='-0.15' class="paralax-img max-w-none w-[150%] md:w-[200%]  lg:w-[150%] relative md:absolute h-auto" src="/img/bottle-rose.jpeg" alt="picnic cloth ">
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
      <div class=" max-h-48 sm:max-h-72 relative  md:max-h-[24rem] md:w-1/2 overflow-hidden  border-y md:border-none border-green">
         <div class="absolute z-10 top-1/2  left-1/2 transform -translate-x-1/2 -translate-y-1/2">
            <svg class="animate-spin h-8 w-8 rounded-full bg-transparent border border-transparent  border-r-green border-t-green" viewBox="0 0 24 24"></svg>
         </div>
         <iframe src="https://snazzymaps.com/embed/409585" class="relative z-20" width="100%" height="100%" style="border:none;"></iframe>
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
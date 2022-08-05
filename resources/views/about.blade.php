<div id="AboutContainer" class="  snap-always snap-start relative z-[63] ">
    @include('layouts.navigation-guest', [
    'isDarkTheme' => false,
    'isAboutNav' => true
    ])

    <div class=" pb-20 pb-[calc(5rem+env(safe-area-inset-top)+env(safe-area-inset-bottom))] bg-white  relative z-40 mx-auto text-xl  items-center ">


        <div class="text-center py-4 border-b border-green ">
            <h1 class="font-victorianna-thin text-3xl  ">{{ __('about.title') }}</h1>
        </div>

        <div class=" md:flex  border-b border-green">
            <div class=" px-8 py-8 md:py-12 space-y-4 bg-white md:w-1/2 ">
                <p class="text-left">
                    <span class="block mb-4">
                        {{ __('about.1.1') }} </span>
                    <span class="block mb-4">
                        {{ __('about.2.1') }} </span>
                <ul class=" space-y-4">
                    <li class="flex gap-2">
                        <div class="w-[0.2rem] h-[0.2rem] bg-black mt-4"></div>
                        <span>
                            {{ __('about.2.2.1') }}
                        </span>

                    </li>
                    <li class="flex gap-2">
                        <div class="w-[0.2rem] h-[0.2rem] bg-black mt-4"></div>
                        <span>
                            {{ __('about.2.2.2') }}
                        </span>

                    </li>
                    <li class="flex gap-2">
                        <div class="w-[0.2rem] h-[0.2rem] bg-black mt-4"></div>
                        <span>
                            {{ __('about.2.2.3') }}
                        </span>

                    </li>
                    <li class="flex gap-2">
                        <div class="w-[0.2rem] h-[0.2rem] bg-black mt-4"></div>
                        <span>
                            {{ __('about.2.2.4') }}
                        </span>

                    </li>
                    <li class="flex gap-2">
                        <div class="w-[0.2rem] h-[0.2rem] bg-black mt-4"></div>
                        <span>
                            {{ __('about.2.2.5') }}
                        </span>

                    </li>
                    <li class="flex gap-2">
                        <div class="w-[0.2rem] h-[0.2rem] bg-black mt-4"></div>
                        <span>
                            {{ __('about.2.2.6') }}
                        </span>

                    </li>
                    <li class="flex gap-2">
                        <div class="w-[0.2rem] h-[0.2rem] bg-black mt-4"></div>
                        <span>
                            {{ __('about.2.2.7') }}
                        </span>

                    </li>
                </ul>
                </p>
            </div>
            <div data-module-parallax class="parallax-container flex  items-center justify-end relative  max-h-60 md:max-h-[initial]   md:w-1/2 overflow-hidden  border-t md:border-none border-green">
                <img data-parallax data-speed='-0.15' class="paralax-img max-w-none w-[180%] md:w-[200%] md:-[10%] mt-[40%]  lg:w-[150%]  relative md:absolute h-auto" src="/img/sarah-en-ivo.jpg" alt="Sarah and Ivo ">
            </div>

        </div>
        <div class="text-center py-4 border-b border-green ">
            <h1 class="font-victorianna-thin text-3xl  ">{{ __('about.title.1') }}</h1>
        </div>

        <div class="px-8 py-8 md:py-12 bg-white">
            <p class="text-left columns-1 sm:columns-2 gap-8 md:gap-12">
                <span class="block mb-4">
                    {{ __('about.3.1') }} </span>
                <span class="block mb-4">
                    {{ __('about.3.2') }} </span>
                <span class="block mb-4">
                    {{ __('about.3.3') }} </span>
                <span class="block mb-4">
                    {{ __('about.3.4') }}</span>
                <span class="block text-right">
                    {{ __('about.3.5') }} </span>


            </p>
        </div>



        <x-contact-footer></x-contact-footer>
    </div>


    <x-footer-overlay :isDarkTheme="isset($isDarkTheme)" :isAboutNav="true"></x-footer-overlay>

</div>
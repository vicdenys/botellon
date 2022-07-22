<nav class=" block z-[60] fixed top-0 w-screen border-b  {{ $isDarkTheme ? 'border-b-white ' : 'border-b-green bg-white' }}">




    <ul class="w-full md:py-6 py-4 px-8 flex items-center justify-between">
        <li class="z-[60] relative">
            <div class="w-16  flex items-center">
                @if($isDarkTheme)
                <a class="lg:fill-white py-2 ' " href="/" :class="[ menuOpen ? 'fill-green delay-300':'fill-white  delay-300 ' ]" data-hover>
                    <object class=" pointer-events-none" data="" type="" aria-label="Botellon logo & home page link">
                        <x-application-logo />
                    </object>
                </a>
                @else
                <a class="lg:fill-green py-2" href="/"" data-hover>
                    <object class="pointer-events-none" data="" type="" aria-label="Botellon logo & home page link">
                        <x-application-logo />
                    </object>
                </a>
                @endif
               
            </div>
        </li>

        <li class=" z-[60] fixed lg:relative w-screen h-[calc(100%-15rem)] top-20 left-0 lg:w-auto lg:h-auto lg:top-auto lg:left-auto lg:inline-block font-victorianna-thin text-white text-[1.35rem]" :class="[ menuOpen ? 'visible':'invisible lg:visible' ]">
                    <ul class="lg:flex text-4xl lg:text-xl   pt-12 lg:pt-0 text-green text-center items-center gap-8 {{ $isDarkTheme ? 'lg:text-white' : 'lg:text-green' }}">
                        <li class="mb-4 lg:mb-0 transform transition-all" :class="[ menuOpen ? 'opacity-100 translate-y-0 delay-1000':'opacity-0 translate-y-2 lg:opacity-100 lg:translate-y-0 ' ]">
                            <a :class="[ menuOpen ? 'relative':'hidden lg:block ' ]" class="{{  request()->is('menu') ? 'font-victorianna-thin-italic ' : '' }} " href="/menu" data-hover>{{ __('nav.menu') }}</a>
                        </li>
                        <li class="mb-4 lg:mb-0  transform transition-all" :class="[ menuOpen ? 'opacity-100 translate-y-0 delay-[1.1s]':'opacity-0 translate-y-2 lg:opacity-100 lg:translate-y-0  ' ]">
                            <a :class="[ menuOpen ? 'relative':'hidden lg:block ' ]" class="{{  request()->is('bottle-bag') ? 'font-victorianna-thin-italic ' : '' }}" href="/bottle-bag" data-hover>{{ __('nav.bottle-bag') }}</a>
                        </li>
                        <!--
                        <li class="mb-4 lg:mb-0  transform transition-all" :class="[ menuOpen ? 'opacity-100 translate-y-0 delay-[1.2s]':'opacity-0 translate-y-2 lg:opacity-100 lg:translate-y-0  ' ]">
                            <a :class="[ menuOpen ? 'relative':'hidden lg:block ' ]" class="{{  request()->is('our-makers') ? 'font-victorianna-thin-italic ' : '' }}" href="/our-makers" data-hover>{{ __('nav.our-makers') }}</a>
                        </li>
                        -->
                        <li class="mb-4 lg:mb-0 transform transition-all" :class="[ menuOpen ? 'opacity-100 translate-y-0 delay-[1.3s]':'opacity-0 translate-y-2 lg:opacity-100 lg:translate-y-0  ' ]">
                            <a :class="[ menuOpen ? 'relative':'hidden lg:block ' ]" class="{{  request()->is('museum') ? 'font-victorianna-thin-italic ' : '' }}" href="/museum" data-hover>{{ __('nav.museum') }}</a>
                        </li>
                        <li class="mb-4 lg:mb-0 transform transition-all" :class="[ menuOpen ? 'opacity-100 translate-y-0 delay-[1.4s]':'opacity-0 translate-y-2 lg:opacity-100 lg:translate-y-0 ' ]">
                            <a :class="[ menuOpen ? 'relative':'hidden lg:block ' ]" class="{{  request()->is('events') ? 'font-victorianna-thin-italic ' : '' }}" href="/events" data-hover>{{ __('nav.events') }}</a>
                        </li>
                        <li class="mb-4 lg:mb-0 transform transition-all" :class="[ menuOpen ? 'opacity-100 translate-y-0 delay-[1.5s]':'opacity-0 translate-y-2 lg:opacity-100 lg:translate-y-0  ' ]">
                            <a :class="[ menuOpen ? 'relative':'hidden lg:block ' ]" class="{{  request()->is('contact') ? 'font-victorianna-thin-italic ' : '' }}" href="/contact" data-hover>{{ __('nav.contact') }}</a>
                        </li>
                    </ul>
        </li>


        <!-- RESPONSIVE NAVIGATION -->
        @if($isDarkTheme)
        <li class="flex z-[60] items-center lg:hidden w-6 h-7 " @click="menuOpen = !menuOpen">
            <div class=" w-full relative transition-all " :class="[ menuOpen ? 'h-px delay-500': 'h-2 delay-300 hover:h-3' ]">
                <div class="w-full h-px transition-all bg-white  origin-center delay-500" :class="[ menuOpen ? 'transform rotate-45 bg-green delay-500':'delay-300 ' ]"></div>
                <div class="w-full h-px transition-all absolute bg-white bottom-0 origin-center delay-500" :class="[ menuOpen ? 'transform -rotate-45 bg-green delay-500':'delay-300' ]"></div>
            </div>

        </li>
        @else
        <li class="flex z-[60] items-center lg:hidden w-6 h-7 " @click="menuOpen = !menuOpen">
            <div class=" w-full relative transition-all " :class="[ menuOpen ? 'h-px delay-500': 'h-2 delay-300 hover:h-3' ]">
                <div class="w-full h-px transition-all bg-green  origin-center delay-500" :class="[ menuOpen ? 'transform rotate-45 delay-500':'delay-300 ' ]"></div>
                <div class="w-full h-px transition-all absolute bg-green bottom-0 origin-center delay-500" :class="[ menuOpen ? 'transform -rotate-45  delay-500':'delay-300' ]"></div>
            </div>

        </li>
        @endif



    </ul>

    <div class=" fixed z-50 h-screen top-0 left-0 bg-white transition-all duration-500 ease-in-out " :class=" [ menuOpen ? 'w-screen delay-200' :'w-0 ' ]"></div>
        <!-- Line under -->
        <div class="fixed z-[60] top-[3.75rem] left-0 bg-green h-px transition-all duration-500" :class="[ menuOpen ? ' w-screen delay-700':'w-0 ' ]"></div>


</nav>
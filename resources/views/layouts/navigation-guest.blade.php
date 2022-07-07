<nav class=" block z-[60] fixed top-0 w-screen border-b border-b-white" >




    <ul class="w-full md:py-6 py-4 px-8 flex items-center justify-between">
        <li class="z-[60] relative">
            <div class="w-16  flex items-center">
                <a class="lg:fill-white" href="/" :class="[ menuOpen ? 'fill-green delay-300':'fill-white  delay-300 ' ]">
                    <x-application-logo />
                </a>
            </div>
        </li>

        <li class="z-[60] fixed lg:relative w-screen h-[calc(100%-15rem)] top-20 left-0 lg:w-auto lg:h-auto lg:top-auto lg:left-auto lg:inline-block font-victorianna-thin text-white text-[1.35rem]">
            <ul class="lg:flex text-4xl lg:text-xl  lg:text-white pt-12 lg:pt-0 text-green text-center items-center gap-8">
                <li class="mb-4 lg:mb-0 transform transition-all"  :class="[ menuOpen ? 'opacity-100 translate-y-0 delay-1000':'opacity-0 translate-y-2 lg:opacity-100 lg:translate-y-0 ' ]">
                    <a href="/menu">{{ __('nav.menu') }}</a>
                </li>
                <li class="mb-4 lg:mb-0  transform transition-all" :class="[ menuOpen ? 'opacity-100 translate-y-0 delay-[1.1s]':'opacity-0 translate-y-2 lg:opacity-100 lg:translate-y-0  ' ]">
                    <a href="/bottle-bag">{{ __('nav.bottle-bag') }}</a>
                </li>
                <li class="mb-4 lg:mb-0  transform transition-all" :class="[ menuOpen ? 'opacity-100 translate-y-0 delay-[1.2s]':'opacity-0 translate-y-2 lg:opacity-100 lg:translate-y-0  ' ]">
                    <a href="/our-makers">{{ __('nav.our-makers') }}</a>
                </li>
                <li class="mb-4 lg:mb-0 transform transition-all" :class="[ menuOpen ? 'opacity-100 translate-y-0 delay-[1.3s]':'opacity-0 translate-y-2 lg:opacity-100 lg:translate-y-0  ' ]">
                    <a href="/museum">{{ __('nav.museum') }}</a>
                </li>
                <li class="mb-4 lg:mb-0 transform transition-all" :class="[ menuOpen ? 'opacity-100 translate-y-0 delay-[1.4s]':'opacity-0 translate-y-2 lg:opacity-100 lg:translate-y-0 ' ]">
                    <a href="/events">{{ __('nav.events') }}</a>
                </li>
                <li class="mb-4 lg:mb-0 transform transition-all" :class="[ menuOpen ? 'opacity-100 translate-y-0 delay-[1.5s]':'opacity-0 translate-y-2 lg:opacity-100 lg:translate-y-0  ' ]">
                    <a href="/contact">{{ __('nav.contact') }}</a>
                </li>
            </ul>
        </li>


        <!-- RESPONSIVE NAVIGATION -->

        <li class="flex z-[60] items-center lg:hidden w-6 h-7 " @click="menuOpen = !menuOpen">
            <div class=" w-full relative transition-all " :class="[ menuOpen ? 'h-px delay-500': 'h-2 delay-300 hover:h-3' ]">
                <div class="w-full h-px transition-all bg-white  origin-center delay-500" :class="[ menuOpen ? 'transform rotate-45 bg-green delay-500':'delay-300 ' ]"></div>
                <div class="w-full h-px transition-all absolute bg-white bottom-0 origin-center delay-500" :class="[ menuOpen ? 'transform -rotate-45 bg-green delay-500':'delay-300' ]"></div>
            </div>

        </li>


        <div class="fixed z-50  h-screen top-0 left-0 bg-white transition-all duration-500 ease-in-out " :class="[ menuOpen ? 'w-screen delay-200':'w-0 ' ]"></div>
        <!-- Line under -->
        <div class="fixed z-[60] top-[3.75rem] left-0 bg-green h-px transition-all duration-500" :class="[ menuOpen ? 'w-screen delay-700':'w-0 ' ]"></div>


    </ul>

</nav>
<div class=" fixed z-[60] bottom-0 left-0 w-screen lg:border-t border-t-white">
    <ul class="py-6 w-full lg:px-8 text-white lg:flex items-center justify-between">
        <li class="uppercase relative gap-4 flex text-lg text-center justify-center  py-3 lg:py-0 font-light tracking-tighter  opacity-0 transform translate-y-full animate-pop-up"
         style="animation-delay: 0.3s;">
            @foreach (Config::get('languages') as $lang => $language)
            <a class="  md:inline-block text-green transition-all lg:text-white {{ $lang == App::getLocale() ? 'border border-green lg:border-white rounded-[100%] px-2' : ''}}" href="{{ route('lang.switch', $lang) }}" 
                :class="[ menuOpen ? ' opacity-700 delay-1000':'opacity-0 delay-100 lg:opacity-100 ' ]">
                {{$language}}
            </a>
            @endforeach
            <div class="absolute w-full h-full top-0 left-0 border-y border-y-green lg:border-none transition-all duration-500" :class="[ menuOpen ? 'w-full delay-1000':'w-0 delay-100' ]"></div>
        </li>
        <li class="text-xl text-right px-8 pt-6 lg:pt-0 lg:px-0 lg:border-none border-t border-t-white  opacity-0 transform translate-y-full animate-pop-up" :class="[ menuOpen ? 'text-green delay-500':'text-white delay-100' ]"
        style="animation-delay: 0.4s;">
            {{ __('home.reservation')}}
        </li>
    </ul>
</div>
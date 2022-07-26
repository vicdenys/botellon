<div class=" fixed z-[60] bottom-0 left-0 w-screen lg:border-t  {{ $isDarkTheme ? 'border-t-green lg:border-t-white' : 'border-t-green lg:bg-white' }}">
    <ul class="pt-6 lg:py-6 w-full lg:px-8  text-white lg:flex items-center justify-between">
        <li class="uppercase relative gap-4 flex text-lg text-center justify-center  py-3 lg:py-0 font-light tracking-wider  opacity-0 transform translate-y-full animate-pop-up" style="animation-delay: 0.3s;" :class="[ menuOpen ? 'visible':'invisible lg:visible' ]">

            <div class="absolute w-full h-full top-0 left-0 lg:border-none transition-all duration-500 {{ $isDarkTheme ? ' border-y border-y-green' : ' border-t border-y-green '}}" :class="[ menuOpen ? 'w-full delay-1000':'w-0 delay-100' ]"></div>

            @foreach (Config::get('languages') as $lang => $language)
            <a class="z-50 leading-[1.8rem]  md:inline-block text-base  transition-all  {{ $isDarkTheme ? 'text-green lg:text-white border-green lg:border-white' : 'text-green lg:text-green border-green lg:border-green' }} {{ $lang == App::getLocale() ? 'border  rounded-[100%] px-2' : ''}}" href="{{ route('lang.switch', $lang) }}" :class="[ menuOpen ? ' opacity-700 delay-1000':'opacity-0 delay-100 lg:opacity-100 ' ]" {{ $lang == App::getLocale() ? '' : ' data-hover'}}>
                {{$language}}
            </a>
            @endforeach
        </li>

        @if($isDarkTheme)
        <li class="text-xl text-right pb-6 lg:pb-0 px-8 pt-6 lg:pt-0 lg:px-0 lg:border-none border-t border-t-white  opacity-0 transform translate-y-full animate-pop-up" :class="[ menuOpen ? 'text-green delay-500':'text-white delay-100' ]" style="animation-delay: 0.4s;">
            <a  href="https://reservations.tablebooker.com/?restaurantId=51380481&obmPrimaryColor=%23063e33&obmFontColor=%23f6eee3&lang={{ Config::get('app.locale') }}" target="_blank"  class=" pb-1" data-hover>{{ __('home.reservation')}}</a>
        </li>
        @else
        <li class="text-xl bg-white pb-6 lg:pb-0  text-right px-8 pt-6 lg:pt-0 lg:px-0 lg:border-none border-t border-t-green  opacity-0 transform translate-y-full animate-pop-up text-green" :class="[ menuOpen ? 'border-green delay-500':'' ]" style="animation-delay: 0.4s;">
            <a href="https://reservations.tablebooker.com/?restaurantId=51380481&obmPrimaryColor=%23063e33&obmFontColor=%23f6eee3&lang={{ Config::get('app.locale') }}" target="_blank" class="pb-1" data-hover >{{ __('home.reservation')}}</a>
        </li>
        @endif

    </ul>
</div>
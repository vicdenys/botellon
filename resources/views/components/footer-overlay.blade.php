<div class=" fixed z-50 bottom-0 left-0 w-screen ">
    <ul class="py-6 w-full px-8 text-white flex items-center justify-between">
        <li class="uppercase gap-4 flex text-lg font-light tracking-tighter">
            @foreach (Config::get('languages') as $lang => $language)
            <a class="{{ $lang == App::getLocale() ? 'border border-white rounded-[100%] px-2' : ''}}" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
            @endforeach
        </li>
        <li class="text-lg">{{ __('home.reservation')}}</li>
    </ul>
    <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
</div>
<nav class=" block w-screen border-b border-b-white">
    <ul class="w-full py-6 px-8 flex items-center justify-between">
        <li>
            <div class="w-16  flex items-center">
                <a class="fill-white" href="{{ route('dashboard') }}">
                    <x-application-logo />
                </a>
            </div>
        </li>
        <li class=" font-victorianna-thin text-white text-[1.35rem]">
            <ul class="flex items-center gap-8">
                <li>
                    <a href="#">{{ __('nav.menu') }}</a>
                </li>
                <li>
                    <a href="#">{{ __('nav.picknick-bag') }}</a>
                </li>
                <li>
                    <a href="#">{{ __('nav.our-makers') }}</a>
                </li>
                <li>
                    <a href="#">{{ __('nav.museum') }}</a>
                </li>
                <li>
                    <a href="#">{{ __('nav.events') }}</a>
                </li>
                <li>
                    <a href="#">{{ __('nav.contact') }}</a>
                </li>
            </ul>
        </li>
    </ul>

</nav>
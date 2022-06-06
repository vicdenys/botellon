@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'block font-medium text-white w-full placeholder-white/30 text-xl border-t-0 border-x-0 border-b border-b-white  bg-transparent  focus:border-b-4  focus:ring focus:ring-0 focus:border-b focus:border-b-white']) !!}>

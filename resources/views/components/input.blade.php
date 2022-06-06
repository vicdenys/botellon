@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => ' border-t-0 border-x-0 border-b border-b-white  bg-transparent  focus:border-b-4 focus:ring focus:ring-opacity-50']) !!}>

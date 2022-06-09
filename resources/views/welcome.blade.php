@extends('layouts.master')

@section('content')


<div class="  relative z-50 mx-auto items-center text-[1.5rem] ">
    <div class="w-full h-full flex  justify-center items-center">
        <div class="w-96 mt-[10%] fill-white">
            <h1>
                <x-application-logo></x-application-logo>
            </h1>
        </div>
    </div>
    <div class="block mx-auto py-8 mt-48 border-y border-y-white text-center font-victorianna-thin text-white text-6xl">
        <h2>
            Bottles and treats
        </h2>
    </div>
</div>


<div class="fixed w-screen z-40 h-screen top-0 left-0">
    <canvas id="bottleCanvas"class="w-full h-full"></canvas>
</div>

@stop
@extends('layouts.master')

@section('content')


<div id="menu-container" class=" mb-20  relative z-40 mx-auto text-xl  items-center  mt-[3.75rem] md:mt-[4.75rem] lg:mt-[4.75rem]">
   <div class="sticky z-50 top-[3.75rem] bg-white md:top-[4.75rem] lg:top-[4.75rem] text-center border-b border-green py-8">
      <a class="bg-green text-white rounded-full font-victorianna-thin text-xl px-6 py-3" href="/menu-files/{{ $activeFile->title }}" target="_blank">bekijk menukaart</a>
   </div>
   <div class="text-center py-4 border-b border-green">
      <h1 class="font-victorianna-thin text-3xl ">Every day brunch?</h1>
   </div>
   <div class="px-8 py-8">
      <p class="font-bazovy">
         Bij botellón kan het want brunch is ALTIJD een goed idee!
         <br><br>
         Van donderdag t.e.m. zondag voorzien wij een heerlijk lunch buffet met gezonde en minder ge- zonde ;) lekkernijen. Denk soep, stoofpotjes, sala- des, brood en beleg, patéekes, vers fruit, enz...
         <br><br>
         Last van keuzestress?
         <br>
         Dan neem je toch gewoon ALLES!
      </p>
   </div>
   <div class="parallax-container max-h-52 overflow-hidden  border-y border-green">
      <img class="paralax-img relative" src="/img/brunch-botellon.jpeg" alt="brunch images ">
   </div>

   <div class="px-8 py-8">
      <p class="text-center">
         Tussen 11u30 en 14u30 kan je komen opscheppen
         <br><br>
         Op donderdag en vrijdag
         <br>
         voor 19,5 euro per persoon
         <br><br>
         Op zaterdag en zondag
         <br>
         voor 21,5 euro per persoon
         <br><br>
         Koffie en thee krijg je er gewoon bij!
         <br><br>
         Dit dan aangevuld met een lekker flesje?
         <br>
         -OF COURSE-
      </p>
   </div>

   <div class="parallax-container max-h-52 overflow-hidden  border-y border-green">
      <img class="paralax-img relative" src="/img/apero-botellon.jpeg" alt="apero images ">
   </div>

   <div class="px-8 py-8">
      <p class="font-bazovy">
         Lekker eten, een (door ons weldoordacht) goed flesje wijn, parels of een niet zo veelvoorkomend biertje vergezeld van heerlijke muziek op de ach- tergrond in een leuke setting... Genieten komt bij ons op de eerste plaats.
         <br><br>
         Drink je liever 0%? Dan hebben we daar -uiter- aard- ook lekkere alternatieven voor. Kom ze maar snel ontdekken!
      </p>
   </div>

   <div class="text-center py-4 border-y border-green">
      <h1 class="font-victorianna-thin text-3xl ">Aperitief vanaf 15u!</h1>
   </div>

   <div class="px-8 py-8">
      <p class="font-bazovy">
         Na het buffet (vanaf 15u) kan je nog steeds komen genieten van een lekker flesje en is het apéro-tijd!
         <br><br>
         Wij zorgen voor de amuses en hapjes die gere- geld (receptiestijl) zullen passeren.
         <br><br>
         Dit minstens tot de zon ondergaat...
      </p>
   </div>

   <div class="text-center py-4 border-t border-green">
      <h1 class="font-victorianna-thin text-3xl ">footer</h1>
   </div>

</div>


@stop
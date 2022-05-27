<div  x-show="open" class="fixed  w-screen h-screen top-0 left-0  z-50">

    <div @click="open = false" class=" fixed w-screen h-screen bg-black/70 top-0 left-0 ">

    </div>
    <div class="fixed bg-white left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 p-6">
       
        {{ $slot }}
    </div>

</div>
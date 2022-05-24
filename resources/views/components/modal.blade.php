<div x-show="open"  class="fixed  w-screen h-screen top-0 left-0  z-50">
    <div @click="open = false" class=" fixed w-screen h-screen bg-black/70 top-0 left-0 " >

    </div>
    <div>
        {{ $slot }}
    </div>
    
</div>
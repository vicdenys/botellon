<div class=" w-[30rem]">

    <h1>upload PDF</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!--
                    <div>
                        <x-label for="email" :value="__('email')" />

                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </div>
                    <div class="mt-4">
                        <x-label for="password" :value="__('password')" />

                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    </div>
                    -->

        <!-- File -->
        <div class="text-center" x-data="{ files: null }">
            <label class=" relative border-gray-200 hover:bg-gray-100  text-center w-full block rounded  my-2 " :class="{  'h-72 p-3  cursor-pointer border-2': files === null }" for="customFile2">
                <input type="file" accept="application/pdf" class="opacity-0 w-full h-full z-50 absolute left-0 top-0" id="customFile2" x-on:change="files = Object.values($event.target.files).length > 0 ? Object.values($event.target.files) : null;">
                <div class=" w-full ">
                    <span x-show="!files" x-text="files ? 'bestand geselecteerd' : 'kies bestand of sleep het hier'" :class="{  'text-gray-700': files }"></span>
                    <div x-show="files" class="relative w-full text-left p-2 mt-4 border bg-gray-200 border-gray-200">
                        <div class="flex text-left">
                            <span x-text="files ? files.map(file => file.name).join(', '): ''" class="text-left" :class="{  'text-gray-700': files }"></span>
                        </div>
                        <button  x-show="files"  type="reset" @click="files = null" class="absolute  right-0 top-0 flex translate-x-1/2 -translate-y-1/2 bg-black  text-white w-4 h-4 align-center justify-center rounded-full">
                            <span class="absolute font-sans ">x</span>
                        </button>

                    </div>
                </div>

            </label>


        </div>



        <div class="flex items-center justify-end mt-4">


            <x-button class="ml-3">
                {{ __('bevestigen') }}
            </x-button>
        </div>
    </form>
</div>
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
            <label class="border-2 relative border-gray-200 hover:bg-gray-100 h-48 text-center p-3 w-full block rounded cursor-pointer my-2" for="customFile2">
                <input type="file" accept="application/pdf" class="opacity-0 w-full h-full absolute left-0 top-0" id="customFile2" x-on:change="files = Object.values($event.target.files)">
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                    <span x-text="files ? files.map(file => file.name).join(', ') : 'kies bestand of sleep het hier'"></span>
                    <button x-show="files" type="reset" @click="files = null" class="absolute flex bg-black  text-white w-4 h-4 align-center justify-center rounded-full">x</button>
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
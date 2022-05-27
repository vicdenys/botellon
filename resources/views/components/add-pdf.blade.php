<div class=" w-[30rem]">
    <form method="POST" id="pdfUploadForm" enctype="multipart/form-data" action="{{ route('upload-menu') }}" x-data="{ files: null }">
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



        <h1 class="mb-6" x-text="files ? 'bestand geselecteerd': 'pdf upload'"></h1>

        @if ($errors->any())
        <div class="alert alert-danger" x-show="!files">
            <ul class="bg-red-100 p-2 ">
                @foreach ($errors->all() as $error)
                <li class="text-red-900">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- File -->
        <div class="text-center">
            <label class=" relative bg-gray-50 border-gray-200 hover:bg-gray-100  text-center w-full block rounded  my-2 " :class="{  'h-72 p-3  cursor-pointer border-2': files === null }" for="customFile2">
                <input type="file" name="menuFile" maxlength="254" accept="application/pdf" required class="opacity-0 w-full h-full z-40 absolute left-0 top-0" id="customFile2" x-on:change="files = Object.values($event.target.files).length > 0 ? Object.values($event.target.files) : null;">
                <div class=" w-full relative  " :class="{  'z-50': files }">
                    <span x-show="!files" x-text="files ? 'bestand geselecteerd' : 'kies bestand of sleep het hier'" :class="{  'text-gray-700': files }"></span>
                    <div x-show="files" class="relative w-full text-left p-2 mt-4 border bg-gray-200 border-gray-200">
                        <div class="flex text-left">
                            <span x-text="files ? files.map(file => file.name).join(', '): ''" class="text-left" :class="{  'text-gray-700': files }"></span>
                        </div>
                        <button x-show="files" type="reset" @click="files = null" class="absolute p-1 box-content  right-0 top-0 flex translate-x-1/2 -translate-y-1/2 bg-black  text-white w-3 h-3 items-center justify-center rounded-full">
                            <span class="absolute font-sans text-xs w-2 fill-white ">
                                @svg('cross-icon.svg', '')
                            </span>
                        </button>

                    </div>
                </div>

            </label>

        </div>

        <!-- Make active Menu -->
        <div class="my-4">
            <div class="form-check" x-show="files">
                <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-black text-black checked:border-black focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" name="makeActiveCheckbox" value="MakeActiveCheckbox" id="MakeActiveCheckbox">
                <label class="form-check-label inline-block text-gray-800" for="MakeActiveCheckbox">
                    maak menu actief
                </label>
            </div>
        </div>



        <div class="flex items-center justify-end mt-4">



            <a @click="files = null; open = false; document.getElementById('pdfUploadForm').reset()" class="inline-flex cursor-pointer font-light items-center px-4 py-2 bg-gray-100 border border-transparent rounded-md text-black  hover:bg-gray-300 active:bg-gray-300 focus:outline-none focus:border-gray-300 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                annuleren
            </a>
            <x-button class="ml-3">
                {{ __('bevestigen') }}
            </x-button>
        </div>
    </form>
</div>
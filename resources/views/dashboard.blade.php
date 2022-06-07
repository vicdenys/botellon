<x-app-layout>

    <div x-data='{{ $errors->any() ? "{open: true}" : "{open: false}"  }}'>
        <x-slot name="header">
            <h2 class="font-semibold  text-gray-800 leading-tight">
                {{ __('dashboard') }}
            </h2>
        </x-slot>

        <div class="py-6">

            <div class="max-w-7xl mx-auto px-4 lg:px-8">
                @if (Session::has('success'))
                <div class="alert alert-danger mb-4 h-16  overflow-hidden animate-slide-up flex items-center w-full origin-top" >
                    <ul class="text-black mb-4  w-full bg-black  px-4 h-full flex items-center ">
                        
                        <li class="text-white">{{ Session::get('success') }}</li>
                        
                    </ul>
                </div>
                @endif

                @if(!$activeFile->count() && $files->count())

                <p class="  text-red-600 mb-4 border border-red-600 p-4">
                    There is no menu file active. To activate one press the 'make active' button on a file record.
                </p>

                @endif

                <x-button color='green' negative-color='white' @click="open = true" class="my-6">
                    {{ __('upload pdf') }}
                </x-button>
                <div class=" ">

                    <div class="">
                        
                        <x-files-table :files="$files"></x-files-table>
                    </div>
                </div>
            </div>
        </div>

        <x-modal name="pdfUpload">
            <x-add-pdf></x-add-pdf>
        </x-modal>
    </div>

</x-app-layout>
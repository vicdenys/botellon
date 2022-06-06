<x-app-layout>

    <div x-data='{{ $errors->any() ? "{open: true}" : "{open: false}"  }}'>
        <x-slot name="header">
            <h2 class="font-semibold  text-gray-800 leading-tight">
                {{ __('dashboard') }}
            </h2>
        </x-slot>

        <div class="py-6">

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                @if (Session::has('success'))
                <div class="alert alert-danger mb-4" >
                    <ul class="bg-green-100 p-2 ">
                        
                        <li class="text-green-900">{{ Session::get('success') }}</li>
                        
                    </ul>
                </div>
                @endif

                @if(!$activeFile->count() && $files->count())

                <p class=" bg-rose-500 text-white mb-4 rounded p-3">
                    Er is nog geen menu bestand actief. Maak er eentje actief door in de tabel op 'maak actief te klikken'...
                </p>

                @endif

                <x-button @click="open = true" class="my-6">
                    {{ __('upload pdf') }}
                </x-button>
                <div class=" overflow-hidden shadow-sm sm:rounded-lg">

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
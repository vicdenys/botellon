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
                <x-button @click="open = true" class="mb-8">
                    {{ __('upload pdf') }}
                </x-button>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                    <div class="p-6 bg-white border-b border-gray-200">

                    </div>
                </div>
            </div>
        </div>

        <x-modal name="pdfUpload">
            <x-add-pdf></x-add-pdf>
        </x-modal>
    </div>

</x-app-layout>
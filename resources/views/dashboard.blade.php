<x-app-layout>
    <div x-data="{open: false}">
        <x-slot name="header">
            <h2 class="font-semibold  text-gray-800 leading-tight">
                {{ __('dashboard') }}
            </h2>
        </x-slot>

        <div class="py-12">

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <x-button @click="open = true" class="mb-8">
                    {{ __('upload pdf') }}
                </x-button>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                    <div class="p-6 bg-white border-b border-gray-200">

                    </div>
                </div>
            </div>
        </div>

        <x-modal>
            <div class="fixed bg-white left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 p-6 w-96">
                <h1>upload PDF</h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-label for="email" :value="__('email')" />

                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('password')" />

                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    </div>



                    <div class="flex items-center justify-end mt-4">


                        <x-button class="ml-3">
                            {{ __('log in') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </x-modal>
    </div>

</x-app-layout>
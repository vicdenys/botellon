<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/" class="w-40 block mb-8 fill-white">
                <x-application-logo class="w-20" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-8 border border-red-600 p-4 " :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <!-- <x-label for="email" :value="__('email')" /> -->

                <x-input id="email" placeholder="your email" class=" " type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-8">
                <!-- <x-label for="password" :value="__('password')" /> -->

                <x-input id="password" placeholder="your password" class=""
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

           

            <div class="flex items-center justify-end mt-16">
                

                <x-button class="ml-3 text-xl  ">
                    {{ __('log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

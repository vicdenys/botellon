<nav x-data="{ open: false }" class="bg-green border-b border-white">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-[4.5rem]">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="w-16 block ">
                    <a class="fill-white" href="{{ route('dashboard') }}">
                        <x-application-logo />
                    </a>
                </div>

                <!-- Navigation Links
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('dashboard') }}
                    </x-nav-link>
                </div>
                 -->
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button aria-label="profile name" class="flex items-center font-victorianna-thin lowercase text-xl font-medium text-white hover:border-gray-300 focus:outline-none  focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-white h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>

                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-0 flex items-center sm:hidden">
                <button aria-label="menu button" @click="open = ! open" class="inline-flex font-light items-center p-2 bg-green lowercase  border  text-white hover:shadow-lg hover:scale-105 focus:bg-white focus:text-green focus:shadow-lg focus:scale-105 shadow-gray-900  hover:bg-white cursor-pointer hover:text-green active:bg-white hover:border-green focus:border-green active:border-green focus:outline-none  disabled:opacity-25 transition ease-in-out duration-150">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">


        <!-- Responsive Settings Options -->
        <div class="py-4 border-t border-white bg-white text-green px-4">
            <div class="">
                <div class="font-medium text-base ">Logged-in as: </div>
                <div class="font-medium text-sm ">{{ Auth::user()->name }}</div>
            </div>

            <div class="mt-3">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-button color='white' negative-color='green' class=" text-base  ">
                        {{ __('Log Out') }}
                    </x-button>

                    
                    
                </form>
            </div>
        </div>
    </div>
</nav>
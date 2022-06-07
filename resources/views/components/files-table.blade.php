<div>

    <div class="w-full mx-auto">

        <div class="relative overflow-x-auto ">
            @if($files->count())
            <table class="w-full text-xl text-left ">
                <thead class=" border-b border-white text-white font-light lowercase ">
                    <tr class="font-light font-victorianna-thin">

                        <th scope="col" class=" py-6 font-light">
                            File name
                        </th>
                        <th scope="col" class=" py-6 font-light hidden lg:table-cell">
                            created on
                        </th>
                        <th scope="col" class=" py-6 hidden lg:table-cell">

                        </th>
                        <th scope="col" class=" py-6 hidden lg:table-cell">
                            <span class="sr-only">Edit</span>
                        </th>
                        <th scope="col" class=" py-6 hidden lg:table-cell">
                        </th>
                        <th scope="col" class=" py-6 hidden lg:table-cell">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($files as $file)
                    <tr class=" border-b  text-white text-base lowercase">

                        <!-- SHOW  TABLE -->
                        <th scope="row" class="py-6 font-medium  whitespace-nowrap">
                            <div class="flex gap-6">
                                <a href="/menu-files/{{ $file->title }}" target="_blank">{{ substr($file->title, 11);}}</a>

                                <!-- SHOW RESPONSIVE TABLE -->
                                @if($file->is_active)
                                <span class="border text-xs  border-white rounded-[100%] px-2 py-1 text-green bg-white lg:hidden table-cell">
                                    active
                                </span>

                                @endif
                            </div>

                            <!-- SHOW RESPONSIVE TABLE -->
                            <div class="lg:hidden table-cell">
                                {{ $file->created_at->format('j F, Y - G:i')}}

                                <div class="flex gap-4 mt-4">
                                    @if(!$file->is_active)
                                    <div class="">

                                        <form method="POST" action="make-active-menu/{{$file->id}}">
                                            {{ csrf_field() }}
                                            {{ method_field('PUT') }}

                                            <div class="">
                                                <x-button color='green' negative-color='white' class="text-base">
                                                    {{ __('make active') }}
                                                </x-button>
                                            </div>
                                        </form>

                                    </div>
                                    @endif
                                    <div x-data="{openDeleteModal : false}">
                                        <x-button @click="openDeleteModal = true" color='white' negative-color='red-600' class="text-base ">
                                            {{ __('delete') }}
                                        </x-button>
                                        <div x-show="openDeleteModal" class="fixed flex items-center justify-center left-0 top-0 w-screen h-screen ">
                                            <div @click="openDeleteModal = false" class="w-full h-full absolute left-0 top-0 bg-black/70">

                                            </div>
                                            <div class="p-4 sm:w-96 w-[90%] sm:mx-0 bg-white text-green absolute text-left">
                                                <h1 class="font-light font-victorianna-thin text-xl mb-4">delete file</h1>
                                                <p class="whitespace-normal">
                                                    are you sure you want to delete <span class="italic text-green/50">'{{substr($file->title, 11);}}'</span>. This can't be undone.

                                                </p>
                                                @if($file->is_active)
                                                <p class="whitespace-normal bg-black p-4  my-4 text-white ">
                                                    This is the active menu. Once deleted, make sure to activate another one.
                                                </p>
                                                @endif

                                                <form method="POST" action="delete-menu/{{$file->id}}">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}

                                                    <div class="form-group mt-4">

                                                        <x-button color='white' negative-color='red-600' class="ml-3 float-right text-base ">
                                                            {{ __('delete') }}
                                                        </x-button>
                                                        <a @click=" openDeleteModal = false" class="float-right ml-4  font-light items-center px-4 py-2 border-green bg-green lowercase  border  text-white hover:shadow-lg hover:scale-105 focus:bg-white focus:text-green focus:shadow-lg focus:scale-105 shadow-gray-900  hover:bg-white cursor-pointer hover:text-green active:bg-white hover:border-green focus:border-green active:border-green focus:outline-none  disabled:opacity-25 transition ease-in-out duration-150">
                                                            cancel
                                                        </a>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </th>
                        <td class="py-6 hidden lg:table-cell">
                            {{ $file->created_at->format('j F, Y - G:i')}}
                        </td>
                        <td class="py-6 hidden lg:table-cell">
                            @if($file->is_active)
                            <span class="border border-white rounded-[100%] px-2 py-1 text-green bg-white">
                                active
                            </span>

                            @endif
                        </td>
                        <td class="py-6 text-right hidden lg:table-cell">

                        <td class="py-6 text-right hidden lg:table-cell">
                            @if(!$file->is_active)
                            <form method="POST" action="make-active-menu/{{$file->id}}">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}

                                <div class="form-group">
                                    <x-button color='green' negative-color='white' class="ml-3 float-right text-base">
                                        {{ __('make active') }}
                                    </x-button>
                                </div>
                            </form>
                            @endif
                        </td class="hidden lg:table-cell">

                        </td>
                        <td class="py-6 text-right hidden lg:table-cell" x-data="{ openDeleteModal: false}">
                            <x-button @click="openDeleteModal = true" color='white' negative-color='red-600' class="ml-3 text-base ">
                                {{ __('delete') }}
                            </x-button>
                            <div x-show="openDeleteModal" class="fixed flex items-center justify-center left-0 top-0 w-screen h-screen ">
                                <div @click="openDeleteModal = false" class="w-full h-full absolute left-0 top-0 bg-black/70">

                                </div>
                                <div class="p-4 w-96 bg-white text-green absolute text-left">
                                    <h1 class="font-light font-victorianna-thin text-xl mb-4">delete file</h1>
                                    <p>
                                        are you sure you want to delete <span class="italic text-green/50">'{{substr($file->title, 11);}}'</span>. This can't be undone.

                                    </p>
                                    @if($file->is_active)
                                    <p class=" bg-black p-4  my-4 text-white ">
                                        This is the active menu. Once deleted, make sure to activate another one.
                                    </p>
                                    @endif

                                    <form method="POST" action="delete-menu/{{$file->id}}">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <div class="form-group mt-4">

                                            <x-button color='white' negative-color='red-600' class="ml-3 float-right text-base ">
                                                {{ __('delete') }}
                                            </x-button>
                                            <a @click=" openDeleteModal = false" class="float-right ml-4  font-light items-center px-4 py-2 border-green bg-green lowercase  border  text-white hover:shadow-lg hover:scale-105 focus:bg-white focus:text-green focus:shadow-lg focus:scale-105 shadow-gray-900  hover:bg-white cursor-pointer hover:text-green active:bg-white hover:border-green focus:border-green active:border-green focus:outline-none  disabled:opacity-25 transition ease-in-out duration-150">
                                                cancel
                                            </a>
                                        </div>
                                    </form>
                                </div>

                            </div>

                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
            @else
            <div class="flex w-full py-24 items-center justify-center text-gray-400">
                <p>geen menu gevonden. klik op 'upload pdf' om er een toe te voegen...</p>
            </div>
            @endif

        </div>
    </div>
</div>
<div>

    <div class="w-full mx-auto">

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            @if($files->count())
            <table class="w-full text-xl text-left ">
                <thead class=" border-b border-white text-white font-light lowercase ">
                    <tr class="font-light font-victorianna-thin">

                        <th scope="col" class=" py-6 font-light">
                            File name
                        </th>
                        <th scope="col" class=" py-6 font-light">
                            created at
                        </th>
                        <th scope="col" class=" py-6">

                        </th>
                        <th scope="col" class=" py-6">
                            <span class="sr-only">Edit</span>
                        </th>
                        <th scope="col" class=" py-6">
                        </th>
                        <th scope="col" class=" py-6">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($files as $file)
                    <tr class=" border-b  text-white text-base lowercase">
                        <th scope="row" class="py-6 font-medium  whitespace-nowrap">
                            <a href="/menu-files/{{ $file->title }}" target="_blank">{{ $file->title}}</a>
                        </th>
                        <td class="py-6">
                            {{ $file->created_at}}
                        </td>
                        <td class="py-6 ">
                            @if($file->is_active)
                            <span class="border border-white rounded-[100%] px-2 py-1 text-green bg-white">
                                active
                            </span>

                            @endif
                        </td>
                        <td class="py-6 text-right">

                        <td class="py-6 text-right">
                            @if(!$file->is_active)
                            <form method="POST" action="make-active-menu/{{$file->id}}">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}

                                <div class="form-group">
                                    <x-button class="ml-3 float-right text-base">
                                        {{ __('make active') }}
                                    </x-button>
                                </div>
                            </form>
                            @endif
                        </td>

                        </td>
                        <td class="py-6 text-right" x-data="{ openDeleteModal: false}">
                            <x-button @click="openDeleteModal = true" class="ml-3 text-base hover:bg-red-600 focus:bg-red-600 active:bg-red-600  text-red-600 border-red-600">
                                {{ __('delete') }}
                            </x-button>
                            <div x-show="openDeleteModal" class="fixed flex items-center justify-center left-0 top-0 w-screen h-screen ">
                                <div @click="openDeleteModal = false" class="w-full h-full absolute left-0 top-0 bg-black/70">

                                </div>
                                <div class="p-4 w-96 bg-white text-green absolute text-left">
                                    <h1 class="font-light font-victorianna-thin text-xl mb-4">delete file</h1>
                                    <p>
                                        are you sure you want to delete <span class="italic text-green/50">'{{$file->title}}'</span>. This can't be undone.

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
                                            <x-button class="ml-3 float-right text-base hover:bg-red-600 focus:bg-red-600 active:bg-red-600 hover:text-white focus:text-white active:text-white  text-red-600 border-red-600">
                                                {{ __('delete') }}
                                            </x-button>
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
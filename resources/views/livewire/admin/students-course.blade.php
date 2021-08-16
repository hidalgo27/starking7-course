<div>
    <div class="bg-gray-200 py-4">


{{--    {{$students}}--}}

{{--        @foreach($students as $student)--}}
{{--            <tr>--}}
{{--                <td class="px-6 py-4 whitespace-nowrap">--}}
{{--                    <div class="flex items-center">--}}
{{--                        <div class="flex-shrink-0 h-10 w-10">--}}
{{--                            <img class="h-10 w-10 object-cover object-center rounded-full" src="{{$student->profile_photo_url}}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="ml-4">--}}
{{--                            <div class="text-sm font-medium text-gray-900">--}}
{{--                                {{$student->name}}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </td>--}}
{{--                <td class="px-6 py-4 whitespace-nowrap">--}}
{{--                    <div class="text-sm text-gray-900">{{$student->email}}</div>--}}
{{--                </td>--}}


{{--                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">--}}
{{--                    <a href="" class="text-indigo-600 hover:text-indigo-900">Ver</a>--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}

        <div class="container flex">
{{--            <button class="bg-white shadow h-12 px-4 rounded-lg text-gray-700" wire:click="resetFilters">--}}
{{--                <i class="fas fa-archway text-xs mr-2"></i> Todos los Cursos--}}
{{--            </button>--}}

            <!-- Dropdown -->
            <div x-data="{ open: false }" class="relative mx-4">
                <button class="block h-12 rounded-lg overflow-hidden focus:outline-none bg-white shadow px-4 text-gray-700" x-on:click="open = true">
                    <i class="fas fa-tags text-sm mr-2"></i>
                    Cursos
                    <i class="fas fa-angle-down text-sm ml-2"></i>
                </button>
                <!-- Dropdown Body -->
                <div x-show="open" class="absolute w-96 w-40 mt-2 py-2 bg-white border h-96 overflow-auto rounded z-50 shadow-xl" x-on:click.away="open = false">
                    @foreach($courses as $course)
                        <button class="w-full text-left transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-blue-500 hover:text-white" wire:click="$set('course_id', {{$course->id}})" x-on:click="open = false">
                            {{$course->title}}
                        </button>
                    @endforeach
                </div>
                <!-- // Dropdown Body -->
            </div>
            <!-- // Dropdown -->

        </div>
    </div>

    <x-table-responsive>
{{--        <div class="px-6 py-4">--}}
{{--            <input wire:keydown="limpiar_page" wire:model="search" type="text" class="border-gray-300 rounded-md px-2 py-3 w-full shadow-sm" placeholder="Ingrese el nombre de un curso">--}}

{{--        </div>--}}

            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Curso
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Matricular
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Certificado normal
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Certificado CIP
                    </th>
{{--                    <th scope="col" class="relative px-6 py-3">--}}
{{--                        <span class="sr-only">Edit</span>--}}
{{--                    </th>--}}
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">


                @foreach($course_users as $course_user)
{{--                    {{$course}}--}}
{{--{{$course_user}}--}}
{{--                        @foreach($course_user->users as $student)--}}
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 object-cover object-center rounded-full" src="{{$course_user->users->profile_photo_url}}" alt="">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{$course_user->users->name}}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{$course_user->users->email}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap col">
                                    <div class="text-sm text-gray-900">{{$course_user->course->title}}</div>
                                </td>


                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium" width="20px">
                                    <div class="flex">
                                        <div class="flex items-center cursor-pointer" wire:click="status({{$course_user->certifications->id}})">

                                            @if($course_user->certifications->status > 0)
                                                <i class="fas fa-toggle-on text-2xl text-blue-600 mr-1"></i>
                                            @else
                                                <i class="fas fa-toggle-off text-2xl text-gray-600 mr-1"></i>
                                            @endif
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium" width="20px">
                                    <div class="flex">
                                        <div class="flex items-center cursor-pointer" wire:click="certification({{$course_user->certifications->id}})">

                                            @if($course_user->certifications->status == 2)
                                                <i class="fas fa-toggle-on text-2xl text-blue-600 mr-1"></i>
                                            @else
                                                <i class="fas fa-toggle-off text-2xl text-gray-600 mr-1"></i>
                                            @endif
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium" width="20px">
                                    <div class="flex">
                                        <div class="flex items-center cursor-pointer" wire:click="certification_cip({{$course_user->certifications->id}})">

                                            @if($course_user->certifications->status == 3)
                                                <i class="fas fa-toggle-on text-2xl text-blue-600 mr-1"></i>
                                            @else
                                                <i class="fas fa-toggle-off text-2xl text-gray-600 mr-1"></i>
                                            @endif
                                        </div>
                                    </div>
                                </td>

                            </tr>
{{--                        @endforeach--}}

                @endforeach

                <!-- More people... -->
                </tbody>
            </table>
{{--            <div class="px-6 py-4">--}}
{{--                {{$students->links()}}--}}
{{--            </div>--}}
    </x-table-responsive>

{{--    <div class="card">--}}
{{--        <div class="card-header">--}}
{{--            <input wire:keydown="limpiar_page" wire:model="search" type="text" class="form-control w-100" placeholder="Escriba un nombre ...">--}}
{{--        </div>--}}
{{--        @if($users->count())--}}
{{--            <div class="card-body">--}}
{{--                <table class="table table-striped">--}}
{{--                    <thead>--}}
{{--                    <tr>--}}
{{--                        <th>ID</th>--}}
{{--                        <th>Nombre</th>--}}
{{--                        <th>Email</th>--}}
{{--                        <th></th>--}}
{{--                    </tr>--}}
{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                    @foreach($users as $user)--}}
{{--                        <tr>--}}
{{--                            <td>{{$user->id}}</td>--}}
{{--                            <td>{{$user->name}}</td>--}}
{{--                            <td>{{$user->email}}</td>--}}
{{--                            <td width="10px">--}}
{{--                                <a class="btn btn-primary" href="{{route('admin.students.course.edit', $user)}}">Editar</a>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
{{--                    </tbody>--}}
{{--                </table>--}}
{{--            </div>--}}
{{--            <div class="card-footer red">--}}
{{--                {{$users->links()}}--}}
{{--            </div>--}}
{{--        @else--}}
{{--            <div class="card-body">--}}
{{--                <strong>No hay registros</strong>--}}
{{--            </div>--}}
{{--        @endif--}}
{{--    </div>--}}
</div>

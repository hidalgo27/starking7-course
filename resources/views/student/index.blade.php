<x-app-layout>
    @livewire('student.courses-index')
</x-app-layout>


{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Dashboard') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

{{--    <div class="py-12">--}}
{{--        <div class="container">--}}
{{--            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">--}}
{{--                --}}{{--                <x-jet-welcome />--}}
{{--                @if(session('info'))--}}
{{--                    <div class="alert alert-success bg-green-500 p-4">--}}
{{--                        {{session('info')}}--}}
{{--                    </div>--}}
{{--                @endif--}}

{{--                <h3>Mis Cursos</h3>--}}

{{--                <table class="min-w-full divide-y divide-gray-200">--}}
{{--                    <thead class="bg-gray-50">--}}
{{--                    <tr>--}}
{{--                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">--}}
{{--                            Nombre--}}
{{--                        </th>--}}
{{--                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">--}}
{{--                            Matriculados--}}
{{--                        </th>--}}
{{--                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">--}}
{{--                            Calificación--}}
{{--                        </th>--}}
{{--                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">--}}
{{--                            Status--}}
{{--                        </th>--}}
{{--                        <th scope="col" class="relative px-6 py-3">--}}
{{--                            <span class="sr-only">Edit</span>--}}
{{--                        </th>--}}
{{--                    </tr>--}}
{{--                    </thead>--}}
{{--                    <tbody class="bg-white divide-y divide-gray-200">--}}

{{--                    @foreach($courses as $course)--}}
{{--                        <tr>--}}
{{--                            <td class="px-6 py-4 whitespace-nowrap">--}}
{{--                                <div class="flex items-center">--}}
{{--                                    <div class="flex-shrink-0 h-10 w-10">--}}
{{--                                        @isset($course->image)--}}
{{--                                            <img class="h-10 w-10 object-cover object-center rounded-full" src="{{Storage::url($course->image->url)}}" alt="">--}}
{{--                                        @else--}}
{{--                                            <img class="h-10 w-10 object-cover object-center rounded-full" src="https://images.pexels.com/photos/5905710/pexels-photo-5905710.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">--}}
{{--                                        @endisset--}}
{{--                                    </div>--}}
{{--                                    <div class="ml-4">--}}
{{--                                        <div class="text-sm font-medium text-gray-900">--}}
{{--                                            {{$course->title}}--}}
{{--                                        </div>--}}
{{--                                        <div class="text-sm text-gray-500">--}}
{{--                                            {{$course->category->name}}--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                            <td class="px-6 py-4 whitespace-nowrap">--}}
{{--                                <div class="text-sm text-gray-900">{{$course->students->count()}}</div>--}}
{{--                                <div class="text-sm text-gray-500">Alumnos matriculados</div>--}}
{{--                            </td>--}}

{{--                            <td class="px-6 py-4 whitespace-nowrap">--}}
{{--                                <div class="text-sm text-gray-900 flex items-center">--}}
{{--                                    {{$course->rating}}--}}
{{--                                    <ul class="flex text-sm ml-2">--}}
{{--                                        <li class="mr-1">--}}
{{--                                            <i class="fas fa-star text-{{$course->rating >= 1 ? 'yellow' : 'gray'}}-400"></i>--}}
{{--                                        </li>--}}
{{--                                        <li class="mr-1">--}}
{{--                                            <i class="fas fa-star text-{{$course->rating >= 1 ? 'yellow' : 'gray'}}-400"></i>--}}
{{--                                        </li>--}}
{{--                                        <li class="mr-1">--}}
{{--                                            <i class="fas fa-star text-{{$course->rating >= 1 ? 'yellow' : 'gray'}}-400"></i>--}}
{{--                                        </li>--}}
{{--                                        <li class="mr-1">--}}
{{--                                            <i class="fas fa-star text-{{$course->rating >= 1 ? 'yellow' : 'gray'}}-400"></i>--}}
{{--                                        </li>--}}
{{--                                        <li class="mr-1">--}}
{{--                                            <i class="fas fa-star text-{{$course->rating >= 1 ? 'yellow' : 'gray'}}-400"></i>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <div class="text-sm text-gray-500">Valoración del curso</div>--}}
{{--                            </td>--}}

{{--                            <td class="px-6 py-4 whitespace-nowrap">--}}

{{--                                @switch($course->status)--}}
{{--                                    @case(1)--}}
{{--                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">--}}
{{--                              Borrador--}}
{{--                            </span>--}}
{{--                                    @break--}}
{{--                                    @case(2)--}}
{{--                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">--}}
{{--                              Revisión--}}
{{--                            </span>--}}
{{--                                    @break--}}
{{--                                    @case(3)--}}
{{--                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">--}}
{{--                              Publicado--}}
{{--                            </span>--}}
{{--                                    @break--}}
{{--                                @endswitch--}}

{{--                            </td>--}}
{{--                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">--}}
{{--                                <a href="{{route('instructor.courses.edit', $course)}}" class="text-indigo-600 hover:text-indigo-900">Edit</a>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
{{--                    <!-- More people... -->--}}
{{--                    </tbody>--}}
{{--                </table>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--</x-app-layout>--}}

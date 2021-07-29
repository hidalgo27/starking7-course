<div>
{{--    <x-slot name="course">--}}
{{--        {{$course->slug}}--}}
{{--    </x-slot>--}}

    <h2 class="text-2xl font-bold mb-4">ESTUDIANTES DEL CURSO</h2>
{{--    <hr class="mt-2 mb-6">--}}

    <x-table-responsive>
        <div class="px-6 py-4">
            <input wire:model="search" type="text" class="border-gray-300 rounded-md form-input shadow-sm" placeholder="Ingrese el nombre de un curso">

        </div>

        @if($students->count())
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Email
                    </th>
                    <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">

                @foreach($students as $student)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 object-cover object-center rounded-full" src="{{$student->profile_photo_url}}" alt="">
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{$student->name}}
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{$student->email}}</div>
                        </td>


                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="" class="text-indigo-600 hover:text-indigo-900">Ver</a>
                        </td>
                    </tr>
                @endforeach
                <!-- More people... -->
                </tbody>
            </table>
            <div class="px-6 py-4">
                {{$students->links()}}
            </div>
        @else
            <div class="px-6 py-4">
                No hay ningún registro
            </div>
        @endif
    </x-table-responsive>

</div>

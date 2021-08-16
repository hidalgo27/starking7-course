<div class="container py-8">
    <!-- This example requires Tailwind CSS v2.0+ -->

    <x-table-responsive>

        @if($courses->count())
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Nombre
                    </th>
{{--                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">--}}
{{--                        Matriculados--}}
{{--                    </th>--}}
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Calificación
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Estado
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        link
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Certificado
                    </th>

{{--                    <th scope="col" class="relative px-6 py-3">--}}
{{--                        <span class="sr-only">Edit</span>--}}
{{--                    </th>--}}
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">

                @foreach($courses as $course)
                    @foreach($course->course_user as $student)

                        @if($student->user_id == Auth::user()->id)

                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            @isset($course->image)
                                                <img class="h-10 w-10 object-cover object-center rounded-full" src="{{Storage::url($course->image->url)}}" alt="">
                                            @else
                                                <img class="h-10 w-10 object-cover object-center rounded-full" src="https://images.pexels.com/photos/5905710/pexels-photo-5905710.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                                            @endisset
                                        </div>
                                        <div class="ml-4">
                                            <a href="{{route('courses.show', $course)}}">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{$course->title}}
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    {{$course->category->name}}
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900 flex items-center">
                                        {{$course->rating}}
                                        <ul class="flex text-sm ml-2">
                                            <li class="mr-1">
                                                <i class="fas fa-star text-{{$course->rating >= 1 ? 'yellow' : 'gray'}}-400"></i>
                                            </li>
                                            <li class="mr-1">
                                                <i class="fas fa-star text-{{$course->rating >= 1 ? 'yellow' : 'gray'}}-400"></i>
                                            </li>
                                            <li class="mr-1">
                                                <i class="fas fa-star text-{{$course->rating >= 1 ? 'yellow' : 'gray'}}-400"></i>
                                            </li>
                                            <li class="mr-1">
                                                <i class="fas fa-star text-{{$course->rating >= 1 ? 'yellow' : 'gray'}}-400"></i>
                                            </li>
                                            <li class="mr-1">
                                                <i class="fas fa-star text-{{$course->rating >= 1 ? 'yellow' : 'gray'}}-400"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="text-sm text-gray-500">Valoración del curso</div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">

                                    @switch($student->certifications->status)
                                        @case(0)
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                          Pendiente
                                        </span>
                                        <div class="text-sm text-gray-500">de aprobación por el admin</div>
                                        @break
                                        @case(1)
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                          En proceso
                                        </span>
                                        @break
                                        @case(2)
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                          Terminado
                                        </span>
                                        @break
                                        @case(3)
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                          Terminado con CIP
                                        </span>
                                        @break
                                    @endswitch

                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    @if($student->certifications->status >= 2)
                                        <a href="{{route('students.verification', encrypt(Auth::user()->id))}}" class="text-indigo-600 hover:text-indigo-900"><i class="fas fa-link mr-2"></i>Link</a>
                                    @else
                                        pendiente
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    @if($student->certifications->status >= 2)
                                        <a href="{{route('students.certification', [$course, $student->certifications])}}" class="text-indigo-600 hover:text-indigo-900 flex items-center"><i class="fas fa-download mr-2"></i> Descargar certificado</a>
                                    @else
                                        Certificado <br>pendiente
                                    @endif

                                </td>
                            </tr>
                        @endif
                    @endforeach

{{--                    @if(count($course->students) > 0)--}}
{{--                    --}}
{{--                    @endif--}}
                @endforeach
                <!-- More people... -->
                </tbody>
            </table>
{{--            <div class="px-6 py-4">--}}
{{--                {{$courses->links()}}--}}
{{--            </div>--}}
        @else
            <div class="px-6 py-4">
                No hay ningún registro
            </div>
        @endif
    </x-table-responsive>

    <section class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-6">
    @if($courses->count())
        @foreach($courses as $course)
            @foreach($course->course_user as $student)
                @if($student->user_id == Auth::user()->id)
                    <div class="flex">
                        <div class="flex flex-col overflow-hidden transition duration-500 ease-in-out transform bg-white rounded-lg shadow-xl hover:scale-105">
{{--                            <img class="h-56 rounded-t-lg" alt="article image"--}}
{{--                                 src="https://images.unsplash.com/photo-1472437774355-71ab6752b434?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=967&amp;q=80">--}}
                            @isset($course->image)
                                <img class="h-56 w-full object-cover object-center" src="{{Storage::url($course->image->url)}}" alt="">
                            @else
                                <img class="h-10 w-10 object-cover object-center rounded-full" src="https://images.pexels.com/photos/5905710/pexels-photo-5905710.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                            @endisset
                            <div class="px-6 pt-4 mb-2 text-xl font-bold">
                                <span><a href="{{route('courses.show', $course)}}">{{$course->title}}</a></span>

                                <div class="text-sm text-gray-900 flex items-center">
                                    {{$course->rating}}
                                    <ul class="flex text-sm ml-2">
                                        <li class="mr-1">
                                            <i class="fas fa-star text-{{$course->rating >= 1 ? 'yellow' : 'gray'}}-400"></i>
                                        </li>
                                        <li class="mr-1">
                                            <i class="fas fa-star text-{{$course->rating >= 1 ? 'yellow' : 'gray'}}-400"></i>
                                        </li>
                                        <li class="mr-1">
                                            <i class="fas fa-star text-{{$course->rating >= 1 ? 'yellow' : 'gray'}}-400"></i>
                                        </li>
                                        <li class="mr-1">
                                            <i class="fas fa-star text-{{$course->rating >= 1 ? 'yellow' : 'gray'}}-400"></i>
                                        </li>
                                        <li class="mr-1">
                                            <i class="fas fa-star text-{{$course->rating >= 1 ? 'yellow' : 'gray'}}-400"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="text-sm text-gray-500">Valoración del curso</div>

                            </div>
                            <div class="px-6 pt-2 mt-auto">
                                @switch($student->certifications->status)
                                    @case(0)
                                        <small class="px-3 py-2 inline-flex text-sm flex-col leading-5 font-semibold w-full border-l-8 border-red-500 bg-red-100 text-red-800">
                                            <span class="font-bold mr-1">Pendiente.</span> de aprobación por el admin.
                                        </small>
                                    @break
                                    @case(1)
                                        <small class="px-3 py-2 inline-flex text-sm flex-col leading-5 font-semibold w-full border-l-8 border-yellow-500 bg-yellow-100 text-yellow-800">
                                            <span class="font-bold mr-1">En proceso.</span> Aún no culmino el curso
                                        </small>
                                    {{--                                    <div class="overflow-hidden h-16 text-yellow-800">Aún no culmino el curso</div>--}}
                                    @break
                                    @case(2)
                                        <small class="px-3 py-2 inline-flex flex-col text-sm leading-5 font-semibold w-full border-l-8 border-green-500 bg-green-100 text-green-800">
                                            <span class="font-bold mr-1">Terminado.</span>
                                            Curso terminado y alumno certificado por Starking7
                                        </small>
                                    @break
                                    @case(3)
                                    <small class="px-3 py-2 inline-flex flex-col text-sm leading-5 font-semibold w-full border-l-8 border-green-500 bg-green-100 text-green-800">
                                        <span class="font-bold mr-1">Terminado con CIP.</span>
                                        Curso terminado y alumno certificado por Starking7
                                    </small>
                                    @break
                                @endswitch
                            </div>
                            <div class="px-6 py-4 flex justify-between">
                                @if($student->certifications->status >= 2)
                                    <a href="{{route('students.verification', encrypt(Auth::user()->id))}}" class="text-indigo-600 hover:text-indigo-900"><i class="fas fa-link mr-2"></i>Link</a>
                                @else
                                    <span class="italic">pendiente</span>
                                @endif
                                @if($student->certifications->status >= 2)
                                    <a href="{{route('students.certification', [$course, $student->certifications])}}" class="text-indigo-600 hover:text-indigo-900 flex items-center"><i class="fas fa-download mr-2"></i> Descargar
                                        certificado</a>
                                @else
                                    <span class="italic">Certificado pendiente</span>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        @endforeach
    @endif
</section>

</div>

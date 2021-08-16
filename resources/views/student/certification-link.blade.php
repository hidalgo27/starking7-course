<x-app-layout>

    <div class="container mt-6">

        <div class="bg-white rounded-lg pb-6">
            <div class="h-48 overflow-hidden rounded-tl-lg rounded-tr-lg overflow-hidden h-56">
                <img class="object-cover h-full w-full" src="https://picsum.photos/600/300" />
            </div>

            <div class="-mt-16">
                <div class="flex justify-center rounded-full">
                    <img class="w-32 rounded-full" src="{{ $user->profile_photo_url }}" />
                </div>
            </div>
            <div class="mt-2 text-lg text-center flex flex-col justify-center">
                <p class="text-center"><span class="font-bold">{{ $user->name }}</span></p>
                <div class="flex gap-4 justify-center text-gray-500">
                    <p><i class="fas fa-graduation-cap"></i> Estudiante <span class="font-bold">Starking7</span></p>
                    <p><i class="fas fa-envelope mr-2"></i>{{ $user->email }}</p>
                </div>
                <div class="w-1/2 relative mx-auto mt-3">
                    <input id="foo" class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none" value="{{route('students.verification', encrypt($user->id))}}">
                    <!-- Trigger -->
                    <button class="btn-c btn-primary absolute right-0 top-0" data-clipboard-target="#foo">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

    </div>

    <section class="container grid grid-cols-1 lg:grid-cols-3 gap-6 mt-6">


            @foreach($course_student as $course_students)
                @if($course_students->certifications->status > 0)
                    <div class="flex">
                        <div class="flex flex-col overflow-hidden transition duration-500 ease-in-out transform bg-white rounded-lg shadow-xl hover:scale-105">
                            <img class="h-56 rounded-t-lg" alt="article image"
                                 src="https://images.unsplash.com/photo-1472437774355-71ab6752b434?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=967&amp;q=80">
                            <div class="px-6 pt-4 mb-2 text-xl font-bold">
                                <span>{{$course_students->course->title}}</span>
                            </div>
                            <div class="px-6 pt-2 mt-auto">
                                @switch($course_students->certifications->status)
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
                            <div class="px-6 py-4">
                                @if($course_students->certifications->status >= 2)
                                    <a href="{{route('students.certification_off', [$course_students->course, $course_students->certifications, encrypt($user->name)])}}" class="text-indigo-600 hover:text-indigo-900 flex items-center"><i class="fas fa-download mr-2"></i> Descargar
                                        certificado</a>
                                @else
                                    Certificado pendiente
                                @endif
                            </div>
                        </div>
                    </div>
            @endif
            @endforeach



    </section>
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.8/dist/clipboard.min.js"></script>
        <script>
            new ClipboardJS('.btn-c');
        </script>
    @endpush
</x-app-layout>

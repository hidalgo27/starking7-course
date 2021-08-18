<x-app-layout>
    <section class="bg-cover" style="background-image: url({{asset('images/home/people.jpg')}})">
        <div class="container py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">LA MEJOR FORMACION DE LATINOAMERICA</h1>
                <p class="text-white text-lg mt-2 mb-4">En Starking7 lograrás la mejor preparación para los desafíos en la construcción de la mano de un equipo de BIM Managers e instructores internacionales certificados de Autodesk, impartiendo una enseñanza de primera categoría en BIM. </p>

                @livewire('search')

            </div>
        </div>
    </section>

    <section class="container grid grid-cols-7 gap-12 my-12">
        <div class="">
            <img class="object-contain w-full" src="{{asset('images/sponsor/adobe.png')}}" alt="">
        </div>
        <div class="">
            <img class="object-contain w-full" src="{{asset('images/sponsor/apple.png')}}" alt="">
        </div>
        <div class="">
            <img class="object-contain w-full" src="{{asset('images/sponsor/autodesk.png')}}" alt="">
        </div>
        <div class="">
            <img class="object-contain w-full" src="{{asset('images/sponsor/certiport.png')}}" alt="">
        </div>
        <div class="">
            <img class="object-contain w-full" src="{{asset('images/sponsor/ic3.png')}}" alt="">
        </div>
        <div class="">
            <img class="object-contain w-full" src="{{asset('images/sponsor/microsoft.png')}}" alt="">
        </div>
        <div class="">
            <img class="object-contain w-full" src="{{asset('images/sponsor/pmi.png')}}" alt="">
        </div>
    </section>

    <section class="mt-24">
        <div class="container mb-12">
            <div class="flex justify-center">
                <h2 class="text-gray-600 font-bold text-3xl mb-4 ml-2 items-center flex">
                    <div class="flex">
                        <div class="bg-yellow-400 h-3 w-3 rounded-full"></div>
                        <div class="bg-yellow-400 h-3 w-3 rounded-full mx-2"></div>
                        <div class="bg-yellow-400 h-3 w-3 rounded-full"></div>
                    </div>
                    <span class="mx-2">Formación Integral</span>
                    <div class="flex">
                        <div class="bg-yellow-400 h-3 w-3 rounded-full"></div>
                        <div class="bg-yellow-400 h-3 w-3 rounded-full mx-2"></div>
                        <div class="bg-yellow-400 h-3 w-3 rounded-full"></div>
                    </div>
                </h2>
            </div>
            <p class="ml-2 text-center">Capacitate con un equipo integrado con los mejores docentes a nivel mundial logrando un nivel de aprendizaje de las mas altas esferas para convertirte en el profesional mas destacado y cotizado por las empresas e instituciones</p>
        </div>
        <div class="container swiper-container slider-featured">
            <div class="swiper-wrapper my-12">
                @foreach($courses as $course)
                    <x-course-card :course="$course"></x-course-card>
                @endforeach
            </div>
        </div>
        <div class="container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y8 hidden">
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('images/home/newborn-6399136_640.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h2 class="text-center text-xl text-gray-700 ">Cursos Y Proyectos</h2>
                    <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad atque aut, blanditiis consequatur.</p>
                </header>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('images/home/people.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h2 class="text-center text-xl text-gray-700 ">Manual de Proyectos</h2>
                    <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad atque aut, blanditiis consequatur.</p>
                </header>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('images/home/dog-6394502_640.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h2 class="text-center text-xl text-gray-700 ">Blog Proyectos</h2>
                    <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad atque aut, blanditiis consequatur.</p>
                </header>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('images/home/snail-6400177_640.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h2 class="text-center text-xl text-gray-700 ">Desarrollo de Proyectos</h2>
                    <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad atque aut, blanditiis consequatur.</p>
                </header>
            </article>
        </div>
    </section>

    <section class="mt-12 bg-gray-700 py-12">
        <h2 class="text-center text-white text-3xl">¿No sabes que curso llevar?</h2>
        <p class="text-center text-white">Lorem ipsum dolor sit amet elit. A ad corporis deserunt dolorum eligendi facilis fugit.</p>

        <div class="flex justify-center mt-4">
            <a href="{{route('courses.index')}}" class="btn-primary">Catálgogo de cursos</a>
        </div>

    </section>

    <section class="mt-24 mb-12">
        <div class="container">
            <div class="flex justify-center">
                <h2 class="text-gray-600 font-bold text-3xl mb-4 ml-2 items-center flex">
                    <div class="flex">
                        <div class="bg-yellow-400 h-3 w-3 rounded-full"></div>
                        <div class="bg-yellow-400 h-3 w-3 rounded-full mx-2"></div>
                        <div class="bg-yellow-400 h-3 w-3 rounded-full"></div>
                    </div>
                    <span class="mx-2">Cursos Asincrónicos</span>
                    <div class="flex">
                        <div class="bg-yellow-400 h-3 w-3 rounded-full"></div>
                        <div class="bg-yellow-400 h-3 w-3 rounded-full mx-2"></div>
                        <div class="bg-yellow-400 h-3 w-3 rounded-full"></div>
                    </div>
                </h2>
            </div>
            <p class="ml-2 text-center">Estudia en tu tiempo libre permitiendo administrar tus recursos de la mejor manera, a traves de nuestros cursos grabados semi asistidos, recibiendo la asesoria y resolucion de consultas de manera constante.</p>
        </div>
        <div class="container swiper-container slider-asinc">
            <div class="swiper-wrapper my-12">
                <div class="swiper-slide">
                    <img src="{{asset('images/cursos/asincronos/d.jpg')}}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('images/cursos/asincronos/c.jpg')}}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('images/cursos/asincronos/b.jpg')}}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('images/cursos/asincronos/a.jpg')}}" alt="">
                </div>
            </div>
        </div>
{{--        <div class="container grid grid-cols-2 gap-12">--}}
{{--            <div class="">--}}
{{--                <img src="{{asset('images/cursos/asincronos/d.jpg')}}" alt="">--}}
{{--            </div>--}}
{{--            <div class="">--}}
{{--                <img src="{{asset('images/cursos/asincronos/c.jpg')}}" alt="">--}}
{{--            </div>--}}
{{--            <div class="">--}}
{{--                <img src="{{asset('images/cursos/asincronos/b.jpg')}}" alt="">--}}
{{--            </div>--}}
{{--            <div class="">--}}
{{--                <img src="{{asset('images/cursos/asincronos/a.jpg')}}" alt="">--}}
{{--            </div>--}}

{{--        </div>--}}
        <div class="container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y8 hidden">
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('images/home/newborn-6399136_640.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h2 class="text-center text-xl text-gray-700 ">Cursos Y Proyectos</h2>
                    <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad atque aut, blanditiis consequatur.</p>
                </header>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('images/home/people.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h2 class="text-center text-xl text-gray-700 ">Manual de Proyectos</h2>
                    <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad atque aut, blanditiis consequatur.</p>
                </header>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('images/home/dog-6394502_640.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h2 class="text-center text-xl text-gray-700 ">Blog Proyectos</h2>
                    <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad atque aut, blanditiis consequatur.</p>
                </header>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('images/home/snail-6400177_640.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h2 class="text-center text-xl text-gray-700 ">Desarrollo de Proyectos</h2>
                    <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad atque aut, blanditiis consequatur.</p>
                </header>
            </article>
        </div>
    </section>


    <section class="mb-24 bg-white py-24" id="certificacion-global">
        <div class="container mb-12">
            <div class="flex justify-center">
                <h2 class="text-gray-600 font-bold text-3xl mb-4 ml-2 items-center flex">
                    <div class="flex">
                        <div class="bg-yellow-400 h-3 w-3 rounded-full"></div>
                        <div class="bg-yellow-400 h-3 w-3 rounded-full mx-2"></div>
                        <div class="bg-yellow-400 h-3 w-3 rounded-full"></div>
                    </div>
                    <span class="mx-2">Certificación Global</span>
                    <div class="flex">
                        <div class="bg-yellow-400 h-3 w-3 rounded-full"></div>
                        <div class="bg-yellow-400 h-3 w-3 rounded-full mx-2"></div>
                        <div class="bg-yellow-400 h-3 w-3 rounded-full"></div>
                    </div>
                </h2>
            </div>
{{--            <p class="ml-2 text-center">Estudia en tu tiempo libre permitiendo administrar tus recursos de la mejor manera, a traves de nuestros cursos grabados semi asistidos, recibiendo la asesoria y resolucion de consultas de manera constante.</p>--}}
        </div>

                <div class="container grid grid-cols-4 gap-12">
                    <div class="">
                        <img src="{{asset('images/cursos/certificacion/c1.png')}}" alt="">
                    </div>
                    <div class="">
                        <img src="{{asset('images/cursos/certificacion/c2.png')}}" alt="">
                    </div>
                    <div class="">
                        <img src="{{asset('images/cursos/certificacion/c3.png')}}" alt="">
                    </div>
                    <div class="">
                        <img src="{{asset('images/cursos/certificacion/c4.png')}}" alt="">
                    </div>

                </div>
        <div class="container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y8 hidden">
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('images/home/newborn-6399136_640.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h2 class="text-center text-xl text-gray-700 ">Cursos Y Proyectos</h2>
                    <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad atque aut, blanditiis consequatur.</p>
                </header>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('images/home/people.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h2 class="text-center text-xl text-gray-700 ">Manual de Proyectos</h2>
                    <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad atque aut, blanditiis consequatur.</p>
                </header>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('images/home/dog-6394502_640.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h2 class="text-center text-xl text-gray-700 ">Blog Proyectos</h2>
                    <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad atque aut, blanditiis consequatur.</p>
                </header>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('images/home/snail-6400177_640.jpg')}}" alt="">
                </figure>
                <header class="mt-2">
                    <h2 class="text-center text-xl text-gray-700 ">Desarrollo de Proyectos</h2>
                    <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad atque aut, blanditiis consequatur.</p>
                </header>
            </article>
        </div>
    </section>

    @push('css')
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    @endpush
    @push('scripts')
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <script>

            var swiper = new Swiper(".slider-asinc", {
                slidesPerView: 3,
                spaceBetween: 15,
                slidesPerGroup: 3,
                loop: true,
                loopFillGroupWithBlank: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
            var swiper = new Swiper(".slider-featured", {
                slidesPerView: 3,
                spaceBetween: 15,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        </script>

    @endpush
</x-app-layout>

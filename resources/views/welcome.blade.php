<x-app-layout>
    <section class="bg-cover" style="background-image: url({{asset('images/home/people.jpg')}})">
        <div class="container py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">Domina todo los cursos</h1>
                <p class="text-white text-lg mt-2 mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda at, ipsa iste non rerum saepe sint suscipit. Deserunt dolorem ducimus facilis in itaque nobis quia totam. Reprehenderit similique tempora totam?</p>

                @livewire('search');

            </div>
        </div>
    </section>

    <section class="mt-24">
        <h2 class="text-gray-600 text-center text-3xl mb-6">CONTENIDO</h2>

        <div class="container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y8">
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

    <section class="mt-24 bg-gray-700 py-12">
        <h2 class="text-center text-white text-3xl">¿No sabes que curso llevar?</h2>
        <p class="text-center text-white">Lorem ipsum dolor sit amet elit. A ad corporis deserunt dolorum eligendi facilis fugit.</p>

        <div class="flex justify-center mt-4">
            <a href="{{route('courses.index')}}" class="btn-primary">Catálgogo de cursos</a>
        </div>

    </section>

    <section class="my-24">
        <h2 class="text-center text-gray-600 text-3xl">Últimos Cursos</h2>
        <p class="text-center text-gray-500 text-sm mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, aut autem dolores dolorum exercitationem.</p>

        <div class="container grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach($courses as $course)
                <x-course-card :course="$course"></x-course-card>
            @endforeach
        </div>
    </section>

</x-app-layout>

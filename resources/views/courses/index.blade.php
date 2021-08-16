<x-app-layout>
    <section class="bg-cover" style="background-image: url({{asset('images/cursos/cursos.jpg')}})">
        <div class="container py-36">
            <div class="w-full md:3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">Los mejores Cursos</h1>
                <p class="text-white text-lg mb-4 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad aliquam blanditiis cum deleniti ex, in modi, natus nostrum quae quibusdam quo, repellendus? Deserunt, enim harum illo nihil perferendis voluptatum.</p>

                @livewire('search');

            </div>
        </div>
    </section>

    @livewire('courses-index')

</x-app-layout>

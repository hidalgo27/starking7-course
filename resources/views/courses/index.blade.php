<x-app-layout>
    <section class="bg-cover" style="background-image: url({{asset('images/cursos/cursos.jpg')}})">
        <div class="container py-36">
            <div class="w-full md:3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">LA MEJOR FORMACION DE LATINOAMERICA</h1>
                <p class="text-white text-lg mb-4 mt-2">En Starking7 lograrás la mejor preparación para los desafíos en la construcción de la mano de un equipo de BIM Managers e instructores internacionales certificados de Autodesk, impartiendo una enseñanza de primera categoría en BIM.</p>

                @livewire('search');

            </div>
        </div>
    </section>

    @livewire('courses-index')

</x-app-layout>
